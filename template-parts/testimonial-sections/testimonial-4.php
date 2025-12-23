<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v4-testimonial-sec-h6']) || !empty($options['v4-testimonial-sec-h2']) || !empty($options['v4-testimonial-rep']) ) :
?>

<section class="agent__wrapper section-padding-3 bg-center bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bg_01.png' ); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="section-title section__title_3 mb-30" data-aos="fade-up" data-aos-delay="100">
                    <h6>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt>
                        <?php echo isset( $options['v4-testimonial-sec-h6'] ) ? wp_kses_post( $options['v4-testimonial-sec-h6'] ) : ''; ?>
                    </h6>
                    <h2><?php echo isset( $options['v4-testimonial-sec-h2'] ) ? wp_kses_post( $options['v4-testimonial-sec-h2'] ) : ''; ?></h2>
                </div>
            </div>
            <div class="col-12">
                <div class="agent-element owl-carousel mt-30">
                    <?php
                    if ( isset( $options['v4-testimonial-rep'] ) && ! empty( $options['v4-testimonial-rep'] ) ) {
                        foreach( $options['v4-testimonial-rep'] as $repeater_agent ) {
                            ?>
                            <div class="agent-item">
                                <div class="agent-content d-flex align-items-center">
                                    <div class="agent-img bg-center bg-cover" style="background-image: url('<?php echo esc_url( $repeater_agent['v4-testimonial-img']['url'] ); ?>');"></div>
                                    <div class="agent-content_name">
                                        <h4><?php echo isset( $repeater_agent['v4-testimonial-h4'] ) ? wp_kses_post( $repeater_agent['v4-testimonial-h4'] ) : ''; ?></h4>
                                        <p><?php echo isset( $repeater_agent['v4-testimonial-prof'] ) ? wp_kses_post( $repeater_agent['v4-testimonial-prof'] ) : ''; ?></p>
                                    </div>
                                </div>
                                <p><?php echo isset( $repeater_agent['v4-testimonial-feed'] ) ? wp_kses_post( $repeater_agent['v4-testimonial-feed'] ) : ''; ?></p>
                                <div class="quera">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/quote.svg' ); ?>" alt>
                                </div>
                                <div class="agent-logo">
                                    <img src="<?php echo esc_url( $repeater_agent['v4-testimonial-comp-logo']['url'] ); ?>" alt>
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