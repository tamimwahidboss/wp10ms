<?php
// about-page/about-us.php
$options = get_option( 'wp10ms_options' );

if ( !empty( $options['v3-about-p'] ) || !empty( $options['v3-about-span'] ) || !empty( $options['v3-about-h1'] ) || !empty( $options['v3-about-box-rep'] ) || !empty( $options['v3-about-form-p'] ) || !empty( $options['v3-about-form-h1'] ) ) :
?>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="section-title style-3 mb-30">
                    <span><?php echo isset( $options['v3-about-p'] ) ? wp_kses_post( $options['v3-about-p'] ) : ''; ?></span>
                    <p><?php echo isset( $options['v3-about-span'] ) ? wp_kses_post( $options['v3-about-span'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v3-about-h1'] ) ? wp_kses_post( $options['v3-about-h1'] ) : ''; ?></h1>
                </div>

                <?php
                if ( isset( $options['v3-about-box-rep'] ) && is_array( $options['v3-about-box-rep'] ) ) {
                    $repeater_boxes = $options['v3-about-box-rep'];
                    foreach( $repeater_boxes as $repeater_box ) {
                        ?>
                        <div class="about-icon-box">
                            <div class="icon">
                                <i class="<?php echo isset( $repeater_box['v3-about-box-icon'] ) ? wp_kses_post( $repeater_box['v3-about-box-icon'] ) : ''; ?>"></i>
                            </div>
                            <div class="content">
                                <h3><?php echo isset( $repeater_box['v3-about-box-h3'] ) ? wp_kses_post( $repeater_box['v3-about-box-h3'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_box['v3-about-box-p'] ) ? wp_kses_post( $repeater_box['v3-about-box-p'] ) : ''; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>

            <div class="col-lg-6 col-xl-6 col-12 offset-xl-1">
                <div class="consultations-form style-2 bg-cover" style="background-image: url('<?php echo esc_url( 'assets/img/cs-form-bg.jpg' ); ?>')">
                    <p><?php echo isset( $options['v3-about-form-p'] ) ? wp_kses_post( $options['v3-about-form-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v3-about-form-h1'] ) ? wp_kses_post( $options['v3-about-form-h1'] ) : ''; ?></h1>
                    <form action="#">
                        <input type="text" placeholder="Full Name Here">
                        <input type="email" placeholder="Email Address">
                        <textarea placeholder="Write Message"></textarea>
                        <button class="theme-btn" type="submit">Get Free Quote <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>