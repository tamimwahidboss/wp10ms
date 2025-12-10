<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>
<section class="we-provide-solutions"> <!-- index 5 - content-area -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <a class="theme-btn-sm mb-15" data-aos="fade-up"><?php echo isset($options['v3-feature-a']) ? esc_html($options['v3-feature-a']) : 'Default Button Text'; ?></a>
                    <h1 data-aos="fade-up" data-aos-delay="100"><?php echo isset($options['v3-feature-h1']) ? esc_html($options['v3-feature-h1']) : 'Default Heading'; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $repeater_boxes = isset($options['v3-feature-box-rep']) ? $options['v3-feature-box-rep'] : array();
            $boxNum = 1;
            foreach( $repeater_boxes as $repeater_box ) {
                $box_link_url = isset($repeater_box['v3-feature-box-link']['url']) ? esc_url($repeater_box['v3-feature-box-link']['url']) : '#';
                $box_h3 = isset($repeater_box['v3-feature-box-h3']) ? esc_html($repeater_box['v3-feature-box-h3']) : 'Default Heading';
                $box_p = isset($repeater_box['v3-feature-box-p']) ? esc_html($repeater_box['v3-feature-box-p']) : 'Default description text.';
                $box_link_text = isset($repeater_box['v3-feature-box-link']['text']) ? esc_html($repeater_box['v3-feature-box-link']['text']) : 'Read More';
                $box_btn_icon = isset($repeater_box['v3-feature-btn-icon']) ? esc_attr($repeater_box['v3-feature-btn-icon']) : 'default-icon-class';
                ?>
                <div class="col-12 col-md-6 col-xl-3" data-aos="fade-up">
                    <a href="<?php echo $box_link_url; ?>" class="single-provide-solutions" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/techex-landing-page/we-provide-solutopns-bg.png'); ?>')">
                        <div class="number"><?php echo '0' . $boxNum++; ?></div>
                        <div class="content"> 
                            <h3><?php echo $box_h3; ?></h3>
                            <p><?php echo $box_p; ?></p>
                            <span class="read-more text-uppercase"><?php echo $box_link_text; ?> <i class="<?php echo $box_btn_icon; ?>"></i></span>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
