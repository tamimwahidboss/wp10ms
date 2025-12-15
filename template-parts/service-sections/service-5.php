<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v5-service-p']) || !empty($options['v5-service-h1']) || !empty($repeater_boxes) ) :
?>

<section class="our-service-provide section-bg text-white section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
                <div class="section-title mb-30">
                    <p><?php echo isset( $options['v5-service-p'] ) ? esc_attr( $options['v5-service-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v5-service-h1'] ) ? esc_html( $options['v5-service-h1'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <?php
            if ( isset( $options['v5-service-box-rep'] ) && ! empty( $options['v5-service-box-rep'] ) ) {
                $repeater_boxes = $options['v5-service-box-rep'];
                foreach( $repeater_boxes as $repeater_box ) {
                    ?>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="single-our-service">
                            <div class="thumb bg-cover" style="background-image: url('<?php echo isset( $repeater_box['v5-service-box-img']['url'] ) ? esc_url( $repeater_box['v5-service-box-img']['url'] ) : ''; ?>')"></div>
                            <div class="content">
                                <div class="icon">
                                    <i class="<?php echo isset( $repeater_box['v5-service-box-icon'] ) ? esc_attr( $repeater_box['v5-service-box-icon'] ) : ''; ?>"></i>
                                </div>
                                <h3><a href="<?php echo isset( $repeater_box['v5-service-box-link']['url'] ) ? esc_url( $repeater_box['v5-service-box-link']['url'] ) : '#' ; ?>"><?php echo isset( $repeater_box['v5-service-box-link']['text'] ) ? esc_html( $repeater_box['v5-service-box-link']['text'] ) : ''; ?></a></h3>
                                <p><?php echo isset( $repeater_box['v5-service-box-p'] ) ? esc_attr( $repeater_box['v5-service-box-p'] ) : ''; ?></p>
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