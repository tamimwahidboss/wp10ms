<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-service-p']) || !empty($options['v2-service-h1']) || !empty($repeater_boxes) ) :
?>

<section class="services-wrapper service-2 section-padding section-bg bg-contain" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ) ?>/assets/img/circle-bg.png')">
    <div class="container">
        <div class="row mb-50">
            <div class="col-12 col-lg-12">
                <div class="section-title text-white text-center">
                    <p>
                        <?php echo isset( $options['v2-service-p'] ) ? wp_kses_post( $options['v2-service-p'] ) : ''; ?>
                    </p>
                    <h1>
                        <?php echo isset( $options['v2-service-h1'] ) ? wp_kses_post( $options['v2-service-h1'] ) : ''; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // Check if the repeater field is set and is an array
            $repeater_boxes = isset($options['v2-service-box-rep']) && is_array($options['v2-service-box-rep']) ? $options['v2-service-box-rep'] : [];

            // Only loop if the repeater field has items
            if ( ! empty( $repeater_boxes ) ) {
                foreach( $repeater_boxes as $repeater_box ) {
                    ?>
                    <div class="col-md-6 col-xl-4 col-12">
                        <div class="single-service-box">
                            <div class="icon bg-cover" style="background-image: url('<?php echo isset( $repeater_box['v2-service-box-icon']['url'] ) ? esc_url( $repeater_box['v2-service-box-icon']['url'] ) : ''; ?>')">
                            </div>
                            <div class="content-visible">
                                <h4>
                                    <a href="<?php echo isset( $repeater_box['v2-service-box-pop-link']['url'] ) ? esc_url( $repeater_box['v2-service-box-pop-link']['url'] ) : '#'; ?>">
                                        <?php echo isset( $repeater_box['v2-service-box-pop-link']['text'] ) ? wp_kses_post( $repeater_box['v2-service-box-pop-link']['text'] ) : ''; ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php echo isset( $repeater_box['v2-service-box-p'] ) ? wp_kses_post( $repeater_box['v2-service-box-p'] ) : ''; ?>
                                </p>
                            </div>
                            <div class="content-overlay">
                                <h4>
                                    <a href="<?php echo isset( $repeater_box['v2-service-box-pop-link']['url'] ) ? esc_url( $repeater_box['v2-service-box-pop-link']['url'] ) : '#'; ?>">
                                        <?php echo isset( $repeater_box['v2-service-box-pop-link']['text'] ) ? wp_kses_post( $repeater_box['v2-service-box-pop-link']['text'] ) : ''; ?>
                                    </a>
                                </h4>
                                <p>
                                    <?php echo isset( $repeater_box['v2-service-box-pop-p'] ) ? wp_kses_post( $repeater_box['v2-service-box-pop-p'] ) : ''; ?>
                                </p>
                                <a href="<?php echo isset( $repeater_box['v2-service-box-pop-link']['url'] ) ? esc_url( $repeater_box['v2-service-box-pop-link']['url'] ) : '#'; ?>" class="read-link">
                                    <?php echo isset( $repeater_box['v2-service-box-pop-link']['text'] ) ? wp_kses_post( $repeater_box['v2-service-box-pop-link']['text'] ) : ''; ?>
                                    <i class="<?php echo isset( $repeater_box['v2-service-box-popupBtn-icon'] ) ? wp_kses_post( $repeater_box['v2-service-box-popupBtn-icon'] ) : ''; ?>"></i>
                                </a>
                            </div>
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