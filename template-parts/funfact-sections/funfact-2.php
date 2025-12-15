<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-funfact-box-rep']) ) :
?>

<section class="our-achivement-fact section-bg bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/funfact-line.png' ); ?>')">
    <div class="container">
        <div class="funfact-content-grid text-white">
            <?php
            // Ensure $options is defined and contains 'v2-funfact-box-rep'
            if ( isset( $options['v2-funfact-box-rep'] ) && is_array( $options['v2-funfact-box-rep'] ) ) {
                foreach( $options['v2-funfact-box-rep'] as $repeater_box ) {
                    ?>
                    <div class="single-funfact-item">
                        <div class="icon">
                            <i class="<?php echo esc_attr( $repeater_box['v2-funfact-box-icon'] ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( $repeater_box['v2-funfact-box-h3'] ); ?></h3>
                        <p><?php echo esc_attr( $repeater_box['v2-funfact-box-p'] ); ?></p>
                    </div>
                    <?php
                }
            } else {
                // Provide a fallback message or content if 'v2-funfact-box-rep' is not set or is not an array
                echo '<p>No achievements available at the moment.</p>';
            }
            ?>
        </div>
    </div>
</section>
<?php endif; ?>