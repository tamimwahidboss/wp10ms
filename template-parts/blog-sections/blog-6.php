<?php
$categories = get_the_category();
$current_user = wp_get_current_user();

?>

<!-- BLOG PAGE -->
<section class="blog-wrapper news-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
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
                                    <h2><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h2>
                                    <div class="post-meta">
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<span><i class="fal fa-eye"></i>' . wp_kses_post( $categories[0]->name ) . '</span>';
                                        }
                                        ?>
                                        <span><i class="fal fa-comments"></i><?php echo wp_kses_post( get_comments_number() ); ?> Comments</span>
                                        <span><i class="fal fa-calendar-alt"></i><?php echo wp_kses_post( get_the_date() ); ?></span>
                                    </div>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="d-flex justify-content-between align-items-center mt-30">
                                        <div class="author-info">
                                            <div class="author-img" style="background-image: url('<?php echo esc_url( get_avatar_url( get_the_author_meta('ID') ) ); ?>')"></div>
                                            <h5><a href="<?php echo esc_url( get_the_author_link() ); ?>">by <?php echo wp_kses_post( get_the_author() ); ?></a></h5>
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
            </div>
            <div class="col-12 col-lg-4">
                <div class="main-sidebar">
                    <?php dynamic_sidebar( 'main-sidebar-1' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>