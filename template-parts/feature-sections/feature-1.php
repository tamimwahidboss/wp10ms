<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-feature-title-p']) || !empty($options['v1-feature-title-h1']) || !empty($repeater_boxes) ) :
?>
<section class="features-wrapper features-1 section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="section-title text-center">
                    <p><?php echo isset($options['v1-feature-title-p']) ? esc_attr($options['v1-feature-title-p']) : ''; ?></p>
                    <h1><?php echo isset($options['v1-feature-title-h1']) ? esc_html($options['v1-feature-title-h1']) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row mt-3 mt-lg-5">
            <div class="col-xl-4 d-none d-xl-block">
                <div class="features-banner mt-30 bg-cover" style="background-image: url('<?php echo isset($options['v1-feature-banner']['url']) ? esc_url($options['v1-feature-banner']['url']) : ''; ?>')">
                </div>
            </div>
            <div class="col-xl-8 col-12">
                <div class="row">
                    <?php
                    $repeater_boxes = isset($options['v1-feature-box-rep']) ? $options['v1-feature-box-rep'] : array();
                    foreach( $repeater_boxes as $repeater_box ) {
                        $feature_icon = isset($repeater_box['v1-feature-box-icon']) ? esc_attr($repeater_box['v1-feature-box-icon']) : '';
                        $feature_h3 = isset($repeater_box['v1-feature-box-h3']) ? esc_html($repeater_box['v1-feature-box-h3']) : '';
                        $feature_p = isset($repeater_box['v1-feature-box-p']) ? esc_html($repeater_box['v1-feature-box-p']) : '';
                        ?>
                        <div class="col-md-6 col-12">
                            <div class="single-features-item">
                                <div class="icon">
                                    <i class="<?php echo $feature_icon; ?>"></i>
                                </div>
                                <div class="content">
                                    <h3><?php echo $feature_h3; ?></h3>
                                    <p><?php echo $feature_p; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <div class="col-12">
                        <div class="feature-cta bg-cover bg-center text-white" style="background-image: url('<?php echo isset($options['v1-feature-cta-bg']['url']) ? esc_url($options['v1-feature-cta-bg']['url']) : 'assets/img/home1/wave.png'; ?>')">
                            <p><?php echo isset($options['v1-feature-cta-p']) ? esc_attr($options['v1-feature-cta-p']) : ''; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>