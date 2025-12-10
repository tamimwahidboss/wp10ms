<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
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
                        $icon_class = isset( $repeater_box['v3-contact-box-i'] ) ? esc_attr( $repeater_box['v3-contact-box-i'] ) : '';
                        $title = isset( $repeater_box['v3-contact-box-h4'] ) ? esc_html( $repeater_box['v3-contact-box-h4'] ) : '';
                        $span = isset( $repeater_box['v3-contact-box-span'] ) ? esc_html( $repeater_box['v3-contact-box-span'] ) : '';

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
                                                $info = isset( $repeater_info['v3-contact-box-info'] ) ? esc_html( $repeater_info['v3-contact-box-info'] ) : '';
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


            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="contact-map-wrap">
                        <div id="map">
                            <iframe src="<?php echo $options['v3-contact-map']; ?>" frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section-padding pb-0">
                <div class="col-12 text-center mb-20">
                    <div class="section-title">
                        <p><?php echo isset( $options['v3-contact-form-p'] ) ? esc_attr( $options['v3-contact-form-p'] ) : ''; ?></p>
                        <h1><?php echo isset( $options['v3-contact-form-h1'] ) ? esc_html( $options['v3-contact-form-h1'] ) : ''; ?></h1>
                    </div>
                </div>


                <div class="col-12 col-lg-12">
                    <div class="contact-form">                                                        
                        <form action="#" class="row conact-form">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname">Full Name</label>
                                    <input type="text" id="fname" placeholder="Enter Name" >                                         
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" placeholder="Enter Email Address" >                                         
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" placeholder="Enter Number">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" placeholder="Enter Subject">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Enter Message</label>
                                    <textarea placeholder="Enter message"></textarea>                                        
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12 text-center">
                                <button type="submit" class="theme-btn">send  message <i class="fas fa-arrow-right"></i></button>
                            </div>                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>