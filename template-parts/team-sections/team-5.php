<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v5-team-h4']) || !empty($options['v5-team-p']) || !empty($options['v5-team-social-rep']) ) :
?>

<section class="team-member-wrapper section-padding">
    <div class="container">
        <div class="member-details-wrap">
            <div class="row justify-content-between">

                <div class="col-xl-4 col-12 col-lg-6">
                    <div class="member-card mr-0 mr-xl-3">
                        <div class="member-photo bg-cover" style="background-image: url('<?php echo isset( $options['v5-team-img']['url'] ) ? esc_url( $options['v5-team-img']['url'] ) : ''; ?>')"></div>
                        <div class="member-info">
                            <h4><?php echo isset( $options['v5-team-h4'] ) ? esc_html( $options['v5-team-h4'] ) : ''; ?></h4>
                            <p><?php echo isset( $options['v5-team-p'] ) ? esc_attr( $options['v5-team-p'] ) : ''; ?></p>
                            <div class="social-link">
                                <?php
                                if ( isset( $options['v5-team-social-rep'] ) && ! empty( $options['v5-team-social-rep'] ) ) {
                                    foreach ( $options['v5-team-social-rep'] as $repeater_box ) {
                                        ?>
                                        <a href="<?php echo isset( $repeater_box['v5-team-social-link']['url'] ) ? esc_url( $repeater_box['v5-team-social-link']['url'] ) : '#' ; ?>">
                                            <i class="<?php echo isset( $repeater_box['v5-team-social-icon'] ) ? esc_attr( $repeater_box['v5-team-social-icon'] ) : ''; ?>"></i>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 mt-5 col-lg-6 col-12 mt-lg-0">
                    <div class="member-about">
                        <div class="sec-title">
                            <h2><?php echo isset( $options['v5-team-ele1-h2'] ) ? esc_html( $options['v5-team-ele1-h2'] ) : ''; ?></h2>
                        </div>
                        <p><?php echo isset( $options['v5-team-ele1-p'] ) ? esc_attr( $options['v5-team-ele1-p'] ) : ''; ?></p>

                        <div class="sec-title mt-4">
                            <h2><?php echo isset( $options['v5-team-ele2-h2'] ) ? esc_html( $options['v5-team-ele2-h2'] ) : ''; ?></h2>
                        </div>

                        <div class="member-contact-info mt-4">
                            <?php
                            if ( isset( $options['v5-team-about-rep'] ) && ! empty( $options['v5-team-about-rep'] ) ) {
                                foreach ( $options['v5-team-about-rep'] as $repeater_box ) {
                                    ?>
                                    <div class="single-contact-info d-flex">
                                        <div class="icon">
                                            <i class="<?php echo isset( $repeater_box['v5-team-about-icon'] ) ? esc_attr( $repeater_box['v5-team-about-icon'] ) : ''; ?>"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p><?php echo isset( $repeater_box['v5-team-about-info'] ) ? esc_attr( $repeater_box['v5-team-about-info'] ) : ''; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 mt-5 col-lg-12 col-12 mt-xl-0">
                    <div class="member-skills">
                        <div class="sec-title">
                            <h2><?php echo isset( $options['v5-team-ele3-h2'] ) ? esc_html( $options['v5-team-ele3-h2'] ) : ''; ?></h2>
                        </div>
                        <p><?php echo isset( $options['v5-team-ele3-p'] ) ? esc_attr( $options['v5-team-ele3-p'] ) : ''; ?></p>
                        <?php
                        if ( isset( $options['v5-team-skill-rep'] ) && ! empty( $options['v5-team-skill-rep'] ) ) {
                            foreach ( $options['v5-team-skill-rep'] as $repeater_box ) {
                                ?>
                                <div class="single-skill-bar">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4><?php echo isset( $repeater_box['v5-team-ele4-h4'] ) ? esc_html( $repeater_box['v5-team-ele4-h4'] ) : ''; ?></h4>
                                        <span><?php echo isset( $repeater_box['v5-team-ele4-span'] ) ? esc_html( $repeater_box['v5-team-ele4-span'] ) : ''; ?>%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo isset( $repeater_box['v5-team-ele4-span'] ) ? esc_attr( $repeater_box['v5-team-ele4-span'] ) : '0'; ?>%"></div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>