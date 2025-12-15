<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-testimonial-banner']['url']) || !empty($options['v1-testimonial-rep']) ) :
?>

<section class="testimonial-wrapper section-padding">
    <div class="testimonial-bg bg-cover" style="background-image: url('<?php echo isset( $options['v1-testimonial-banner']['url'] ) ? esc_url( $options['v1-testimonial-banner']['url'] ) : ''; ?>')"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-4 col-xl-5 offset-xl-7">
                <div class="testimonial-carousel-active owl-carousel owl-theme">
                    <?php
                    if ( isset( $options['v1-testimonial-rep'] ) && ! empty( $options['v1-testimonial-rep'] ) ) {
                        foreach ( $options['v1-testimonial-rep'] as $repeater_box ) {
                            ?>
                            <div class="single-testimonial">
                                <div class="icon">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <h2><?php echo isset( $repeater_box['v1-testimonial-h2'] ) ? esc_html( $repeater_box['v1-testimonial-h2'] ) : ''; ?></h2>
                                <div class="client-info">
                                    <div class="client-img bg-cover" style="background-image: url('<?php echo isset( $repeater_box['v1-testimonial-img']['url'] ) ? esc_url( $repeater_box['v1-testimonial-img']['url'] ) : 'assets/img/home1/testi1.jpg'; ?>')"></div>
                                    <div class="client-bio">
                                        <h3><?php echo isset( $repeater_box['v1-testimonial-h3'] ) ? esc_html( $repeater_box['v1-testimonial-h3'] ) : ''; ?></h3>
                                        <p><?php echo isset( $repeater_box['v1-testimonial-p'] ) ? esc_attr( $repeater_box['v1-testimonial-p'] ) : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>