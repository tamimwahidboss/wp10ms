<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v1-brand-rep']) ) :
?>

<div class="client-brand-logo-wrap">
    <div class="container">
        <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
            <?php
            // Ensure that $options is set and contains 'v1-brand-rep'
            if ( isset( $options['v1-brand-rep'] ) && is_array( $options['v1-brand-rep'] ) ) {
                $repeater_boxes = $options['v1-brand-rep'];
                foreach ( $repeater_boxes as $repeater_box ) {
                    // Ensure 'v1-brand-logo' key exists and has a 'url'
                    if ( isset( $repeater_box['v1-brand-logo']['url'] ) ) {
                        $logo_url = esc_url( $repeater_box['v1-brand-logo']['url'] );
                        ?>
                        <div class="single-client">
                            <img src="<?php echo $logo_url; ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'client_brand_alt_text', true ) ); ?>">
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
<?php endif; ?>