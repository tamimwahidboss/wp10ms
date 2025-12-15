<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v6-cta-sec-h1']) || !empty($repeater_ctas) ) :
?>
<section class="cta-banner style-3">
    <div class="container-fluid bg-cover section-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/cta_bg1.png' ); ?>')">
        <div class="cta-content">
            <div class="row align-items-center">
                <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                    <h1><?php echo isset( $options['v6-cta-sec-h1'] ) ? esc_attr( $options['v6-cta-sec-h1'] ) : ''; ?></h1>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="btn-wraper d-flex flex-wrap justify-content-xl-end mt-2 mt-md-4 mt-xl-0">
                        <?php
                        $repeater_ctas = isset( $options['v6-cta-sec-rep'] ) ? $options['v6-cta-sec-rep'] : array();
                        foreach( $repeater_ctas as $repeater_cta ) {
                            $cta_url = isset( $repeater_cta['v6-cta-btn-link']['url'] ) ? esc_url( $repeater_cta['v6-cta-btn-link']['url'] ) : '#';
                            $cta_text = isset( $repeater_cta['v6-cta-btn-link']['text'] ) ? esc_html( $repeater_cta['v6-cta-btn-link']['text'] ) : 'Click Here';
                            $cta_icon = isset( $repeater_cta['v6-cta-btn-icon'] ) ? esc_attr( $repeater_cta['v6-cta-btn-icon'] ) : '';
                            ?>
                            <a href="<?php echo $cta_url; ?>" class="theme-btn"><?php echo $cta_text; ?><i class="<?php echo $cta_icon; ?>"></i></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>