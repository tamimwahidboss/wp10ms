<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="work-process-wrapper section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center">
                <div class="section-title style-3 mb-40">
                    <span><?php echo isset( $options['v1-prosess-span'] ) ? esc_html( $options['v1-prosess-span'] ) : ''; ?></span>
                    <p><?php echo isset( $options['v1-prosess-p'] ) ? esc_attr( $options['v1-prosess-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v1-prosess-sec-h1'] ) ? esc_html( $options['v1-prosess-sec-h1'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <div class="work-process-grid">
                    <?php
                    $repeater_boxes = isset( $options['v1-prosess-repeater'] ) && is_array( $options['v1-prosess-repeater'] ) ? $options['v1-prosess-repeater'] : [];
                    $processNum = 1;
                    foreach( $repeater_boxes as $repeater_box ) {
                        ?>
                        <div class="single-work-process">
                            <div class="icon">
                                <i class="<?php echo isset( $repeater_box['v1-prosess-box-icon'] ) ? esc_attr( $repeater_box['v1-prosess-box-icon'] ) : ''; ?>"></i>
                            </div>
                            <div class="content">
                                <h3><?php echo isset( $repeater_box['v1-single-prosess-h3'] ) ? esc_html( $repeater_box['v1-single-prosess-h3'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_box['v1-single-prosess-p'] ) ? esc_attr( $repeater_box['v1-single-prosess-p'] ) : ''; ?></p>
                                <span><?php echo $processNum++ ?></span>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
