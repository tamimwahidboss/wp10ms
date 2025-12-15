<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-hero-h2']) || !empty($options['v1-hero-h1'] ) || !empty($options['v1-hero-p']) || !empty($options['v1-hero-banner1']['url']) ) :
?>

<section class="hero-slide-wrapper hero-1">
    <div class="hero-slider-active owl-carousel">
        <div class="single-slide bg-cover">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8 col-lg-10">
                        <div class="hero-contents">
                            <h2><?php echo isset( $options['v1-hero-h2'] ) ? esc_html( $options['v1-hero-h2'] ) : ''; ?></h2>
                            <h1 class="fs-lg"><?php echo isset( $options['v1-hero-h1'] ) ? esc_html( $options['v1-hero-h1'] ) : ''; ?></h1>
                            <p><?php echo isset( $options['v1-hero-p'] ) ? esc_attr( $options['v1-hero-p'] ) : ''; ?></p>
                            <?php
                            if ( isset( $options['v1-hero-btn-rep'] ) && is_array( $options['v1-hero-btn-rep'] ) ) {
                                foreach( $options['v1-hero-btn-rep'] as $repeat ) {
                                    $btn_url = isset( $repeat['v1-hero-btn-link']['url'] ) ? esc_url( $repeat['v1-hero-btn-link']['url'] ) : '#';
                                    $btn_text = isset( $repeat['v1-hero-btn-text'] ) ? esc_html( $repeat['v1-hero-btn-text'] ) : '';
                                    $btn_icon = isset( $repeat['v1-hero-btn-icon'] ) ? esc_attr( $repeat['v1-hero-btn-icon'] ) : '';
                                    ?>
                                    <a href="<?php echo $btn_url; ?>" class="theme-btn"><?php echo $btn_text; ?> <i class="<?php echo $btn_icon; ?>"></i></a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( isset( $options['v1-hero-banner1']['url'] ) ) : ?>
                <div class="slide-top-img d-none d-lg-block bg-overlay bg-cover" style="background-image: url('<?php echo esc_url( $options['v1-hero-banner1']['url'] ); ?>')"></div>
            <?php endif; ?>
            <?php if ( isset( $options['v1-hero-banner2']['url'] ) ) : ?>
                <div class="slide-bottom-img d-none d-xl-block bg-overlay bg-cover" style="background-image: url('<?php echo esc_url( $options['v1-hero-banner2']['url'] ); ?>')"></div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>