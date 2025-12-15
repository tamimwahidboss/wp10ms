<?php
// about-page/about-us.php
$options = get_option( 'wp10ms_options' );

if( !empty( $options['v2-about-sec-title-p'] ) || !empty( $options['v2-about-sec-title-h1'] ) || !empty( $options['v2-about-sec-des'] ) || !empty( $options['v2-about-list-rep'] ) || !empty( $options['v2-about-sec-banner1']['url'] ) || !empty( $options['v2-about-sec-banner2']['url'] ) ) :
?>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 pr-xl-5">
                <div class="section-title mb-30">
                    <?php if ( !empty( $options['v2-about-sec-title-p'] ) ) : ?>
                        <p><?php echo isset( $options['v2-about-sec-title-p'] ) ? esc_attr( $options['v2-about-sec-title-p'] ) : ''; ?></p>
                    <?php endif; ?>
                    <?php if ( !empty( $options['v2-about-sec-title-h1'] ) ) : ?>
                        <h1><?php echo isset( $options['v2-about-sec-title-h1'] ) ? $options['v2-about-sec-title-h1'] : ''; ?></h1>
                    <?php endif; ?>
                </div>
                <?php if( !empty( $options['v2-about-sec-des']) ) : ?>
                    <p class="pr-md-5"><?php echo isset( $options['v2-about-sec-des'] ) ? esc_html( $options['v2-about-sec-des'] ) : ''; ?></p>
                <?php endif; ?>
                <div class="about-check-list d-flex">
                    <div class="banner bg-cover" style="background-image: url('<?php echo isset( $options['v2-about-list-banner']['url'] ) ? esc_url( $options['v2-about-list-banner']['url'] ) : ''; ?>')"></div>

                    <ul class="checked-list">
                        <?php
                        if ( isset( $options['v2-about-list-rep'] ) && is_array( $options['v2-about-list-rep'] ) ) {
                            $repeater_items = $options['v2-about-list-rep'];
                            foreach( $repeater_items as $repeater_item ) {
                                ?>
                                <li><?php echo isset( $repeater_item['v2-about-list'] ) ? esc_html( $repeater_item['v2-about-list'] ) : ''; ?></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>

            </div>
            <div class="col-xl-6 col-md-10 col-lg-6 pl-xl-5 col-12 mt-5 mt-xl-0">
                <div class="about-thum">
                    <div class="item top-image text-right">
                        <?php if( !empty( $options['v2-about-sec-banner1']['url'] ) ) : ?>
                            <img src="<?php echo isset( $options['v2-about-sec-banner1']['url'] ) ? esc_url( $options['v2-about-sec-banner1']['url'] ) : ''; ?>" alt="rrdevs">
                        <?php endif; ?>
                    </div>
                    <div class="item bottom-image">
                        <?php if( !empty( $options['v2-about-sec-banner2']['url'] ) ) : ?>
                            <img src="<?php echo isset( $options['v2-about-sec-banner2']['url'] ) ? esc_url( $options['v2-about-sec-banner2']['url'] ) : ''; ?>" alt="rrdevs">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>