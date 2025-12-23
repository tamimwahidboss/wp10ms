<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-testimonial-rep']) ) :
?>

<section class="testimonial-wrapper pt-50 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="testimonial-carousel-2 owl-carousel owl-theme">
                    <?php
                    // Ensure the repeater boxes are set and not empty
                    if ( isset( $options['v2-testimonial-rep'] ) && ! empty( $options['v2-testimonial-rep'] ) ) {
                        $counterTes = 1; // Initialize counter
                        foreach( $options['v2-testimonial-rep'] as $repeater_box ) {
                            // Set the 'active' class for the first testimonial
                            $classActive = ( $counterTes == 1 ) ? 'active' : '';
                            ?>
                            <div class="single-testimonial <?php echo wp_kses_post( $classActive ); ?>">
                                <div class="icon">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <h2><?php echo isset( $repeater_box['v2-testimonial-h2'] ) ? wp_kses_post( $repeater_box['v2-testimonial-h2'] ) : ''; ?></h2>
                                <div class="client-info">
                                    <div class="client-img bg-cover" style="background-image: url('<?php echo isset( $repeater_box['v2-testimonial-img']['url'] ) ? esc_url( $repeater_box['v2-testimonial-img']['url'] ) : ''; ?>')"></div>
                                    <div class="client-bio">
                                        <h3><?php echo isset( $repeater_box['v2-testimonial-h3'] ) ? wp_kses_post( $repeater_box['v2-testimonial-h3'] ) : ''; ?></h3>
                                        <p><?php echo isset( $repeater_box['v2-testimonial-p'] ) ? wp_kses_post( $repeater_box['v2-testimonial-p'] ) : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $counterTes++; // Increment counter
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>