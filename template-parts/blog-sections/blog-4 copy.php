<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<!-- index 5 - content-area -->
<section class="blog-section techex-landing-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <a class="theme-btn-sm mb-15" data-aos="fade-up"><?php echo isset( $options['v4-blog-p'] ) ? wp_kses_post( $options['v4-blog-p'] ) : ''; ?></a>
                    <h1 data-aos="fade-up" data-aos-delay="100"><?php echo isset( $options['v4-blog-h1'] ) ? wp_kses_post( $options['v4-blog-h1'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
        <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 1,
                'order'          => 'ASC',
                'orderby'        => 'menu_order',
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 col-12" data-aos="fade-up">
                        <div class="single-blog-card style-3">
                            <div class="blog-featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                            <div class="content">
                                <div class="post-top-meta d-flex flex-wrap align-items-center">
                                    <div class="post-date">
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"><i class="fal fa-calendar-alt"></i><?php echo wp_kses_post( get_the_date() ); ?></a>
                                    </div>
                                    <div class="post-comment">
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"><i class="icon-message"></i>5</a>
                                    </div>
                                </div>
                                <h3><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h3>
                                <div class="excerpt">
                                    <p><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
                                </div>
                                <div class="btn-link-share d-flex justify-content-between align-items-center">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>">read more <i class="icon-arrow-right-1"></i></a>
                                    <a href="#"><i class="fal fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
