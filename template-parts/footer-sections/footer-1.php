<?php
$options = get_option( 'wp10ms_options' );
?>
<footer class="footer-1 footer-wrap">
    <div class="footer-widgets">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3 col-12 pr-xl-4">
                    <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                    <?php endif; ?>
                </div> <!-- /.col-lg-3 - single-footer-wid -->
                <div class="col-md-6 col-xl-2 col-12">
                    <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                    <?php endif; ?>
                </div> <!-- /.col-lg-3 - single-footer-wid -->
                <div class="col-md-6 col-xl-2 col-12">
                    <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                    <?php endif; ?>
                </div> <!-- /.col-lg-3 - single-footer-wid -->
                <div class="col-md-6 col-xl-3 col-12">
                    <?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                    <?php endif; ?>
                </div> <!-- /.col-lg-3 - single-footer-wid -->
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container text-center">
            <div class="footer-bottom-content">
                <?php
                // Ensure $options is defined and has the 'ft-cp-text' key
                if ( isset( $options['ft-cp-text'] ) && !empty( $options['ft-cp-text'] ) ) {
                    // Echo the 'ft-cp-text' value, escaping it for safe output
                    echo esc_html( $options['ft-cp-text'] );
                } else {
                    // Provide a default message if 'ft-cp-text' is not set or empty
                    echo '© ' . date('Y') . ' Your Company. All rights reserved.';
                }
                ?>
            </div>
        </div>
    </div>
</footer>
