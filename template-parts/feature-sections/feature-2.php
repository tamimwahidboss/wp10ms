<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="features-wrapper features-2 section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-6">
                <div class="row mtm-30">
                    <?php
                    $repeater_boxes = isset($options['v2-feature-icon-rep']) ? $options['v2-feature-icon-rep'] : array();
                    foreach( $repeater_boxes as $repeater_box ) {
                        $icon_class = isset($repeater_box['v2-feature-box-icon']) ? esc_attr($repeater_box['v2-feature-box-icon']) : '';
                        $link_url = isset($repeater_box['v2-feature-box-link']['url']) ? esc_url($repeater_box['v2-feature-box-link']['url']) : '#';
                        $link_text = isset($repeater_box['v2-feature-box-link']['text']) ? esc_html($repeater_box['v2-feature-box-link']['text']) : '';
                        ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="<?php echo $icon_class; ?>"></i>
                                </div>
                                <h4><a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a></h4>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 col-xl-5 offset-xl-1 mt-5 mt-xl-0">
                <div class="section-title">
                    <p><?php echo isset($options['v2-feature-top-title']) ? esc_html($options['v2-feature-top-title']) : ''; ?></p>
                    <h1><?php echo isset($options['v2-feature-h1']) ? esc_html($options['v2-feature-h1']) : ''; ?></h1>
                </div>
                <p class="mt-20"><?php echo isset($options['v2-feature-p']) ? esc_html($options['v2-feature-p']) : ''; ?></p>
                <a href="<?php echo isset($options['v2-feature-btn']['url']) ? esc_url($options['v2-feature-btn']['url']) : '#'; ?>" class="theme-btn mt-30">
                    <?php echo isset($options['v2-feature-btn']['text']) ? esc_html($options['v2-feature-btn']['text']) : 'Button Text'; ?> 
                    <i class="<?php echo isset($options['v2-feature-btn-icon']) ? esc_attr($options['v2-feature-btn-icon']) : ''; ?>"></i>
                </a>
            </div>
        </div>
    </div>
    <svg class="feature-bg">
        <path fill-rule="evenodd" opacity="0.039" fill="rgb(8, 106, 215)"
              d="M-0.000,232.999 C-0.000,232.999 239.131,-52.566 575.000,47.000 C910.869,146.565 1087.000,55.653 1231.000,19.999 C1375.000,-15.654 1800.820,-31.520 1915.000,232.999 C1445.000,232.999 -0.000,232.999 -0.000,232.999 Z"/>
    </svg>
</section>
