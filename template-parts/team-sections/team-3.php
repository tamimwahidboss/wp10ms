<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="our-team-wrapper section-bg-2 section-padding bg-contain" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/cta5.png' ); ?>')">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-12 col-md-7 text-center text-md-left">
                <div class="section-title">
                    <p><?php echo isset( $options['v3-team-p'] ) ? esc_attr( $options['v3-team-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v3-team-h1'] ) ? esc_html( $options['v3-team-h1'] ) : ''; ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-5 mt-4 mt-md-0 text-center text-md-right">
                <a href="<?php echo isset( $options['v3-team-btn']['url'] ) ? esc_url( $options['v3-team-btn']['url'] ) : '#' ; ?>" class="theme-btn">
                    <?php echo isset( $options['v3-team-btn']['text'] ) ? esc_html( $options['v3-team-btn']['text'] ) : 'Button'; ?> 
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <?php
            if ( isset( $options['v3-team-box-rep'] ) && ! empty( $options['v3-team-box-rep'] ) ) {
                foreach ( $options['v3-team-box-rep'] as $repeater_box ) {
                    ?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="single-member-card">
                            <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo isset( $repeater_box['v3-team-box-img']['url'] ) ? esc_url( $repeater_box['v3-team-box-img']['url'] ) : '' ; ?>')">
                            </div>
                            <div class="member-bio">
                                <h4><?php echo isset( $repeater_box['v3-team-box-h4'] ) ? esc_html( $repeater_box['v3-team-box-h4'] ) : ''; ?></h4>
                                <p><?php echo isset( $repeater_box['v3-team-box-p'] ) ? esc_attr( $repeater_box['v3-team-box-p'] ) : ''; ?></p>
                            </div>
                            <div class="social-profile">
                                <?php
                                if ( isset( $repeater_box['v3-team-social-rep'] ) && ! empty( $repeater_box['v3-team-social-rep'] ) ) {
                                    foreach ( $repeater_box['v3-team-social-rep'] as $repeater_social ) {
                                        ?>
                                        <a href="<?php echo isset( $repeater_social['v3-team-social-link']['url'] ) ? esc_url( $repeater_social['v3-team-social-link']['url'] ) : '#' ; ?>">
                                            <i class="<?php echo isset( $repeater_social['v3-team-social-icon'] ) ? esc_attr( $repeater_social['v3-team-social-icon'] ) : ''; ?>"></i>
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
