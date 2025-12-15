<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v4-hero-span']) || !empty($options['v4-hero-h1']) || !empty($options['v4-hero-p']) ) :
?>
<section class="hero-slide-wrapper hero-4">
    <div class="hero-slider">
        <div class="single-slide bg-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="hero-contents">
                            <span><?php echo isset( $options['v4-hero-span'] ) ? esc_html( $options['v4-hero-span'] ) : ''; ?></span>
                            <h1><?php echo isset( $options['v4-hero-h1'] ) ? esc_html( $options['v4-hero-h1'] ) : ''; ?></h1>
                            <p><?php echo isset( $options['v4-hero-p'] ) ? esc_attr( $options['v4-hero-p'] ) : ''; ?></p>
                            <?php
                            if ( isset( $options['v4-hero-btn-rep'] ) && is_array( $options['v4-hero-btn-rep'] ) ) {
                                foreach( $options['v4-hero-btn-rep'] as $repeater_box ) {
                                    $btn_url = isset( $repeater_box['v4-hero-btn']['url'] ) ? esc_url( $repeater_box['v4-hero-btn']['url'] ) : '#';
                                    $btn_text = isset( $repeater_box['v4-hero-btn']['text'] ) ? esc_html( $repeater_box['v4-hero-btn']['text'] ) : '';
                                    $btn_icon = isset( $repeater_box['v4-hero-btn-icon'] ) ? esc_attr( $repeater_box['v4-hero-btn-icon'] ) : '';
                                    ?>
                                    <a href="<?php echo $btn_url; ?>" class="theme-btn"><?php echo $btn_text; ?> <i class="<?php echo $btn_icon; ?>"></i></a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 col-12 pl-lg-5">
                        <div class="hero-banner">
                            <div class="dot"></div>
                            <img src="<?php echo isset( $options['v4-hero-banner']['url'] ) ? esc_url( $options['v4-hero-banner']['url'] ) : '' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-elements"></div>
        </div>
    </div>
</section>
<?php endif; ?>