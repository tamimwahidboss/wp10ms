<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-project-span']) || !empty($options['v2-project-p']) || !empty($options['v2-project-h1']) || post_type_exists( 'project' ) ) :
?>

<section class="case-study-carousel-wrapper style-2">
    <div class="container">
        <div class="row mb-70">
            <div class="col-lg-6 col-12">
                <div class="section-title style-3">
                    <span><?php echo isset($options['v2-project-span']) ? esc_html($options['v2-project-span']) : ''; ?></span>
                    <p><?php echo isset($options['v2-project-p']) ? esc_attr($options['v2-project-p']) : ''; ?></p>
                    <h1><?php echo isset($options['v2-project-h1']) ? esc_html($options['v2-project-h1']) : ''; ?></h1>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 col-12 text-lg-right">
                <div class="work-process-nav"></div>
            </div>
        </div>

        <div class="case-study-items owl-carousel text-center">
            <?php
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 6,
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3><?php the_title(); ?></h3>
                            <span>
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );
                                }
                                ?>
                            </span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="theme-btn">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>