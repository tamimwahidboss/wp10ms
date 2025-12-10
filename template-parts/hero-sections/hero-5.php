<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="hero-slide-wrapper techex-landing-page">
    <div class="hero-slider-active-2 owl-carousel owl-theme">
        <?php
        if ( isset( $options['v5-hero-slide-rep'] ) && is_array( $options['v5-hero-slide-rep'] ) ) {
            foreach( $options['v5-hero-slide-rep'] as $repeater_slider ) {
                $banner_url = isset( $repeater_slider['v5-hero-banner']['url'] ) ? esc_url( $repeater_slider['v5-hero-banner']['url'] ) : '';
                $hero_a = isset( $repeater_slider['v5-hero-a'] ) ? esc_html( $repeater_slider['v5-hero-a'] ) : '';
                $hero_h1 = isset( $repeater_slider['v5-hero-h1'] ) ? esc_html( $repeater_slider['v5-hero-h1'] ) : '';
                $hero_p = isset( $repeater_slider['v5-hero-p'] ) ? esc_attr( $repeater_slider['v5-hero-p'] ) : '';
                $repeater_boxes = isset( $repeater_slider['v5-hero-btn-rep'] ) ? $repeater_slider['v5-hero-btn-rep'] : [];

                ?>
                <div class="single-slide bg-cover" style="background-image: url('<?php echo $banner_url; ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-contents text-center">
                                    <a class="theme-btn-sm" data-animation="fadeInUp" data-delay="0"><?php echo $hero_a; ?></a>
                                    <h1 data-animation="fadeInUp" data-delay="0.4s"><?php echo $hero_h1; ?></h1>
                                    <div data-animation="fadeInUp" data-delay="0.6s">
                                        <p><?php echo $hero_p; ?></p>
                                    </div>
                                    
                                    <div class="btn__wrapper d-flex flex-wrap justify-content-center" data-animation="fadeInUp" data-delay="0.8s">
                                    <?php
                                    foreach( $repeater_boxes as $repeater_box ) {
                                        $btn_url = isset( $repeater_box['v5-hero-btn']['url'] ) ? esc_url( $repeater_box['v5-hero-btn']['url'] ) : '#';
                                        $btn_text = isset( $repeater_box['v5-hero-btn']['text'] ) ? esc_html( $repeater_box['v5-hero-btn']['text'] ) : '';
                                        $btn_icon = isset( $repeater_box['v5-hero-btn-icon'] ) ? esc_attr( $repeater_box['v5-hero-btn-icon'] ) : '';
                                        ?>
                                        <a href="<?php echo $btn_url; ?>" class="theme-btn"><?php echo $btn_text; ?> <i class="<?php echo $btn_icon; ?>"></i></a>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>
