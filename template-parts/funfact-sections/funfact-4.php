<?php
$options = get_option( 'wp10ms_options' );
?>
<section class="funfact-wrapper_2 section-bg bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/fun_fac_02.png' ); ?>');">
    <div class="container">
        <div class="funfact-content-grid text-white">
            <?php
            if ( isset( $options['v4-count-sec-rep'] ) && is_array( $options['v4-count-sec-rep'] ) ) {
                foreach( $options['v4-count-sec-rep'] as $repeater_count ) {
                    ?>
                    <div class="single-funfact-item">
                        <h3><?php echo isset( $repeater_count['v4-count-sec-h3'] ) ? esc_html( $repeater_count['v4-count-sec-h3'] ) : ''; ?> <span>+</span> </h3>
                        <p><?php echo isset( $repeater_count['v4-count-sec-p'] ) ? esc_attr( $repeater_count['v4-count-sec-p'] ) : ''; ?></p>
                    </div>
                    <?php
                }
            } else {
                echo '<p>No fun fact data available at the moment.</p>';
            }
            ?>
        </div>
    </div>
</section>
