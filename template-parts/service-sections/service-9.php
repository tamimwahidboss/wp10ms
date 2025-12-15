<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v9-service-p']) || !empty($options['v9-service-h1']) || !empty($options['v9-service-des']) ) :
?>

<!-- SERVICE PAGE -->
<section class="servces-wrapper section-padding"> 
    <div class="container">
        <div class="row text-center mb-30">
            <div class="col-lg-8 p-lg-0 col-12 offset-lg-2">
                <div class="section-title">
                    <p><?php echo isset( $options['v9-service-p'] ) ? esc_attr( $options['v9-service-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v9-service-h1'] ) ? esc_html( $options['v9-service-h1'] ) : ''; ?></h1>
                </div>
                <p class="mt-20"><?php echo isset( $options['v9-service-des'] ) ? esc_html( $options['v9-service-des'] ) : ''; ?></p>
            </div>
        </div>

        <div class="row justify-content-between">
            <?php
            if ( isset( $options['v9-service-box-rep'] ) && ! empty( $options['v9-service-box-rep'] ) ) {
                foreach ( $options['v9-service-box-rep'] as $repeater_box ) {
                    ?>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-service">
                            <div class="icon">
                                <?php echo isset( $repeater_box['v9-service-box-icon'] ) ? '<i class="' . esc_attr( $repeater_box['v9-service-box-icon'] ) . '"></i>' : ''; ?>
                            </div>
                            <div class="content">
                                <h3><?php echo isset( $repeater_box['v9-service-box-h3'] ) ? esc_html( $repeater_box['v9-service-box-h3'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_box['v9-service-box-p'] ) ? esc_attr( $repeater_box['v9-service-box-p'] ) : ''; ?></p>
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