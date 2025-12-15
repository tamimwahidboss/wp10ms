<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-process-p']) || !empty($options['v2-process-h1']) || !empty($repeater_boxes) ) :
?>

    <section class="our-process clear-fix section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title mb-40">
                        <p><?php echo isset( $options['v2-process-p'] ) ? esc_attr( $options['v2-process-p'] ) : ''; ?></p>
                        <h1><?php echo isset( $options['v2-process-h1'] ) ? esc_html( $options['v2-process-h1'] ) : ''; ?></h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $repeater_boxes = isset( $options['v2-process-repeater'] ) && is_array( $options['v2-process-repeater'] ) ? $options['v2-process-repeater'] : [];
                $processNum = 1;
                foreach( $repeater_boxes as $repeater_box ) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-process">
                            <div class="icon">
                                <i class="<?php echo isset( $repeater_box['v2-process-box-icon'] ) ? esc_attr( $repeater_box['v2-process-box-icon'] ) : ''; ?>"></i>
                                <span>0<?php echo $processNum++ ?></span>
                            </div>
                            <div class="content">
                                <h3><?php echo isset( $repeater_box['v1-single-prosess-h3'] ) ? esc_html( $repeater_box['v1-single-prosess-h3'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_box['v1-single-prosess-p'] ) ? esc_attr( $repeater_box['v1-single-prosess-p'] ) : ''; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="work-link d-none d-lg-block">
            <svg width="1292px" height="136px">
            <path fill-rule="evenodd"  stroke="rgb(9, 107, 216)" stroke-width="2px" stroke-dasharray="8, 8" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.2" fill="none"
            d="M1.000,131.999 C1.000,131.999 190.931,8.144 400.000,91.999 C626.535,182.860 763.243,66.417 833.000,32.000 C931.956,-16.824 1115.947,-22.085 1289.774,130.874 "/>
            </svg>
        </div>
    </section>
    <?php endif; ?>