<?php

$meta = get_post_meta( get_the_ID(), 'wp10ms_metabox', true );

if( is_home() || is_archive() ) {
    ?>
    <div class="blog-posts">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'             => 'post',
            'posts_per_page'        => 5,
            'orderby'               => 'comment_count',
            'paged'                 => $paged,
            'ignore_sticky_posts'   => 1
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="single-blog-post">
                    <div class="post-featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                    <div class="post-content">
                        <h2><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
                        <div class="post-meta">
                            <?php
                            // Display categories
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo '<span><i class="fal fa-eye"></i>' . esc_html( $categories[0]->name ) . '</span>';
                            }
                            ?>
                            <span><i class="fal fa-comments"></i><?php echo esc_html( get_comments_number() ); ?> Comments</span>
                            <span><i class="fal fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
                        </div>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <div class="author-info">
                                <div class="author-img" style="background-image: url('<?php echo esc_url( get_avatar_url( get_the_author_meta('ID') ) ); ?>')"></div>
                                <h5><a href="<?php echo esc_url( get_the_author_link() ); ?>">by <?php echo esc_html( get_the_author() ); ?></a></h5>
                            </div>
                            <div class="post-link">
                                <a href="<?php echo esc_url( get_the_permalink() ); ?>"><i class="fal fa-arrow-right"></i> Read More</a>
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
            // Check if there is a previous page and display the previous link
            if ( get_previous_posts_link() ) : ?>
                <li><?php previous_posts_link('<i class="fal fa-long-arrow-left"></i>'); ?></li>
            <?php endif; ?>

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
            // Check if there is a next page and display the next link
            if ( get_next_posts_link() ) : ?>
                <li><?php next_posts_link('<i class="fal fa-long-arrow-right"></i>'); ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php
} elseif( is_singular() && ! is_singular( 'project' ) ) {
    ?>
    <div class="blog-post-details border-wrap">
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
                <h2><?php echo esc_html( get_the_title() ); ?></h2>
                <div class="post-meta">
                    <span><i class="fal fa-eye"></i>232 Views</span>
                    <span><i class="fal fa-comments"></i><?php echo esc_html( get_comments_number() ); ?> Comments</span>
                    <span><i class="fal fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
                </div>
                <?php the_content(); ?>
            </div>
        </div>

        <div class="row tag-share-wrap">
            <div class="col-lg-8 col-12">
                <?php if ( has_tag() ) : ?>
                <h4>Related Tags</h4>
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
                <h4>Social Share</h4>
                <div class="social-share">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <hr>
        </div>

        <div class="related-post-wrap">
            <h3>Related Posts</h3>

            <div class="row">
                <?php
                $categories = wp_get_post_categories( get_the_ID() );

                if ( ! empty( $categories ) ) {
                    $args = array(
                        'category__in'   => $categories,
                        'post__not_in'   => array( get_the_ID() ),
                        'posts_per_page' => 2,
                    );

                    $related_posts = new WP_Query( $args );

                    if ( $related_posts->have_posts() ) :
                        while ( $related_posts->have_posts() ) : $related_posts->the_post();
                        ?>
                        <div class="col-md-6 col-12">
                            <div class="single-related-post">
                                <div class="featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                                <div class="post-content">
                                    <div class="post-date">
                                        <span><i class="fal fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
                                    </div>
                                    <h4><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
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

        <!-- comments section wrap start -->
        <div class="comments-section-wrap pt-40">
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
            <div class="comments-heading">
                <h3>03 Comments</h3>
            </div>
            <ul class="comments-item-list">
                <li class="single-comment-item">
                    <div class="author-img">
                        <img src="assets/img/blog/author_img.jpg" alt="">
                    </div>
                    <div class="author-info-comment">
                        <div class="info">
                            <h5><a href="#">Rosalina Kelian</a></h5>
                            <span>19th May 2018</span>
                            <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                        </div>
                        <div class="comment-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud  laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </li>
                <li class="single-comment-item">
                    <div class="author-img">
                        <img src="assets/img/blog/author2.jpg" alt="">
                    </div>
                    <div class="author-info-comment">
                        <div class="info">
                            <h5><a href="#">Arista Williamson</a></h5>
                            <span>21th Feb 2020</span>
                            <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                        </div>
                        <div class="comment-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <ul class="replay-comment">
                        <li class="single-comment-item">
                            <div class="author-img">
                                <img src="assets/img/blog/author3.jpg" alt="">
                            </div>
                            <div class="author-info-comment">
                                <div class="info">
                                    <h5><a href="#">Salman Ahmed</a></h5>
                                    <span>29th Jan 2021</span>
                                    <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                </div>
                                <div class="comment-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="comment-form-wrap mt-40">
            <h3>Post Comment</h3>

            <form action="#" class="comment-form">
                <div class="single-form-input">
                    <textarea placeholder="Type your comments...."></textarea>
                </div>
                <div class="single-form-input">
                    <input type="text" placeholder="Type your name....">
                </div>
                <div class="single-form-input">
                    <input type="email" placeholder="Type your email....">
                </div>
                <div class="single-form-input">
                    <input type="text" placeholder="Type your website....">
                </div>
                <button class="submit-btn" type="submit"><i class="fal fa-comments"></i>Post Comment</button>
            </form>
        </div>
        
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
                        <img src="<?php echo esc_url( $repeater_box['v6-project-img']['url'] ); ?>" alt="">
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
                        <?php esc_html( the_content() ); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="case-info-card">
                        <div class="case-head bg-cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                            <h3>Project Details</h3>
                        </div>
                        <div class="project-data">
                            <?php if ( !empty($meta['v6-project-data-1'] ) ) : ?>
                            <div class="single-info-item">
                                <div class="left-data">
                                    Clients
                                </div>
                                <div class="right-data">
                                    <?php echo esc_html( $meta['v6-project-data-1'] ); ?>
                                </div>
                            </div>
                            <?php
                                endif;
                                if ( !empty($meta['v6-project-data-2']) ) :
                            ?>
                            <div class="single-info-item">
                                <div class="left-data">
                                    Project
                                </div>
                                <div class="right-data">
                                    <?php echo esc_html( $meta['v6-project-data-2'] ); ?>
                                </div>
                            </div>
                            <?php
                                endif;
                                if ( !empty($meta['v6-project-data-3']) ) :
                            ?>
                            <div class="single-info-item">
                                <div class="left-data">
                                    Service
                                </div>
                                <div class="right-data">
                                    <?php echo esc_html( $meta['v6-project-data-3'] );?>
                                </div>
                            </div>
                            <?php
                                endif;
                                $categories = get_the_terms( get_the_ID(), 'project-category' );
                                if ( !empty($categories) ) :
                            ?>
                            <div class="single-info-item">
                                <div class="left-data">
                                    Category
                                </div>
                                <div class="right-data">
                                    <?php
                                    foreach($categories as $category) {
                                        echo $category->name;
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                                endif;
                                if ( !empty($meta['v6-project-data-5']) ) :
                            ?>
                            <div class="single-info-item">
                                <div class="left-data">
                                    Date
                                </div>
                                <div class="right-data">
                                    <?php echo esc_html( $meta['v6-project-data-5'] ); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="single-info-item">
                                <div class="left-data">
                                    share
                                </div>
                                <div class="right-data">
                                    <div class="social-link">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
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