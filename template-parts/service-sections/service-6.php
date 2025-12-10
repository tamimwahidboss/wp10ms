<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="our-service-provide techex-landing-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <a class="theme-btn-sm mb-15" data-aos="fade-up">
                        <?php echo isset( $options['v6-service-title-span'] ) ? esc_html( $options['v6-service-title-span'] ) : ''; ?>
                    </a>
                    <h1 data-aos="fade-up" data-aos-delay="100">
                        <?php echo isset( $options['v6-service-h1'] ) ? esc_html( $options['v6-service-h1'] ) : ''; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <?php if ( ! empty( $options['v6-service-box-rep'] ) ) : ?>
                <?php foreach ( $options['v6-service-box-rep'] as $service_box ) : ?>
                    <div class="col-xl-4 col-md-6 col-12" data-aos="fade-up">
                        <div class="single-our-service style-2">
                            <div class="thumb bg-cover" style="background-image: url('<?php echo isset( $service_box['v6-service-box-img']['url'] ) ? esc_url( $service_box['v6-service-box-img']['url'] ) : ''; ?>')"></div>
                            <div class="content">
                                <div class="icon">
                                    <?php if ( ! empty( $service_box['v6-service-box-icon'] ) && ! empty( $service_box['v6-service-box-icon']['url'] ) ) : ?>
                                        <img src="<?php echo esc_url( $service_box['v6-service-box-icon']['url'] ); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <h3><a href="<?php echo isset( $service_box['v6-service-box-link']['url'] ) ? esc_url( $service_box['v6-service-box-link']['url'] ) : '#' ; ?>"><?php echo isset( $service_box['v6-service-box-h3'] ) ? esc_html( $service_box['v6-service-box-h3'] ) : ''; ?></a></h3>
                                <p><?php echo isset( $service_box['v6-service-box-p'] ) ? esc_attr( $service_box['v6-service-box-p'] ) : ''; ?></p>
                                <a href="<?php echo isset( $service_box['v6-service-box-link']['url'] ) ? esc_url( $service_box['v6-service-box-link']['url'] ) : '#' ; ?>" class="read-more text-uppercase">
                                    read more <i class="icon-arrow-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
