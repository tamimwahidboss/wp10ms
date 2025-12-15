<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v4-service-p']) || !empty($options['v4-service-h1']) || !empty($repeater_boxes) ) :
?>

<section class="our-service-wrapper section-bg-2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
                <div class="section-title mb-30">
                    <p><?php echo isset( $options['v4-service-p'] ) ? esc_attr( $options['v4-service-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v4-service-h1'] ) ? esc_html( $options['v4-service-h1'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if ( isset( $options['v4-service-box-rep'] ) && ! empty( $options['v4-service-box-rep'] ) ) {
                $repeater_boxes = $options['v4-service-box-rep'];
                foreach ( $repeater_boxes as $repeater_box ) {
                    ?>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="single-service-vcard">
                            <a href="<?php echo isset( $repeater_box['v4-service-box-link']['url'] ) ? esc_url( $repeater_box['v4-service-box-link']['url'] ) : '#' ; ?>" class="link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <div class="icon">
                                <i class="<?php echo isset( $repeater_box['v4-service-box-icon'] ) ? esc_attr( $repeater_box['v4-service-box-icon'] ) : ''; ?>"></i>
                            </div>
                            <div class="content">
                                <h3><?php echo isset( $repeater_box['v4-service-box-title'] ) ? esc_html( $repeater_box['v4-service-box-title'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_box['v4-service-box-p'] ) ? esc_attr( $repeater_box['v4-service-box-p'] ) : ''; ?></p>
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