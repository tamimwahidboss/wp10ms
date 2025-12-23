<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-contact-sec-h6']) || !empty($options['v2-contact-sec-h2']) || !empty($options['v2-contact-shortcode'] ) ) :
?>
<section class="contact_form__wrapper section-padding-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-30" data-aos="fade-up" data-aos-delay="100">
                <div class="contact__element">
                    <div class="section-title section__title_3 mb-30">
                        <h6>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt>
                            <?php echo isset( $options['v2-contact-sec-h6'] ) ? wp_kses_post( $options['v2-contact-sec-h6'] ) : ''; ?>
                        </h6>
                        <h2><?php echo isset( $options['v2-contact-sec-h2'] ) ? wp_kses_post( $options['v2-contact-sec-h2'] ) : ''; ?></h2>
                    </div>
                    <?php
                    echo do_shortcode(
                        isset( $options['v2-contact-shortcode'] ) ? $options['v2-contact-shortcode'] : ''
                    );
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-30" data-aos="fade-up" data-aos-delay="100">
                <div class="contact__details">
                    <h2><?php echo isset( $options['v2-contact-sec-h2-right'] ) ? wp_kses_post( $options['v2-contact-sec-h2-right'] ) : ''; ?></h2>
                    <p><?php echo isset( $options['v2-contact-sec-des'] ) ? wp_kses_post( $options['v2-contact-sec-des'] ) : ''; ?></p>
                    <div class="action__call d-flex">
                        <div class="icon">
                            <img src="<?php echo isset( $options['v2-contact-sec-icon']['url'] ) ? esc_url( $options['v2-contact-sec-icon']['url'] ) : ''; ?>" alt>
                        </div>
                        <div class="content ml-20">
                            <p><?php echo isset( $options['v2-contact-sec-p'] ) ? wp_kses_post( $options['v2-contact-sec-p'] ) : ''; ?></p>
                            <h4><?php echo isset( $options['v2-contact-sec-email']['text'] ) ? wp_kses_post( $options['v2-contact-sec-email']['text'] ) : ''; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow__element d-none d-lg-block">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/teer.svg' ); ?>" alt>
    </div>
</section>
<?php endif; ?>