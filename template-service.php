<?php
/**
 * Template Name: Service Page
 */
get_header();
$options = get_option( 'wp10ms_options' );

get_template_part('template-parts/global-elements/breadcrumb');

// Include feature section files
if ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-1' ) {
    get_template_part('template-parts/feature-sections/feature-1');
} elseif ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-2' ) {
    get_template_part('template-parts/feature-sections/feature-2');
} elseif ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-3' ) {
    get_template_part('template-parts/feature-sections/feature-3');
}

// Include service section files
if ( isset( $options['service-select'] ) && $options['service-select'] === 'service-1' ) {
    get_template_part('template-parts/service-sections/service-1');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-2' ) {
    get_template_part('template-parts/service-sections/service-2');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-3' ) {
    get_template_part('template-parts/service-sections/service-3');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-4' ) {
    get_template_part('template-parts/service-sections/service-4');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-5' ) {
    get_template_part('template-parts/service-sections/service-5');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-6' ) {
    get_template_part('template-parts/service-sections/service-6');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-7' ) {
    get_template_part('template-parts/service-sections/service-7');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-8' ) {
    get_template_part('template-parts/service-sections/service-8');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-9' ) {
    get_template_part('template-parts/service-sections/service-9');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-10' ) {
    get_template_part('template-parts/service-sections/service-10');
} elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-11' ) {
    get_template_part('template-parts/service-sections/service-11');
}

// Include funfact section files
if ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-1' ) {
    get_template_part('template-parts/funfact-sections/funfact-1');
} elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-2' ) {
    get_template_part('template-parts/funfact-sections/funfact-2');
} elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-3' ) {
    get_template_part('template-parts/funfact-sections/funfact-3');
} elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-4' ) {
    get_template_part('template-parts/funfact-sections/funfact-4');
}

// Include brand section files
if ( isset( $options['brand-select'] ) && $options['brand-select'] === 'brand-1' ) {
    get_template_part('template-parts/brand-sections/brand-1');
} elseif ( isset( $options['brand-select'] ) && $options['brand-select'] === 'brand-2' ) {
    get_template_part('template-parts/brand-sections/brand-2');
}

// Include contact section files
if ( isset( $options['contact-select'] ) && $options['contact-select'] === 'contact-1' ) {
    get_template_part('template-parts/contact-sections/contact-1');
} elseif ( isset( $options['contact-select'] ) && $options['contact-select'] === 'contact-2' ) {
    get_template_part('template-parts/contact-sections/contact-2');
} elseif ( isset( $options['contact-select'] ) && $options['contact-select'] === 'contact-3' ) {
    get_template_part('template-parts/contact-sections/contact-3');
}

// Include cta section files
if ( isset( $options['cta-select'] ) && $options['cta-select'] === 'cta-1' ) {
    get_template_part('template-parts/cta-sections/cta-1');
} elseif ( isset( $options['cta-select'] ) && $options['cta-select'] === 'cta-2' ) {
    get_template_part('template-parts/cta-sections/cta-2');
}


get_footer();

?>