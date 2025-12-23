<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v3-service-span']) || !empty($options['v3-service-p']) || !empty($options['v3-service-h1']) ) :
?>

<section class="services-wrapper service-3 section-padding pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 text-center">
                <div class="section-title style-3 mb-40">
                    <span>
                        <?php echo isset( $options['v3-service-span'] ) ? wp_kses_post( $options['v3-service-span'] ) : ''; ?>
                    </span>
                    <p>
                        <?php echo isset( $options['v3-service-p'] ) ? wp_kses_post( $options['v3-service-p'] ) : ''; ?>
                    </p>
                    <h1>
                        <?php echo isset( $options['v3-service-h1'] ) ? wp_kses_post( $options['v3-service-h1'] ) : ''; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <?php
            $repeater_boxes = isset( $options['v3-service-box-rep'] ) && is_array( $options['v3-service-box-rep'] ) ? $options['v3-service-box-rep'] : [];

            if ( ! empty( $repeater_boxes ) ) {
                foreach( $repeater_boxes as $repeater_box ) {
                    ?>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="single-service-card">
                            <div class="service-thumb bg-cover" style="background-image: url('<?php echo isset( $repeater_box['v3-service-box-img']['url'] ) ? esc_url( $repeater_box['v3-service-box-img']['url'] ) : ''; ?>')"></div>
                            <div class="content">
                                <div class="icon">
                                    <i class="<?php echo isset( $repeater_box['v3-service-box-icon'] ) ? wp_kses_post( $repeater_box['v3-service-box-icon'] ) : ''; ?>"></i>
                                </div>
                                <h3>
                                    <a href="<?php echo isset( $repeater_box['v3-service-box-link']['url'] ) ? esc_url( $repeater_box['v3-service-box-link']['url'] ) : '#'; ?>">
                                        <?php echo isset( $repeater_box['v3-service-box-link']['text'] ) ? wp_kses_post( $repeater_box['v3-service-box-link']['text'] ) : ''; ?>
                                    </a>
                                </h3>
                                <p>
                                    <?php echo isset( $repeater_box['v3-service-box-p'] ) ? wp_kses_post( $repeater_box['v3-service-box-p'] ) : ''; ?>
                                </p>
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