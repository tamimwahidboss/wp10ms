<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<div class="client-brand-wrap section-bg">
    <div class="container">
        <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
            <?php
            // Ensure that $options is set and contains 'v2-brand-rep'
            if ( isset( $options['v2-brand-rep'] ) && is_array( $options['v2-brand-rep'] ) ) {
                $repeater_boxes = $options['v2-brand-rep'];
                foreach ( $repeater_boxes as $repeater_box ) {
                    // Ensure 'v2-brand-logo' key exists and has a 'url'
                    if ( isset( $repeater_box['v2-brand-logo']['url'] ) ) {
                        $logo_url = esc_url( $repeater_box['v2-brand-logo']['url'] );
                        ?>
                        <div class="single-client">
                            <img src="<?php echo $logo_url; ?>" alt="<?php echo esc_attr( $repeater_box['v2-brand-logo']['alt'] ?? 'Brand Logo' ); ?>">
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
