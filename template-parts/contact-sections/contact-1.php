<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-contact-sec-h1']) || !empty($options['v1-contact-sec-p']) || !empty($options['v1-contact-rep']) || !empty($options['v1-contact-p']) || !empty($options['v1-contact-h1']) ) :
?>

<section class="consultations-wrapper section-padding bg-contain pb-0" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/circle-bg-2.png' ); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5">
                <h1><?php echo isset( $options['v1-contact-sec-h1'] ) ? wp_kses_post( $options['v1-contact-sec-h1'] ) : ''; ?></h1>
                <p class="mt-3"><?php echo isset( $options['v1-contact-sec-p'] ) ? wp_kses_post( $options['v1-contact-sec-p'] ) : ''; ?></p>
                <?php
                $repeater_boxes = isset( $options['v1-contact-rep'] ) ? $options['v1-contact-rep'] : array();
                if ( is_array( $repeater_boxes ) ) {
                    foreach ( $repeater_boxes as $repeater_box ) {
                        $icon_class = isset( $repeater_box['v1-contact-info-icon'] ) ? wp_kses_post( $repeater_box['v1-contact-info-icon'] ) : '';
                        $span_text = isset( $repeater_box['v1-contact-info-span'] ) ? wp_kses_post( $repeater_box['v1-contact-info-span'] ) : '';
                        $link_url = isset( $repeater_box['v1-contact-info-a']['url'] ) ? esc_url( $repeater_box['v1-contact-info-a']['url'] ) : '#';
                        $link_text = isset( $repeater_box['v1-contact-info-a']['text'] ) ? wp_kses_post( $repeater_box['v1-contact-info-a']['text'] ) : '';
                        ?>
                        <div class="call-consultation mt-30 mb-40">
                            <div class="icon">
                                <i class="<?php echo $icon_class; ?>"></i>
                            </div>
                            <div class="content">
                                <span><?php echo $span_text; ?></span>
                                <h5><a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a></h5>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
                <div class="consultations-form text-white">
                    <p><?php echo isset( $options['v1-contact-p'] ) ? wp_kses_post( $options['v1-contact-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v1-contact-h1'] ) ? wp_kses_post( $options['v1-contact-h1'] ) : ''; ?></h1>
                    <?php
                    echo do_shortcode(
                        isset( $options['v1-contact-shortcode'] ) ? $options['v1-contact-shortcode'] : ''
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>