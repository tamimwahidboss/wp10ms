<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-team-p']) || !empty($options['v1-team-h1']) ) :
?>

<section class="our-team-wrapper section-padding pb-0">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-12 col-md-6">
                <div class="section-title">
                    <p><?php echo isset( $options['v1-team-p'] ) ? wp_kses_post( $options['v1-team-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v1-team-h1'] ) ? wp_kses_post( $options['v1-team-h1'] ) : ''; ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 text-md-right">
                <a href="<?php echo isset( $options['v1-team-btn']['url'] ) ? esc_url( $options['v1-team-btn']['url'] ) : '#'; ?>" class="theme-btn off-white">
                    <?php echo isset( $options['v1-team-btn']['text'] ) ? wp_kses_post( $options['v1-team-btn']['text'] ) : 'Learn More'; ?> 
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="team-members-list row">
            <?php
            $classActive = '';
            $teamCounter = 1;
            if ( isset( $options['v1-team-rep'] ) && ! empty( $options['v1-team-rep'] ) ) {
                foreach ( $options['v1-team-rep'] as $repeater_box ) {
                    // Add the 'active' class only on the second iteration
                    $classActive = ( $teamCounter == 2 ) ? 'active' : '';
                    ?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="single-team-member <?php echo wp_kses_post( $classActive ); ?>">
                            <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo isset( $repeater_box['v1-team-box-avatar']['url'] ) ? esc_url( $repeater_box['v1-team-box-avatar']['url'] ) : ''; ?>')"></div>
                            <div class="member-bio">
                                <h4><?php echo isset( $repeater_box['v1-team-box-h4'] ) ? wp_kses_post( $repeater_box['v1-team-box-h4'] ) : ''; ?></h4>
                                <p><?php echo isset( $repeater_box['v1-team-box-p'] ) ? wp_kses_post( $repeater_box['v1-team-box-p'] ) : ''; ?></p>
                            </div>
                            <div class="social-profile">
                                <?php
                                if ( isset( $repeater_box['v1-team-soc-rep'] ) && ! empty( $repeater_box['v1-team-soc-rep'] ) ) {
                                    foreach ( $repeater_box['v1-team-soc-rep'] as $repeater_social ) {
                                        ?>
                                        <a href="<?php echo isset( $repeater_social['v1-team-socLink']['url'] ) ? esc_url( $repeater_social['v1-team-socLink']['url'] ) : '#' ; ?>">
                                            <i class="<?php echo isset( $repeater_social['v1-team-box-icon'] ) ? wp_kses_post( $repeater_social['v1-team-box-icon'] ) : ''; ?>"></i>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $teamCounter++;
                }
            }
            ?>
        </div>
    </div>
</section>
<?php endif; ?>