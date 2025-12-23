<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v7-secvice-sec-h6']) || !empty($options['v7-secvice-sec-h2']) || !empty($options['v7-service-repeater'] ) ) :
?>

<section class="analytics-wrapper section-padding-3 bg-center bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/service_bg.png' ); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-6 offset-md-3 text-center">
                <div class="section-title section__title_3 mb-30" data-aos="fade-up" data-aos-delay="100">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt="">
                        <?php echo isset( $options['v7-secvice-sec-h6'] ) ? wp_kses_post( $options['v7-secvice-sec-h6'] ) : ''; ?>
                    </h6>
                    <h2><?php echo isset( $options['v7-secvice-sec-h2'] ) ? wp_kses_post( $options['v7-secvice-sec-h2'] ) : ''; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if ( isset( $options['v7-service-repeater'] ) && ! empty( $options['v7-service-repeater'] ) ) {
                foreach ( $options['v7-service-repeater'] as $repeat_service ) {
                    ?>
                    <div class="col-lg-4 col-md-6 mt-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-element text-center">
                            <div class="icon">
                                <?php if ( isset( $repeat_service['v7-single-service-icon']['url'] ) ) : ?>
                                    <img src="<?php echo esc_url( $repeat_service['v7-single-service-icon']['url'] ); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <h4><?php echo isset( $repeat_service['v7-single-service-h4'] ) ? wp_kses_post( $repeat_service['v7-single-service-h4'] ) : ''; ?></h4>
                            <p><?php echo isset( $repeat_service['v7-single-service-des'] ) ? wp_kses_post( $repeat_service['v7-single-service-des'] ) : ''; ?></p>
                            <a href="<?php echo isset( $repeat_service['v7-single-service-btn-link']['url'] ) ? esc_url( $repeat_service['v7-single-service-btn-link']['url'] ) : '#' ; ?>" class="theme-btn">
                                <?php echo isset( $repeat_service['v7-single-service-btn-text'] ) ? wp_kses_post( $repeat_service['v7-single-service-btn-text'] ) : ''; ?>
                                <i class="<?php echo isset( $repeat_service['v7-single-service-btn-icon'] ) ? wp_kses_post( $repeat_service['v7-single-service-btn-icon'] ) : ''; ?>"></i>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php endif; ?>