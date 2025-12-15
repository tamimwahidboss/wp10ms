<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v3-prosess-sec-h6']) || !empty($options['v3-prosess-sec-h2']) || !empty($repeater_prosesses) ) :
?>

<section class="prosess-wrapper section-padding-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-6 offset-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title section__title_3 mb-30">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt>
                        <?php echo isset( $options['v3-prosess-sec-h6'] ) ? esc_html( $options['v3-prosess-sec-h6'] ) : ''; ?>
                    </h6>
                    <h2><?php echo isset( $options['v3-prosess-sec-h2'] ) ? esc_html( $options['v3-prosess-sec-h2'] ) : ''; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // Ensure $options['v3-prosess-repeater'] is an array
            $repeater_prosesses = isset( $options['v3-prosess-repeater'] ) && is_array( $options['v3-prosess-repeater'] ) ? $options['v3-prosess-repeater'] : [];
            foreach( $repeater_prosesses as $repeater_prosess ) {
                ?>
                <div class="col-12 col-sm-6 col-lg-3 <?php echo isset( $repeater_prosess['v3-single-prosess-mt'] ) ? esc_attr( $repeater_prosess['v3-single-prosess-mt'] ) : ''; ?>">
                    <div class="prosess-element text-center">
                        <div class="icon">
                            <img src="<?php echo isset( $repeater_prosess['v3-single-prosess-icon']['url'] ) ? esc_url( $repeater_prosess['v3-single-prosess-icon']['url'] ) : ''; ?>" alt>
                        </div>
                        <h4><?php echo isset( $repeater_prosess['v3-single-prosess-h4'] ) ? esc_html( $repeater_prosess['v3-single-prosess-h4'] ) : ''; ?></h4>
                        <p><?php echo isset( $repeater_prosess['v3-single-prosess-des'] ) ? esc_attr( $repeater_prosess['v3-single-prosess-des'] ) : ''; ?></p>
                        <span><?php echo isset( $repeater_prosess['v3-single-prosess-step'] ) ? esc_html( $repeater_prosess['v3-single-prosess-step'] ) : ''; ?></span>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="pro-line text-center">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bg_shape_03.svg' ); ?>" alt>
    </div>
</section>
<?php endif; ?>