<?php
// about-page/about-us.php
$options = get_option( 'wp10ms_options' );
if( ! empty( $options['v5-about-banner']['url'] ) || !empty( $options['v5-about-yt']['url'] ) || !empty( $options['v5-about-a'] ) || !empty( $options['v5-about-h1'] ) || !empty( $options['v5-about-p'] ) || !empty( $options['v5-about-rate-rep'] ) || !empty( $repeater_boxes ) ) :
?>
<section class="about-wrapper techex-landing-page"> <!-- index 5 - content-area -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img" data-aos="fade-right">
                    <?php if( !empty( $options['v5-about-banner']['url']  ) ) : ?>
                    <img src="<?php echo isset( $options['v5-about-banner']['url'] ) ? esc_url( $options['v5-about-banner']['url'] ) : ''; ?>" class="img-fluid" alt="">
                    <?php
                        endif;
                        if ( !empty( $options['v5-about-yt']['url'] ) ) :
                    ?>
                    <div class="video-play-btn" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo isset( $options['v5-about-yt']['url'] ) ? esc_url( $options['v5-about-yt']['url'] ) : '#'; ?>" class="play-video popup-video">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title">
                    <a class="theme-btn-sm mb-15" data-aos="fade-left">
                        <?php echo isset( $options['v5-about-a'] ) ? wp_kses_post( $options['v5-about-a'] ) : ''; ?>
                    </a>
                    <h1 data-aos="fade-left" data-aos-delay="100">
                        <?php echo isset( $options['v5-about-h1'] ) ? wp_kses_post( $options['v5-about-h1'] ) : ''; ?>
                    </h1>
                    <div data-aos="fade-left" data-aos-delay="150">
                        <p><?php echo isset( $options['v5-about-p'] ) ? wp_kses_post( $options['v5-about-p'] ) : ''; ?></p>
                    </div>

                    <div class="rate-content-grid d-flex justify-content-between">
                        <?php
                        if ( isset( $options['v5-about-rate-rep'] ) && is_array( $options['v5-about-rate-rep'] ) ) {
                            $repeater_boxes = $options['v5-about-rate-rep'];
                            foreach( $repeater_boxes as $repeater_box ) {
                                ?>
                                <div class="single-rate-item" data-aos="fade-up">
                                    <h3><?php echo isset( $repeater_box['v5-about-rate-h3'] ) ? wp_kses_post( $repeater_box['v5-about-rate-h3'] ) : ''; ?></h3>
                                    <p><?php echo isset( $repeater_box['v5-about-rate-p'] ) ? wp_kses_post( $repeater_box['v5-about-rate-p'] ) : ''; ?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <?php
                    if ( isset( $options['v5-about-btn-rep'] ) && is_array( $options['v5-about-btn-rep'] ) ) {
                        $repeater_boxes = $options['v5-about-btn-rep'];
                        foreach( $repeater_boxes as $repeater_box ) {
                            ?>
                            <a href="<?php echo isset( $repeater_box['v5-about-btn']['url'] ) ? esc_url( $repeater_box['v5-about-btn']['url'] ) : '#'; ?>" class="theme-btn black" data-aos="fade-up" data-aos-delay="200">
                                <?php echo isset( $repeater_box['v5-about-btn']['text'] ) ? wp_kses_post( $repeater_box['v5-about-btn']['text'] ) : ''; ?> 
                                <i class="<?php echo isset( $repeater_box['v5-about-btn-icon'] ) ? wp_kses_post( $repeater_box['v5-about-btn-icon'] ) : ''; ?>"></i>
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>