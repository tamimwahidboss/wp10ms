<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-team-span']) || !empty($options['v2-team-h1']) || !empty($options['v2-team-p']) ) :
?>

<section class="our-team-wrapper section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-12">
                <div class="section-title style-3 mb-40">
                    <span><?php echo isset( $options['v2-team-span'] ) ? esc_html( $options['v2-team-span'] ) : ''; ?></span>
                    <p><?php echo isset( $options['v2-team-h1'] ) ? esc_attr( $options['v2-team-h1'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v2-team-p'] ) ? esc_html( $options['v2-team-p'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="team-members-list row">
            <?php
            if ( isset( $options['v2-team-box-rep'] ) && ! empty( $options['v2-team-box-rep'] ) ) {
                foreach ( $options['v2-team-box-rep'] as $repeater_box ) {
                    ?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="single-team-member style-2">
                            <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo isset( $repeater_box['v2-team-box-img']['url'] ) ? esc_url( $repeater_box['v2-team-box-img']['url'] ) : ''; ?>')">
                            </div>
                            <div class="member-bio">
                                <h4><?php echo isset( $repeater_box['v2-team-box-h4'] ) ? esc_html( $repeater_box['v2-team-box-h4'] ) : ''; ?></h4>
                                <p><?php echo isset( $repeater_box['v2-team-box-p'] ) ? esc_attr( $repeater_box['v2-team-box-p'] ) : ''; ?></p>
                            </div>
                            <div class="social-profile">
                                <?php
                                if ( isset( $repeater_box['v2-team-social-rep'] ) && ! empty( $repeater_box['v2-team-social-rep'] ) ) {
                                    foreach ( $repeater_box['v2-team-social-rep'] as $repeater_social ) {
                                        ?>
                                        <a href="<?php echo isset( $repeater_social['v2-team-social-link']['url'] ) ? esc_url( $repeater_social['v2-team-social-link']['url'] ) : '#' ; ?>">
                                            <i class="<?php echo isset( $repeater_social['v2-team-social-icon'] ) ? esc_attr( $repeater_social['v2-team-social-icon'] ) : ''; ?>"></i>
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