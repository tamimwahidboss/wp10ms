<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v4-team-p']) || !empty($options['v4-team-h1']) || !empty($options['v4-team-box-rep']) ) :
?>

<!-- index 5 - content-area -->
<section class="our-team-wrapper techex-landing-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <a class="theme-btn-sm mb-15" data-aos="fade-up">
                        <?php echo isset( $options['v4-team-p'] ) ? wp_kses_post( $options['v4-team-p'] ) : ''; ?>
                    </a>
                    <h1 data-aos="fade-up" data-aos-delay="100">
                        <?php echo isset( $options['v4-team-h1'] ) ? wp_kses_post( $options['v4-team-h1'] ) : ''; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if ( isset( $options['v4-team-box-rep'] ) && ! empty( $options['v4-team-box-rep'] ) ) {
                foreach ( $options['v4-team-box-rep'] as $repeater_box ) {
                    ?>
                    <div class="col-12 col-md-6 col-xl-3" data-aos="fade-up">
                        <div class="single-member-card style-2">
                            <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo isset( $repeater_box['v4-team-box-img']['url'] ) ? esc_url( $repeater_box['v4-team-box-img']['url'] ) : '' ; ?>')">
                            </div>
                            <div class="member-bio">
                                <h4><?php echo isset( $repeater_box['v4-team-box-h4'] ) ? wp_kses_post( $repeater_box['v4-team-box-h4'] ) : ''; ?></h4>
                                <p><?php echo isset( $repeater_box['v4-team-box-p'] ) ? wp_kses_post( $repeater_box['v4-team-box-p'] ) : ''; ?></p>
                            </div>
                            <div class="social-profile">
                                <span>Follow on</span>
                                <?php
                                if ( isset( $repeater_box['v4-team-social-rep'] ) && ! empty( $repeater_box['v4-team-social-rep'] ) ) {
                                    foreach ( $repeater_box['v4-team-social-rep'] as $repeater_social ) {
                                        ?>
                                        <a href="<?php echo isset( $repeater_social['v4-team-social-link']['url'] ) ? esc_url( $repeater_social['v4-team-social-link']['url'] ) : '#' ; ?>">
                                            <i class="<?php echo isset( $repeater_social['v4-team-social-icon'] ) ? wp_kses_post( $repeater_social['v4-team-social-icon'] ) : ''; ?>"></i>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>
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