<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-hero-slide-rep']) ) :
?>

<section class="hero-slide-wrapper hero-2">
    <div class="hero-slider-2 owl-carousel">
        <?php
        $repeater_boxes = isset( $options['v2-hero-slide-rep'] ) ? $options['v2-hero-slide-rep'] : [];
        foreach( $repeater_boxes as $repeater_box ) {
            $banner_url = isset( $repeater_box['v2-hero-slide-banner']['url'] ) ? esc_url( $repeater_box['v2-hero-slide-banner']['url'] ) : '';
            $hero_h1 = isset( $repeater_box['v2-hero-slide-h1'] ) ? esc_html( $repeater_box['v2-hero-slide-h1'] ) : '';
            $hero_p = isset( $repeater_box['v2-hero-slide-p'] ) ? esc_html( $repeater_box['v2-hero-slide-p'] ) : '';
            ?>
            <div class="single-slide bg-cover" style="background-image: url('<?php echo $banner_url; ?>')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="hero-contents">
                                <h1><?php echo $hero_h1; ?></h1>
                                <p><?php echo $hero_p; ?></p>
                                
                                <?php
                                $repeater_btns = isset( $repeater_box['v2-hero-btn-rep'] ) ? $repeater_box['v2-hero-btn-rep'] : [];
                                foreach( $repeater_btns as $repeater_btn ) {
                                    $btn_url = isset( $repeater_btn['v2-hero-btn']['url'] ) ? esc_url( $repeater_btn['v2-hero-btn']['url'] ) : '#';
                                    $btn_text = isset( $repeater_btn['v2-hero-btn']['text'] ) ? esc_html( $repeater_btn['v2-hero-btn']['text'] ) : '';
                                    $btn_icon = isset( $repeater_btn['v2-hero-btn-icon'] ) ? esc_attr( $repeater_btn['v2-hero-btn-icon'] ) : '';
                                    ?>
                                    <a href="<?php echo $btn_url; ?>" class="theme-btn"><?php echo $btn_text; ?> <i class="<?php echo $btn_icon; ?>"></i></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<?php endif; ?>