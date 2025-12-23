<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v10-service-p']) || !empty($options['v10-service-h1']) || !empty($options['v10-service-des']) ) :
?>

<!-- SERVICE PAGE -->
<section class="our-skill-wrapper section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-5">
                <div class="section-title">
                    <p><?php echo isset( $options['v10-service-p'] ) ? wp_kses_post( $options['v10-service-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v10-service-h1'] ) ? wp_kses_post( $options['v10-service-h1'] ) : ''; ?></h1>
                </div>
                <p class="mt-20"><?php echo isset( $options['v10-service-des'] ) ? wp_kses_post( $options['v10-service-des'] ) : ''; ?></p>
                <?php
                if ( isset( $options['v10-service-box-rep'] ) && ! empty( $options['v10-service-box-rep'] ) ) {
                    foreach ( $options['v10-service-box-rep'] as $repeater_box ) {
                        ?>
                        <div class="single-skill-bar">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4><?php echo isset( $repeater_box['v10-service-box-h4'] ) ? wp_kses_post( $repeater_box['v10-service-box-h4'] ) : ''; ?></h4>
                                <span><?php echo isset( $repeater_box['v10-service-box-span'] ) ? wp_kses_post( $repeater_box['v10-service-box-span'] ) : ''; ?>%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: <?php echo isset( $repeater_box['v10-service-box-span'] ) ? wp_kses_post( $repeater_box['v10-service-box-span'] ) : '0'; ?>%"></div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <div class="col-lg-5 offset-lg-1 col-xl-5 offset-xl-2">
                <div class="skill-banner mt-5 mt-lg-0">
                    <img src="<?php echo isset( $options['v10-service-banner']['url'] ) ? esc_url( $options['v10-service-banner']['url'] ) : ''; ?>" alt="">
                    <div class="skill-popup-video d-flex justify-content-center align-items-center bg-cover" style="background-image: url('<?php echo isset( $options['v10-service-ytv-thumb']['url'] ) ? esc_url( $options['v10-service-ytv-thumb']['url'] ) : ''; ?>')">
                        <div class="video-play-btn">
                            <a href="<?php echo isset( $options['v10-service-ytv-link']['url'] ) ? esc_url( $options['v10-service-ytv-link']['url'] ) : ''; ?>" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>