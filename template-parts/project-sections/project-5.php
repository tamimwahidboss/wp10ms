<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v6-project-sec-h6']) || !empty($options['v6-project-sec-h2']) || !empty($options['v6-project-sec-btn-link']['url']) || post_type_exists( 'project' ) ) :
?>
<section class="project-carousel-wrapper section-padding-3">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-7 col-lg-8">
                <div class="section-title section__title_3 mb-30">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt="">
                        <?php echo isset($options['v6-project-sec-h6']) ? wp_kses_post($options['v6-project-sec-h6']) : ''; ?>
                    </h6>
                    <h2>
                        <?php echo isset($options['v6-project-sec-h2']) ? wp_kses_post($options['v6-project-sec-h2']) : ''; ?>
                    </h2>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="project__btn">
                    <a href="<?php echo esc_url($options['v6-project-sec-btn-link']['url']); ?>" class="theme-btn">
                        <?php echo wp_kses_post($options['v6-project-sec-btn-text']); ?>
                        <i class="<?php echo wp_kses_post($options['v6-project-sec-btn-icon']); ?>"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="project-carousel-card-active owl-carousel mt-30">
            <?php
            $args = array(
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'orderby'        => 'name',
                'order'          => 'ASC',
            );
            $project_query = new WP_Query($args);

            if($project_query->have_posts()) :
                while($project_query->have_posts()) : $project_query->the_post();
                    // Get the terms (categories) for the custom post type 'project'
                    $categories = get_the_terms( get_the_ID(), 'project-category' );
                    $category_slugs = '';
                    $category_names = '';

                    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                        foreach ( $categories as $category ) {
                            $category_slugs .= ' ' . wp_kses_post( $category->slug );
                            $category_names .= wp_kses_post( $category->name ) . ' ';
                        }
                    }
            ?>
            <div class="project__items">
                <div class="project__image bg-cover bg-center" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>');">
                    <div class="box">
                        <a href="<?php the_permalink(); ?>">
                            <i class="far fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="project__content">
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo trim( $category_names ); ?></p>
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