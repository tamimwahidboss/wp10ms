<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v3-testimonial-p']) || !empty($options['v3-testimonial-h1']) || !empty($options['v3-testimonial-rep']) ) :
?>

<!-- index 5 - content-area -->
<section class="testimonial-wrapper techex-landing-page"> 
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="section-title">
                    <a class="theme-btn-sm mb-15" data-aos="fade-right">
                        <?php echo isset( $options['v3-testimonial-p'] ) ? esc_html( $options['v3-testimonial-p'] ) : ''; ?>
                    </a>
                    <h1 data-aos="fade-right" data-aos-delay="100">
                        <?php echo isset( $options['v3-testimonial-h1'] ) ? esc_html( $options['v3-testimonial-h1'] ) : ''; ?>
                    </h1>
                </div>

                <div class="testimonial-carousel-3 owl-carousel owl-theme">
                    <?php
                    if ( isset( $options['v3-testimonial-rep'] ) && ! empty( $options['v3-testimonial-rep'] ) ) {
                        foreach( $options['v3-testimonial-rep'] as $repeater_box ) {
                            ?>
                            <div class="single-testimonial active">
                                <div class="icon">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <h2><?php echo isset( $repeater_box['v3-testimonial-h2'] ) ? esc_html( $repeater_box['v3-testimonial-h2'] ) : ''; ?></h2>
                                <div class="client-info">
                                    <div class="client-bio">
                                        <p><?php echo isset( $repeater_box['v3-testimonial-details'] ) ? $repeater_box['v3-testimonial-details'] : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-media" data-aos="fade-left">
                    <img src="<?php echo isset( $options['v3-testimonial-banner']['url'] ) ? esc_url( $options['v3-testimonial-banner']['url'] ) : ''; ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>