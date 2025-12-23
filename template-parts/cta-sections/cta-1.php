<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-cta-sec-h1']) || !empty($cta_btn_url) || !empty($cta_btn_text) ) :
?>

<section class="cta-wrapper section-bg-2">
    <div class="container">
        <div class="cta-content-banner-4 bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/cta-bg4.png' ); ?>')">
            <div class="row align-items-center">
                <div class="col-lg-7 offset-lg-1 text-white text-center text-lg-left">
                    <h1><?php echo isset( $options['v1-cta-sec-h1'] ) ? wp_kses_post( $options['v1-cta-sec-h1'] ) : ''; ?></h1>
                </div>
                <div class="col-lg-3 text-center text-lg-right mt-3 mt-lg-0">
                    <?php
                    $cta_btn_url = isset( $options['v1-cta-btn']['url'] ) ? esc_url( $options['v1-cta-btn']['url'] ) : '#';
                    $cta_btn_text = isset( $options['v1-cta-btn']['text'] ) ? wp_kses_post( $options['v1-cta-btn']['text'] ) : 'Click Here';
                    ?>
                    <a href="<?php echo $cta_btn_url; ?>" class="theme-btn off-white"><?php echo $cta_btn_text; ?> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>