<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

// if(!empty($icon_class) || !empty($title) || !empty($span) ) :
?>

<!-- CONTACT PAGE -->
<section class="contact-page-wrap section-padding"> 
    <div class="container">
        <div class="row">
            <?php
            // Check if repeater_boxes is set and is an array
            if ( isset( $options['v3-contact-box-rep'] ) && is_array( $options['v3-contact-box-rep'] ) ) {
                foreach ( $options['v3-contact-box-rep'] as $repeater_box ) {
                    // Ensure each key exists and escape output
                    $icon_class = isset( $repeater_box['v3-contact-box-i'] ) ? wp_kses_post( $repeater_box['v3-contact-box-i'] ) : '';
                    $title = isset( $repeater_box['v3-contact-box-h4'] ) ? wp_kses_post( $repeater_box['v3-contact-box-h4'] ) : '';
                    $span = isset( $repeater_box['v3-contact-box-span'] ) ? wp_kses_post( $repeater_box['v3-contact-box-span'] ) : '';

                    ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-contact-card card1">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="<?php echo $icon_class; ?>"></i>
                                </div>
                                <div class="title">
                                    <h4><?php echo $title; ?></h4>
                                    <span><?php echo $span; ?></span>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <div class="info">
                                    <?php
                                    // Check if v3-contact-box-info-rep exists and is an array
                                    if ( isset( $repeater_box['v3-contact-box-info-rep'] ) && is_array( $repeater_box['v3-contact-box-info-rep'] ) ) {
                                        foreach ( $repeater_box['v3-contact-box-info-rep'] as $repeater_info ) {
                                            // Ensure each key exists and escape output
                                            $info = isset( $repeater_info['v3-contact-box-info'] ) ? wp_kses_post( $repeater_info['v3-contact-box-info'] ) : '';
                                            ?>
                                            <p><?php echo $info; ?></p>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="icon">
                                    <i class="fal fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <?php
            $mapLink = $options['v3-contact-map'];
            if(!empty($mapLink)) :
            
        ?>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="contact-map-wrap">
                    <div id="map">
                        <iframe src="<?php echo $options['v3-contact-map']; ?>" frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row section-padding pb-0">
            <div class="col-12 text-center mb-20">
                <div class="section-title">
                    <p><?php echo isset( $options['v3-contact-form-p'] ) ? wp_kses_post( $options['v3-contact-form-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v3-contact-form-h1'] ) ? wp_kses_post( $options['v3-contact-form-h1'] ) : ''; ?></h1>
                </div>
            </div>


            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <?php
                    echo do_shortcode(
                        isset( $options['v3-contact-shortcode'] ) ? $options['v3-contact-shortcode'] : ''
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// endif;