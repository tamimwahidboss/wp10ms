<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v3-project-p']) || !empty($options['v3-project-h1']) || post_type_exists( 'project' ) ) :
?>

<section class="project-case-study-wrapper clear-fix section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
                <div class="section-title mb-30">
                    <p><?php echo isset($options['v3-project-p']) ? wp_kses_post($options['v3-project-p']) : ''; ?></p>
                    <h1><?php echo isset($options['v3-project-h1']) ? wp_kses_post($options['v3-project-h1']) : ''; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="project-case-study owl-carousel owl-theme">
        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 6,
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
            while( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="single-project-card">
                <div class="case-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                <div class="contents text-center">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="theme-btn">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <div class="circle-shape style-2 d-none d-sm-block">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home4/ring.png' ); ?>" alt="">
    </div>
</section>
<?php endif; ?>