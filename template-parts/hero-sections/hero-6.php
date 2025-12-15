
<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v6-hero-h2']) || !empty($options['v6-hero-banner']['url']) || !empty($options['v6-hero-btn-link']['url']) ) :
?>

<section class="hero-wrapper section-padding-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="banner-content">
                    <h2 data-aos="fade-up">
                        <?php echo isset( $options['v6-hero-h2'] ) ? esc_html( $options['v6-hero-h2'] ) : ''; ?>
                    </h2>
                    <a 
                        data-aos="fade-up" 
                        data-aos-delay="100" 
                        href="<?php echo isset( $options['v6-hero-btn-link']['url'] ) ? esc_url( $options['v6-hero-btn-link']['url'] ) : '#' ; ?>" 
                        class="theme-btn mt-40"
                    >
                        <?php echo isset( $options['v6-hero-btn-text'] ) ? esc_html( $options['v6-hero-btn-text'] ) : ''; ?>
                        <i class="<?php echo isset( $options['v6-hero-btn-icon'] ) ? esc_attr( $options['v6-hero-btn-icon'] ) : ''; ?>"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="banner-img">
                    <img 
                        src="<?php echo isset( $options['v6-hero-banner']['url'] ) ? esc_url( $options['v6-hero-banner']['url'] ) : ''; ?>" 
                        alt=""
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="dots-element">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/dots_01.svg' ); ?>" alt="">
    </div>
    <div class="banner-element">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/object_01.svg' ); ?>" alt="">
    </div>
    <div class="banner-element-2">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/banner_02.svg' ); ?>" alt="">
    </div>
</section>
<?php endif; ?>