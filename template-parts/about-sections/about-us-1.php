<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if( !empty( $options['about-sec-title-p'] ) || !empty( $options['about-sec-title-h1'] ) || !empty( $options['about-sec-title-des'] ) || !empty( $options['about-sec-box-rep'] ) || !empty( $options['about-sec-banner']['url'] ) || !empty( $options['about-sec-ft-item-rep'] ) ) :
?>
    <section class="about-us-wrapper section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 pr-5">
                    <div class="section-title mb-30">
                        <?php if( isset( $options['about-sec-title-p'] ) ) : ?>
                            <p><?php echo esc_attr( $options['about-sec-title-p'] ); ?></p>
                        <?php endif; ?>

                        <?php if( isset( $options['about-sec-title-h1'] ) ) : ?>
                            <h1><?php echo wp_kses_post( $options['about-sec-title-h1'] ); ?></h1>
                        <?php endif; ?>
                    </div>

                    <?php if( isset( $options['about-sec-title-des'] ) ) : ?>
                        <p class="pr-lg-5"><?php echo esc_attr( $options['about-sec-title-des'] ); ?></p>
                    <?php endif; ?>

                    <?php
                    if ( isset( $options['about-sec-box-rep'] ) && !empty( $options['about-sec-box-rep'] ) ) {
                        $repeater_abt_boxes = $options['about-sec-box-rep'];
                        foreach ( $repeater_abt_boxes as $repeater_abt_box ) {
                            // Check if individual fields are set
                            if( isset( $repeater_abt_box['about-sec-box-icon'], $repeater_abt_box['about-sec-box-title'], $repeater_abt_box['about-sec-box-des'] ) ) {
                                ?>
                                <div class="about-icon-box style-2">
                                    <div class="icon">
                                        <i class="<?php echo esc_attr( $repeater_abt_box['about-sec-box-icon'] ); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <h3><?php echo esc_html( $repeater_abt_box['about-sec-box-title'] ); ?></h3>
                                        <p><?php echo esc_attr( $repeater_abt_box['about-sec-box-des'] ); ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>

                <div class="col-lg-6 pl-lg-5 mt-5 mt-lg-0 col-12">
                    <div class="about-right-img">
                        <span class="dot-circle"></span>
                        <div class="about-us-img" style="background-image: url('<?php echo isset( $options['about-sec-banner']['url'] ) ? esc_url( $options['about-sec-banner']['url'] ) : ''; ?>')">
                        </div>
                        <span class="triangle-bottom-right"></span>
                    </div>
                </div>
            </div>

            <div class="row mpt-50 pt-100">
                <?php
                if ( isset( $options['about-sec-ft-item-rep'] ) && is_array( $options['about-sec-ft-item-rep'] ) ) {
                    $repeater_abt_features = $options['about-sec-ft-item-rep'];
                    foreach( $repeater_abt_features as $repeater_abt_feature ) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-features-item">
                                <div class="icon">
                                    <i class="<?php echo isset( $repeater_abt_feature['about-sec-ft-item-icon'] ) ? esc_attr( $repeater_abt_feature['about-sec-ft-item-icon'] ) : ''; ?>"></i>
                                </div>
                                <div class="content">
                                    <h3><?php echo isset( $repeater_abt_feature['about-sec-ft-item-title'] ) ? esc_html( $repeater_abt_feature['about-sec-ft-item-title'] ) : ''; ?></h3>
                                    <p><?php echo isset( $repeater_abt_feature['about-sec-ft-item-des'] ) ? esc_attr( $repeater_abt_feature['about-sec-ft-item-des'] ) : ''; ?></p>
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