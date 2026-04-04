<?php
/**
 * Template part for displaying page/post content
 * Fixed version with bug corrections
 */

$meta = get_post_meta( get_the_ID(), 'wp10ms_metabox', true );

// Archive/Blog List
if( is_home() || is_archive() || is_search() ) {
    ?>
    <div class="blog-posts">
        <?php
        

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        // if it's a search page, set posts_per_page to 6 for better performance
        if ( is_search() ) {
            $global_ppp = 6;
        } else {
            // Get global reading settings posts_per_page value
            $global_ppp = get_option( 'posts_per_page' );
        }
        $args = array(
            'post_type'             => 'post',
            'posts_per_page'        => $global_ppp,
            'order'                 => 'DESC',
            'orderby'               => 'date',
            'paged'                 => $paged,
            'ignore_sticky_posts'   => 1
        );

        // FIX: Add search parameter to fetch actual results on the search page
        if ( is_search() ) {
            $args['s'] = get_search_query();
        }

        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
            $result_count = 0;
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                // Set view count for each post in loop
                setPostViews(get_the_ID());
                $result_count++;
                $delay = $result_count * 50;
                ?>
                <div class="single-blog-post" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                    <div class="post-featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                    <div class="post-content">
                        <h2><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h2>
                        <div class="post-meta">
                            <?php
                            // Display view count
                            $post_views = getPostViews(get_the_ID());
                            if ( $post_views ) {
                                echo '<span><i class="fal fa-eye"></i>' . esc_html( $post_views ) . '</span>';
                            }
                            
                            // Display comment count
                            $comment_count = get_comments_number();
                            if ( $comment_count > 0 ) {
                                $comment_text = $comment_count === 1 ? __( 'Comment', 'wp10ms' ) : __( 'Comments', 'wp10ms' );
                                echo '<span><i class="fal fa-comments"></i>' . absint( $comment_count ) . ' ' . esc_html( $comment_text ) . '</span>';
                            }
                            
                            // Display date
                            echo '<span><i class="fal fa-calendar-alt"></i>' . esc_html( get_the_date() ) . '</span>';
                            ?>
                        </div>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <div class="author-info">
                                <div class="author-img" style="background-image: url('<?php echo esc_url( get_avatar_url( get_the_author_meta('ID') ) ); ?>')"></div>
                                <h5><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"><?php esc_html_e( 'by', 'wp10ms' ); ?> <?php echo esc_html( get_the_author() ); ?></a></h5>
                            </div>
                            <div class="post-link">
                                <a href="<?php echo esc_url( get_the_permalink() ); ?>"><i class="fal fa-arrow-right"></i> <?php esc_html_e( 'Read More', 'wp10ms' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <div class="page-nav-wrap mt-60 text-center">
        <ul>
            <?php
            // FIX: Manual link handling for search page to bypass global $wp_query limits
            if ( is_search() ) {
                if ( $paged > 1 ) : ?>
                    <li><a href="<?php echo esc_url( get_pagenum_link( $paged - 1 ) ); ?>"><i class="fal fa-long-arrow-left"></i></a></li>
                <?php endif;
            } else {
                if ( get_previous_posts_link() ) : ?>
                    <li><?php previous_posts_link('<i class="fal fa-long-arrow-left"></i>'); ?></li>
                <?php endif;
            }
            ?>

            <?php
            // Set up pagination arguments
            $pagination_args = array(
                'current'           => $paged,
                'total'             => $the_query->max_num_pages, // Total number of pages
                'mid_size'          => 2,  // Number of links around the current page
                'end_size'          => 1,  // Number of links at the beginning and end
                'prev_next'         => false, // We handle prev/next links manually
                'type'              => 'array',
            );

            // Generate pagination links
            $pagination_links = paginate_links( $pagination_args );

            if ( is_array( $pagination_links ) ) :
                foreach ( $pagination_links as $link ) : ?>
                    <li><?php echo $link; ?></li>
                <?php endforeach;
            endif;
            ?>

            <?php
            // FIX: Manual link handling for search page to bypass global $wp_query limits
            if ( is_search() ) {
                if ( $paged < $the_query->max_num_pages ) : ?>
                    <li><a href="<?php echo esc_url( get_pagenum_link( $paged + 1 ) ); ?>"><i class="fal fa-long-arrow-right"></i></a></li>
                <?php endif;
            } else {
                if ( get_next_posts_link() ) : ?>
                    <li><?php next_posts_link('<i class="fal fa-long-arrow-right"></i>'); ?></li>
                <?php endif;
            }
            ?>
        </ul>
    </div>
    <?php
} elseif( is_singular('page') ) {
    // Show the page content
    $the_content = get_the_content();
    if ( ! empty( $the_content )) :
        echo '<section style="padding:100px 0;"><div class="container"><div class="row"><div class="col-12">';
        the_content();
        echo '</div></div></div></section>';
    endif;
    
} elseif( is_singular('post') ) {
    
    // Increment view count for single post
    setPostViews(get_the_ID());
    $post_views = getPostViews(get_the_ID());
    ?>
    
    <div class="blog-post-details border-wrap">
        
        <!-- Featured Image Banner -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="single-blog-post post-featured">
                <div class="post-featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>')">
                    <div class="post-overlay"></div>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="single-blog-post post-details">
            <div class="post-content">
                <div class="post-cat">
                    <?php
                    // Fetch all categories of the current post
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        foreach ( $categories as $category ) {
                            // Get the URL for the category
                            $category_link = get_category_link( $category->term_id );
                            ?>
                            <a href="<?php echo esc_url( $category_link ); ?>">
                                <?php echo esc_html( $category->name ); ?>
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
                
                <h2><?php echo wp_kses_post( get_the_title() ); ?></h2>
                
                <div class="post-meta">
                    <?php
                    // Display view count - Fixed condition
                    if ( $post_views && $post_views !== '0 View' ) {
                        echo '<span><i class="fal fa-eye"></i>' . esc_html( $post_views ) . '</span>';
                    }
                    
                    // Display comment count - Fixed condition
                    $comment_count = get_comments_number();
                    if ( $comment_count > 0 ) {
                        $comment_text = $comment_count === 1 ? __( 'Comment', 'wp10ms' ) : __( 'Comments', 'wp10ms' );
                        echo '<span><i class="fal fa-comments"></i>' . absint( $comment_count ) . ' ' . esc_html( $comment_text ) . '</span>';
                    }
                    
                    // Display date - Always show date
                    echo '<span><i class="fal fa-calendar-alt"></i>' . esc_html( get_the_date() ) . '</span>';
                    
                    // Display author
                    echo '<span><i class="fal fa-user"></i>' . esc_html( get_the_author() ) . '</span>';
                    ?>
                </div>
                
                <?php the_content(); ?>
                
                <?php
                // Post pagination for multi-page posts
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wp10ms' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ) );
                ?>
            </div>
        </div>

        <div class="row tag-share-wrap">
            <div class="col-lg-8 col-12">
                <?php if ( has_tag() ) : ?>
                <h4><?php esc_html_e( 'Related Tags', 'wp10ms' ); ?></h4>
                <div class="tagcloud">
                    <?php
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        foreach ( $post_tags as $tag ) {
                            $tag_link = get_tag_link( $tag->term_id );
                            echo '<a href="' . esc_url( $tag_link ) . '">' . esc_html( $tag->name ) . '</a>';
                        }
                    }
                    ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-12 text-lg-right">
                <h4><?php esc_html_e( 'Social Shares', 'wp10ms' ); ?></h4>
                <div class="social-share">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on Facebook', 'wp10ms' ); ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on Twitter', 'wp10ms' ); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on LinkedIn', 'wp10ms' ); ?>">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?>&description=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on Pinterest', 'wp10ms' ); ?>">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_the_title() . ' ' . get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on WhatsApp', 'wp10ms' ); ?>">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Author Bio -->
        <?php
        $author_bio = get_the_author_meta( 'description' );
        if ( ! empty( $author_bio ) ) :
        ?>
        <div class="author-box">
            <div class="author-avatar">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
            </div>
            <div class="author-info">
                <h4><?php echo esc_html( get_the_author() ); ?></h4>
                <p><?php echo wp_kses_post( $author_bio ); ?></p>
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-link">
                    <?php esc_html_e( 'View all posts', 'wp10ms' ); ?> <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <!-- Related Posts -->
        <div class="related-post-wrap">
            <div class="related-post-title">
                <h3><?php esc_html_e( 'Related Posts', 'wp10ms' ); ?></h3>
            </div>
            <div class="row">
                <?php
                // Get current post's categories
                $categories = get_the_category();
                $category_ids = array();
                if ( $categories ) {
                    foreach( $categories as $category ) {
                        $category_ids[] = $category->term_id;
                    }
                    
                    // Query related posts
                    $related_args = array(
                        'category__in'   => $category_ids,
                        'post__not_in'   => array( get_the_ID() ),
                        'posts_per_page' => 2,
                        'orderby'        => 'rand',
                    );
                    
                    $related_query = new WP_Query( $related_args );
                    
                    if ( $related_query->have_posts() ) :
                        while ( $related_query->have_posts() ) : $related_query->the_post();
                        ?>
                        <div class="col-12 col-md-6">
                            <div class="single-related-post">
                                <div class="featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>"></a>
                                </div>
                                <div class="post-content">
                                    <div class="post-date">
                                        <span><i class="fal fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
                                    </div>
                                    <h4><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h4>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                }
                ?>
            </div>
        </div>

        <?php
        // Check if comments are allowed or if there are existing comments
        if ( ! post_password_required() ) :
            $comment_count = get_comments_number();
        ?>
        
        <!-- Comments Section - Fixed Conditions -->
        <?php if ( comments_open() || $comment_count > 0 ) : ?>
        <div class="comments-section-wrap pt-40">
            <div class="comments-heading">
                <h3>
                    <?php
                    if ( $comment_count > 0 ) {
                        printf(
                            _n( '%s Comment', '%s Comments', $comment_count, 'wp10ms' ),
                            number_format_i18n( $comment_count )
                        );
                    } else {
                        esc_html_e( 'Leave a Comment', 'wp10ms' );
                    }
                    ?>
                </h3>
            </div>
            <?php
            // Load comment template
            comments_template();
            ?>
        </div>
        <?php endif; ?>
        
        <?php endif; // End password check ?>

    </div>
    <?php
    
} elseif( is_singular( 'project' ) ) {

    $repeater_boxes = isset($meta['v6-project-img-rep']) && is_array($meta['v6-project-img-rep']) ? $meta['v6-project-img-rep'] : [];
    if ( !empty($repeater_boxes) ) :
    ?>
        <div class="case-grid-photos">
            <?php
            foreach( $repeater_boxes as $repeater_box ) {
                if ( isset( $repeater_box['v6-project-img']['url'] ) ) {
                    ?>
                    <div class="single-photo-grid">
                        <img src="<?php echo esc_url( $repeater_box['v6-project-img']['url'] ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    <?php endif; ?>
    
    <div class="case-contents-wrap">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="case-details-content mr-0 mr-lg-5">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="case-info-card">
                    <div class="case-head bg-cover" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/case/case-head.png' ?>')">
                        <h3><?php esc_html_e( 'Project Details', 'wp10ms' ); ?></h3>
                    </div>
                    <div class="project-data">
                        <?php if ( !empty($meta['v6-project-data-1'] ) ) : ?>
                        <div class="single-info-item">
                            <div class="left-data">
                                <?php esc_html_e( 'Clients', 'wp10ms' ); ?>
                            </div>
                            <div class="right-data">
                                <?php echo wp_kses_post( $meta['v6-project-data-1'] ); ?>
                            </div>
                        </div>
                        <?php
                            endif;
                            if ( !empty($meta['v6-project-data-2']) ) :
                        ?>
                        <div class="single-info-item">
                            <div class="left-data">
                                <?php esc_html_e( 'Project', 'wp10ms' ); ?>
                            </div>
                            <div class="right-data">
                                <?php echo wp_kses_post( $meta['v6-project-data-2'] ); ?>
                            </div>
                        </div>
                        <?php
                            endif;
                            if ( !empty($meta['v6-project-data-3']) ) :
                        ?>
                        <div class="single-info-item">
                            <div class="left-data">
                                <?php esc_html_e( 'Service', 'wp10ms' ); ?>
                            </div>
                            <div class="right-data">
                                <?php echo wp_kses_post( $meta['v6-project-data-3'] );?>
                            </div>
                        </div>
                        <?php
                            endif;
                            $categories = get_the_terms( get_the_ID(), 'project-category' );
                            if ( !empty($categories) && ! is_wp_error( $categories ) ) :
                        ?>
                        <div class="single-info-item">
                            <div class="left-data">
                                <?php esc_html_e( 'Category', 'wp10ms' ); ?>
                            </div>
                            <div class="right-data">
                                <?php
                                $category_names = array();
                                foreach($categories as $category) {
                                    $category_names[] = esc_html( $category->name );
                                }
                                echo implode( ', ', $category_names );
                                ?>
                            </div>
                        </div>
                        <?php
                            endif;
                            if ( !empty($meta['v6-project-data-5']) ) :
                        ?>
                        <div class="single-info-item">
                            <div class="left-data">
                                <?php esc_html_e( 'Date', 'wp10ms' ); ?>
                            </div>
                            <div class="right-data">
                                <?php echo wp_kses_post( $meta['v6-project-data-5'] ); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="single-info-item">
                            <div class="left-data">
                                <?php esc_html_e( 'Share', 'wp10ms' ); ?>
                            </div>
                            <div class="right-data">
                                <div class="social-link">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on Facebook', 'wp10ms' ); ?>">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on Twitter', 'wp10ms' ); ?>">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_the_title() . ' ' . get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on WhatsApp', 'wp10ms' ); ?>">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Share on LinkedIn', 'wp10ms' ); ?>">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}