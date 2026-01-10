<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-pricing-p']) || !empty($options['v1-pricing-h1']) || !empty($options['v1-pricing-rep']) ) :
?>

<section class="our-pricing-wrapper section-bg section-padding">
    <div class="container">
        <div class="row mb-35">
            <div class="col-12 col-lg-12">
                <div class="section-title text-white text-center">
                    <p><?php echo isset( $options['v1-pricing-p'] ) ? wp_kses_post( $options['v1-pricing-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v1-pricing-h1'] ) ? wp_kses_post( $options['v1-pricing-h1'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $classActive = '';
            $planCounter = 1;
            $repeater_boxes = isset( $options['v1-pricing-rep'] ) ? $options['v1-pricing-rep'] : [];
            if(!empty($repeater_boxes)) :
            foreach( $repeater_boxes as $repeater_box ) {
                if ( $planCounter == 2 ) {
                    $classActive = 'active';
                } else {
                    $classActive = '';
                }
                ?>
                <div class="col-xl-4 col-md-6">
                    <div class="single-pricing-plan <?php echo wp_kses_post( $classActive ); ?>">
                        <h3><?php echo isset( $repeater_box['v1-pricing-h3'] ) ? wp_kses_post( $repeater_box['v1-pricing-h3'] ) : ''; ?></h3>
                        <p><?php echo isset( $repeater_box['v1-pricing-p'] ) ? wp_kses_post( $repeater_box['v1-pricing-p'] ) : ''; ?></p>
                        <div class="pricing">
                            <span><?php echo isset( $repeater_box['v1-pricing-sym'] ) ? wp_kses_post( $repeater_box['v1-pricing-sym'] ) : ''; ?></span>
                            <h2><?php echo isset( $repeater_box['v1-pricing-cost'] ) ? wp_kses_post( $repeater_box['v1-pricing-cost'] ) : ''; ?></h2>
                            <p><?php echo isset( $repeater_box['v1-pricing-sch'] ) ? wp_kses_post( $repeater_box['v1-pricing-sch'] ) : ''; ?></p>
                        </div>
                        <ul class="plan-features">
                            <?php
                            $repeater_features = isset( $repeater_box['v1-pricing-li-rep'] ) ? $repeater_box['v1-pricing-li-rep'] : [];
                            foreach( $repeater_features as $repeater_feature ) {
                                $classActive2 = '';
                                if ( isset( $repeater_feature['v1-price-ft-active'] ) && $repeater_feature['v1-price-ft-active'] == 1 ) {
                                    $classActive2 = 'active';
                                }
                                ?>
                                <li class="<?php echo wp_kses_post( $classActive2 ); ?>">
                                    <?php echo isset( $repeater_feature['v1-pricing-li'] ) ? wp_kses_post( $repeater_feature['v1-pricing-li'] ) : ''; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="buy-btn">
                            <a href="<?php echo isset( $repeater_box['v1-price-btn']['url'] ) ? esc_url( $repeater_box['v1-price-btn']['url'] ) : '#' ?>" class="theme-btn"><?php echo isset( $repeater_box['v1-price-btn']['text'] ) ? wp_kses_post( $repeater_box['v1-price-btn']['text'] ) : 'Get Started'; ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                $planCounter++;
            }
            endif;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>