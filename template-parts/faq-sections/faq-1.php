<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>
<section class="faq-section section-padding">
    <div class="faq-bg bg-cover d-none d-lg-block" style="background-image: url('<?php echo isset( $options['faq-sec-banner']['url'] ) ? esc_url( $options['faq-sec-banner']['url'] ) : ''; ?>')"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="section-title">
                        <p><?php echo isset( $options['faq-sec-title-p'] ) ? esc_attr( $options['faq-sec-title-p'] ) : ''; ?></p>
                        <h1><?php echo isset( $options['faq-sec-title-h1'] ) ? esc_html( $options['faq-sec-title-h1'] ) : ''; ?></h1>
                    </div>
                </div>

                <div class="faq-content">
                    <div class="faq-accordion">
                        <div id="accordion" class="accordion">
                            <?php
                            $repeater_faqs = isset( $options['faq-sec-acc-rep'] ) ? $options['faq-sec-acc-rep'] : array();
                            $faqNum = 1;
                            foreach( $repeater_faqs as $repeater_faq ) {
                                $faq_title = isset( $repeater_faq['faq-sec-acc-title'] ) ? esc_html( $repeater_faq['faq-sec-acc-title'] ) : '';
                                $faq_description = isset( $repeater_faq['faq-sec-acc-des'] ) ? wp_kses_post( $repeater_faq['faq-sec-acc-des'] ) : '';
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
                                        <div class="card-body">
                                            <?php echo $faq_description; ?>
                                        </div>
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
</section>
