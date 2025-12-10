<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="price__wrapper section-padding-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-6 offset-md-3 text-center">
                <div class="section-title section__title_3 mb-30" data-aos="fade-up" data-aos-delay="100">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt>
                        <?php echo isset( $options['v3-price-sec-h6'] ) ? esc_html( $options['v3-price-sec-h6'] ) : ''; ?>
                    </h6>
                    <h2><?php echo isset( $options['v3-price-sec-h2'] ) ? esc_html( $options['v3-price-sec-h2'] ) : ''; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $repeater_prices = isset( $options['v3-price-rep'] ) ? $options['v3-price-rep'] : [];
            foreach( $repeater_prices as $repeater_price ) {
                ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mt-30" data-aos="fade-up">
                    <div class="price__element">
                        <div class="price__head">
                            <div class="price__range">
                                <span><?php echo isset( $repeater_price['v3-price-simble'] ) ? esc_html( $repeater_price['v3-price-simble'] ) : ''; ?></span>
                                <h3><?php echo isset( $repeater_price['v3-price-count'] ) ? esc_html( $repeater_price['v3-price-count'] ) : ''; ?></h3>
                                <p><?php echo isset( $repeater_price['v3-price-schedule'] ) ? esc_html( $repeater_price['v3-price-schedule'] ) : ''; ?></p>
                            </div>
                        </div>
                        <div class="preice__body">
                            <div class="cetagory__element">
                                <h4><?php echo isset( $repeater_price['v3-price-plan'] ) ? esc_html( $repeater_price['v3-price-plan'] ) : ''; ?></h4>
                                <p>Plan</p>
                            </div>
                            <a href="<?php echo isset( $repeater_price['v3-price-btn-link']['url'] ) ? esc_url( $repeater_price['v3-price-btn-link']['url'] ) : '#' ?>" class="theme-btn mb-30">
                                <?php echo isset( $repeater_price['v3-price-btn-text'] ) ? esc_html( $repeater_price['v3-price-btn-text'] ) : ''; ?>
                            </a>
                            <ul class="plan-features">
                                <?php
                                $repeater_price_features = isset( $repeater_price['v3-price-ft-rep'] ) ? $repeater_price['v3-price-ft-rep'] : [];
                                foreach( $repeater_price_features as $repeater_price_feature ) {
                                    $classActive = ( isset( $repeater_price_feature['v3-price-ft-active'] ) && $repeater_price_feature['v3-price-ft-active'] == 0 ) ? 'active' : '';
                                    ?>
                                    <li class="<?php echo esc_attr( $classActive ); ?>"><?php echo isset( $repeater_price_feature['v3-price-ft'] ) ? esc_html( $repeater_price_feature['v3-price-ft'] ) : ''; ?></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="dots-top-element">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/vector_03.svg' ); ?>" alt>
    </div>
    <div class="dots-bottom-element">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/vector_03.svg' ); ?>" alt>
    </div>
</section>
