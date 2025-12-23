<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v3-hero-banner']['url']) || !empty($options['v3-hero-p']) || !empty($options['v3-hero-h1']) ) :
?>

<section class="hero-slide-wrapper hero-3">
    <div class="hero-slider-3">
        <div class="single-slide bg-cover" style="background-image: url('<?php echo isset( $options['v3-hero-banner']['url'] ) ? esc_url( $options['v3-hero-banner']['url'] ) : ''; ?>')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8 mt-5 mt-lg-0 order-2 order-lg-1 text-center text-lg-left">
                        <div class="hero-contents text-white">
                            <p><?php echo isset( $options['v3-hero-p'] ) ? wp_kses_post( $options['v3-hero-p'] ) : ''; ?></p>
                            <h1><?php echo isset( $options['v3-hero-h1'] ) ? wp_kses_post( $options['v3-hero-h1'] ) : ''; ?></h1>
                            <?php
                            if ( isset( $options['v3-hero-btn-rep'] ) && is_array( $options['v3-hero-btn-rep'] ) ) {
                                foreach( $options['v3-hero-btn-rep'] as $repeater_box ) {
                                    $btn_url = isset( $repeater_box['v3-hero-btn']['url'] ) ? esc_url( $repeater_box['v3-hero-btn']['url'] ) : '#';
                                    $btn_text = isset( $repeater_box['v3-hero-btn']['text'] ) ? wp_kses_post( $repeater_box['v3-hero-btn']['text'] ) : '';
                                    $btn_icon = isset( $repeater_box['v3-hero-btn-icon'] ) ? wp_kses_post( $repeater_box['v3-hero-btn-icon'] ) : '';
                                    ?>
                                    <a href="<?php echo $btn_url; ?>" class="theme-btn"><?php echo $btn_text; ?> <i class="<?php echo $btn_icon; ?>"></i></a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 order-1 order-lg-2 text-center text-lg-right">
                        <div class="video-play-btn">
                            <a href="<?php echo isset( $options['v3-hero-video-link'] ) ? esc_url( $options['v3-hero-video-link'] ) : '#'; ?>" class="play-video popup-video">
                                <i class="<?php echo isset( $options['v3-hero-video-icon'] ) ? wp_kses_post( $options['v3-hero-video-icon'] ) : ''; ?>"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>