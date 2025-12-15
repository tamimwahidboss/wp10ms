<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($repeater_boxes) ) :
?>
<div class="faq-section section-padding"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInUp">
                <div class="faq-content">
                    <div class="faq-accordion">
                        <div id="accordion" class="accordion">
                            <?php
                            $faqNum = 1;
                            $repeater_boxes = isset( $options['v2-faq-rep'] ) ? $options['v2-faq-rep'] : array();
                            foreach( $repeater_boxes as $repeater_box ) {
                                $faq_title = isset( $repeater_box['v2-faq-title'] ) ? esc_html( $repeater_box['v2-faq-title'] ) : '';
                                $faq_des = isset( $repeater_box['v2-faq-des'] ) ? esc_html( $repeater_box['v2-faq-des'] ) : '';
                                ?>
                                <div class="card">
                                    <div class="card-header" id="faq<?php echo $faqNum; ?>">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-<?php echo $faqNum; ?>">
                                                <?php echo $faq_title; ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-<?php echo $faqNum; ?>" class="collapse" data-parent="#accordion">
                                        <div class="card-body"><?php echo $faq_des; ?></div>
                                    </div>
                                </div>
                                <?php
                                $faqNum++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp">
                <div class="faq-content">
                    <div class="faq-accordion">
                        <div id="accordion1" class="accordion">
                            <?php
                            $faqNum = 11;
                            $repeater_boxes = isset( $options['v2-faq-r8-rep'] ) ? $options['v2-faq-r8-rep'] : array();
                            foreach( $repeater_boxes as $repeater_box ) {
                                $faq_title = isset( $repeater_box['v2-faq-r8-title'] ) ? esc_html( $repeater_box['v2-faq-r8-title'] ) : '';
                                $faq_des = isset( $repeater_box['v2-faq-r8-des'] ) ? esc_html( $repeater_box['v2-faq-r8-des'] ) : '';
                                ?>
                                <div class="card">
                                    <div class="card-header" id="faq<?php echo $faqNum; ?>">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-<?php echo $faqNum; ?>">
                                                <?php echo $faq_title; ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-<?php echo $faqNum; ?>" class="collapse" data-parent="#accordion1">
                                        <div class="card-body"><?php echo $faq_des; ?></div>
                                    </div>
                                </div>
                                <?php
                                $faqNum++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>