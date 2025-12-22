<?php
$options = get_option( 'wp10ms_options' );

if ( ! empty( $options['v4-project-p'] ) || ! empty( $options['v4-project-h1'] ) || post_type_exists( 'project') ) :
?>

<!-- index 5 - content-area -->
<section class="project-case-study-wrapper techex-landing-page">
    <div class="container">
        <div class="project-case-study-wrapper__circle"></div>
        
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <?php if( !empty( $options['v4-project-p'] ) ) : ?>
                    <a class="theme-btn-sm mb-15" data-aos="fade-up">
                        <?php echo isset($options['v4-project-p']) ? esc_html($options['v4-project-p']) : ''; ?>
                    </a>
                    <?php
                        endif;
                        if ( !empty( $options['v4-project-h1'] ) ) :
                    ?>
                    <h1 data-aos="fade-up" data-aos-delay="100">
                        <?php echo isset($options['v4-project-h1']) ? esc_html($options['v4-project-h1']) : ''; ?>
                    </h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="success-item__wrapper owl-carousel owl-theme">
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
                        $category_slugs .= ' ' . esc_attr( $category->slug ); // for grid-item class
                        $category_names .= esc_html( $category->name ) . ' '; // for displaying category names
                    }
                }
        ?>
            <a href="<?php the_permalink(); ?>" class="success-item" target="_blank">
                <div class="thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                <div class="content d-flex align-items-center justify-content-between">
                    <div class="text">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo esc_html( trim( $category_names ) ); ?></p>
                    </div>

                    <div class="icon">
                        <i class="icon-arrow-right-1"></i>
                    </div>
                </div>
            </a>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>
<?php endif; ?>