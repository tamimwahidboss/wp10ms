<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v8-work-sec-banner']['url']) || !empty($options['v8-work-sec-vid']['url'] ) || !empty($options['v8-work-sec-h6']) ) :
?>

<section class="service__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 mt-30">
                <div class="service__image">
                    <?php if ( isset( $options['v8-work-sec-banner']['url'] ) ) : ?>
                        <img src="<?php echo esc_url( $options['v8-work-sec-banner']['url'] ); ?>" alt="">
                    <?php endif; ?>
                    <div class="video-play-btn">
                        <?php if ( isset( $options['v8-work-sec-vid']['url'] ) && isset( $options['v8-work-sec-vid-icon'] ) ) : ?>
                            <a href="<?php echo esc_url( $options['v8-work-sec-vid']['url'] ); ?>" class="popup-video">
                                <i class="<?php echo wp_kses_post( $options['v8-work-sec-vid-icon'] ); ?>"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-30" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title section__title_3 mb-30">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt="">
                        <?php echo isset( $options['v8-work-sec-h6'] ) ? wp_kses_post( $options['v8-work-sec-h6'] ) : ''; ?>
                    </h6>
                    <h2><?php echo isset( $options['v8-work-sec-h2'] ) ? wp_kses_post( $options['v8-work-sec-h2'] ) : ''; ?></h2>
                </div>
                <div class="service-content">
                    <p><?php echo isset( $options['v8-work-sec-des'] ) ? wp_kses_post( $options['v8-work-sec-des'] ) : ''; ?></p>
                    <?php
                    if ( isset( $options['v8-work-box-repeater'] ) && ! empty( $options['v8-work-box-repeater'] ) ) {
                        foreach ( $options['v8-work-box-repeater'] as $repeater_skill ) {
                            ?>
                            <div class="single-skill-bar">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4><?php echo isset( $repeater_skill['v8-work-prog-h4'] ) ? wp_kses_post( $repeater_skill['v8-work-prog-h4'] ) : ''; ?></h4>
                                    <span><?php echo isset( $repeater_skill['v8-work-prog-count'] ) ? wp_kses_post( $repeater_skill['v8-work-prog-count'] ) : ''; ?></span>
                                </div>
                                <div class="progress d-flex align-items-center">
                                    <div class="progress-bar" style="width: <?php echo isset( $repeater_skill['v8-work-prog-count'] ) ? wp_kses_post( $repeater_skill['v8-work-prog-count'] ) : '0'; ?>;"></div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="service__element">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bg_ser.png' ); ?>" alt="">
    </div>
</section>
<?php endif; ?>