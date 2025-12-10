<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="about-wrapper">
    <div class="container">
        <div class="row position-relative">
            <div class="col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-img">
                    <img src="<?php echo !empty( $options['v6-about-sec-media']['url'] ) ? esc_url( $options['v6-about-sec-media']['url'] ) : esc_url( get_template_directory_uri() . '/assets/img/default-image.jpg' ); ?>" alt="">
                </div>
                <div class="img-element">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/line_dots_01.svg' ); ?>" alt="">
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-30" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title section__title_3 mb-30">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt="">
                        <?php echo !empty( $options['v6-about-sec-h6'] ) ? esc_html( $options['v6-about-sec-h6'] ) : ''; ?>
                    </h6>
                    <h2><?php echo !empty( $options['v6-about-sec-h2'] ) ? esc_html( $options['v6-about-sec-h2'] ) : ''; ?></h2>
                </div>
                <div class="about-content">
                    <?php echo !empty( $options['v6-about-sec-des'] ) ? wp_kses_post( $options['v6-about-sec-des'] ) : ''; ?>
                    <br>
                    <a href="<?php echo isset( $options['v6-about-sec-btn-link']['url'] ) && !empty( $options['v6-about-sec-btn-link']['url'] ) ? esc_url( $options['v6-about-sec-btn-link']['url'] ) : '#'; ?>" class="theme-btn mt-40">
                        <?php echo isset( $options['v6-about-sec-btn-text'] ) && !empty( $options['v6-about-sec-btn-text'] ) ? esc_html( $options['v6-about-sec-btn-text'] ) : 'Learn More'; ?>
                        <?php if ( isset( $options['v6-about-sec-btn-icon'] ) && !empty( $options['v6-about-sec-btn-icon'] ) ): ?>
                            <i class="<?php echo esc_attr( $options['v6-about-sec-btn-icon'] ); ?>"></i>
                        <?php endif; ?>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="dots-element">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/dots_02.svg' ); ?>" alt="">
    </div>
</section>
