<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-service-title-p']) || !empty($options['v1-service-title-h1']) || !empty($repeater_boxes) ) :
?>

<section class="services-wrapper service-1 section-padding section-bg">
    <div class="container">
        <div class="row mb-4 mb-lg-5">
            <div class="col-12 col-lg-12">
                <div class="section-title text-white text-center">
                    <p>
                        <?php echo isset( $options['v1-service-title-p'] ) ? wp_kses_post( $options['v1-service-title-p'] ) : ''; ?>
                    </p>
                    <h1>
                        <?php echo isset( $options['v1-service-title-h1'] ) ? wp_kses_post( $options['v1-service-title-h1'] ) : ''; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // Check if the repeater field is set and is an array
            $repeater_boxes = isset($options['v1-service-box-rep']) && is_array($options['v1-service-box-rep']) ? $options['v1-service-box-rep'] : [];

            // Only loop if the repeater field has items
            if ( ! empty( $repeater_boxes ) ) {
                foreach( $repeater_boxes as $repeater_box ) {
                    ?>
                    <div class="col-md-6 col-xl-3 col-12">
                        <div class="single-service-item">
                            <div class="icon">
                                <img src="<?php echo isset( $repeater_box['v1-service-box-icon']['url'] ) ? esc_url( $repeater_box['v1-service-box-icon']['url'] ) : ''; ?>" alt="service">
                            </div>
                            <h4>
                                <?php echo isset( $repeater_box['v1-service-box-title'] ) ? wp_kses_post( $repeater_box['v1-service-box-title'] ) : ''; ?>
                            </h4>
                            <p>
                                <?php echo isset( $repeater_box['v1-service-box-p'] ) ? wp_kses_post( $repeater_box['v1-service-box-p'] ) : ''; ?>
                            </p>
                            <a href="<?php echo isset( $repeater_box['v1-service-box-btn']['url'] ) ? esc_url( $repeater_box['v1-service-box-btn']['url'] ) : '#'; ?>">
                                <?php echo isset( $repeater_box['v1-service-box-btn']['text'] ) ? wp_kses_post( $repeater_box['v1-service-box-btn']['text'] ) : ''; ?>
                                <i class="<?php echo isset( $repeater_box['v1-service-box-btn-icon'] ) ? wp_kses_post( $repeater_box['v1-service-box-btn-icon'] ) : ''; ?>"></i>
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