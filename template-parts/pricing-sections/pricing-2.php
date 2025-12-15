<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-price-span']) || !empty($options['v2-price-p']) || !empty($options['v2-price-h1']) ) :
?>

<section class="our-pricing-wrapper right-bg section-padding">
    <div class="dot-circle"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 mb-5 mb-xl-0">
                <div class="section-title style-3 mb-30">
                    <span><?php echo isset( $options['v2-price-span'] ) ? esc_html( $options['v2-price-span'] ) : ''; ?></span>
                    <p><?php echo isset( $options['v2-price-p'] ) ? esc_attr( $options['v2-price-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v2-price-h1'] ) ? esc_html( $options['v2-price-h1'] ) : ''; ?></h1>
                </div>
                <p><?php echo isset( $options['v2-price-des'] ) ? esc_html( $options['v2-price-des'] ) : ''; ?></p>
                <a href="<?php echo isset( $options['v2-price-btn']['url'] ) ? esc_url( $options['v2-price-btn']['url'] ) : '#' ?>" class="theme-btn mt-30">
                    <?php echo isset( $options['v2-price-btn']['text'] ) ? esc_html( $options['v2-price-btn']['text'] ) : ''; ?>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-xl-7 col-12 offset-xl-1">
                <div class="row">
                    <?php
                    $repeater_boxes = isset( $options['v2-price-rep'] ) ? $options['v2-price-rep'] : [];
                    $classActive = '';
                    $planCounter = 1;
                    foreach( $repeater_boxes as $repeater_box ) {
                        $classActive = ($planCounter == 2) ? 'active' : '';
                        ?>
                        <div class="col-md-6 mt-4 mt-xl-0">
                            <div class="single-pricing-plan style-2 <?php echo esc_attr( $classActive ); ?>">
                                <h3><?php echo isset( $repeater_box['v2-price-plan-h3'] ) ? esc_html( $repeater_box['v2-price-plan-h3'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_box['v2-price-plan-p'] ) ? esc_html( $repeater_box['v2-price-plan-p'] ) : ''; ?></p>
                                <div class="pricing">
                                    <span><?php echo isset( $repeater_box['v2-price-simble'] ) ? esc_html( $repeater_box['v2-price-simble'] ) : ''; ?></span>
                                    <h2><?php echo isset( $repeater_box['v2-price-cost'] ) ? esc_html( $repeater_box['v2-price-cost'] ) : ''; ?></h2>
                                    <p><?php echo isset( $repeater_box['v2-price-schedule'] ) ? esc_html( $repeater_box['v2-price-schedule'] ) : ''; ?></p>
                                </div>
                                <ul class="plan-features">
                                    <?php
                                    $repeater_lists = isset( $repeater_box['v2-price-ft-rep'] ) ? $repeater_box['v2-price-ft-rep'] : [];
                                    foreach ( $repeater_lists as $repeater_list ) {
                                        ?>
                                        <li><?php echo isset( $repeater_list['v2-price-ft'] ) ? esc_html( $repeater_list['v2-price-ft'] ) : ''; ?></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                                <div class="buy-btn">
                                    <a href="<?php echo isset( $repeater_box['v2-price-plan-btn']['url'] ) ? esc_url( $repeater_box['v2-price-plan-btn']['url'] ) : '#' ?>" class="theme-btn">
                                        <?php echo isset( $repeater_box['v2-price-plan-btn']['text'] ) ? esc_html( $repeater_box['v2-price-plan-btn']['text'] ) : ''; ?>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $planCounter++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>