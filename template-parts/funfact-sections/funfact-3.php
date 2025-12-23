<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v3-funfact-p']) || !empty($options['v3-funfact-h1']) || !empty($options['v3-funfact-des']) ) :
?>

<section class="fun-fact-wrapper">
    <div class="funfact-box-bg bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/home4/funfact-line.png' ); ?>')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 pl-xl-0 offset-xl-1 text-white">
                    <div class="section-title mb-30">
                        <p><?php echo isset( $options['v3-funfact-p'] ) ? wp_kses_post( $options['v3-funfact-p'] ) : ''; ?></p>
                        <h1><?php echo isset( $options['v3-funfact-h1'] ) ? wp_kses_post( $options['v3-funfact-h1'] ) : ''; ?></h1>
                    </div>
                    <p><?php echo isset( $options['v3-funfact-des'] ) ? wp_kses_post( $options['v3-funfact-des'] ) : ''; ?></p>
                    <a href="<?php echo isset( $options['v3-funfact-btn']['url'] ) ? esc_url( $options['v3-funfact-btn']['url'] ) : '#'; ?>" class="theme-btn mt-4 minimal-btn">
                        <?php echo isset( $options['v3-funfact-btn']['text'] ) ? wp_kses_post( $options['v3-funfact-btn']['text'] ) : 'Learn More'; ?> 
                        <i class="<?php echo isset( $options['v3-funfact-btn-icon'] ) ? wp_kses_post( $options['v3-funfact-btn-icon'] ) : ''; ?>"></i>
                    </a>
                </div>
                <div class="col-xl-5 mt-5 mt-xl-0">
                    <div class="fun-fact-grid">
                        <?php
                        if ( isset( $options['v3-funfact-box-rep'] ) && is_array( $options['v3-funfact-box-rep'] ) ) {
                            foreach( $options['v3-funfact-box-rep'] as $repeater_box ) {
                                ?>
                                <div class="single-funfact-item">
                                    <div class="icon">
                                        <i class="<?php echo isset( $repeater_box['v3-funfact-box-icon'] ) ? wp_kses_post( $repeater_box['v3-funfact-box-icon'] ) : ''; ?>"></i>
                                    </div>
                                    <h3><?php echo isset( $repeater_box['v3-funfact-box-h3'] ) ? wp_kses_post( $repeater_box['v3-funfact-box-h3'] ) : ''; ?></h3>
                                    <p><?php echo isset( $repeater_box['v3-funfact-box-p'] ) ? wp_kses_post( $repeater_box['v3-funfact-box-p'] ) : ''; ?></p>
                                </div>
                                <?php
                            }
                        } else {
                            echo '<p>No fun facts available at the moment.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>