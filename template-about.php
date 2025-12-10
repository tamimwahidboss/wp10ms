<?php
/**
 * Template Name: About Page
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

// Include testimonial section files
if ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-1' ) {
    get_template_part('template-parts/testimonial-sections/testimonial-1');
} elseif ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-2' ) {
    get_template_part('template-parts/testimonial-sections/testimonial-2');
} elseif ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-3' ) {
    get_template_part('template-parts/testimonial-sections/testimonial-3');
} elseif ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-4' ) {
    get_template_part('template-parts/testimonial-sections/testimonial-4');
}

// Include brand section files
if ( isset( $options['brand-select'] ) && $options['brand-select'] === 'brand-1' ) {
    get_template_part('template-parts/brand-sections/brand-1');
} elseif ( isset( $options['brand-select'] ) && $options['brand-select'] === 'brand-2' ) {
    get_template_part('template-parts/brand-sections/brand-2');
}

// Include process section files
if ( isset( $options['process-select'] ) && $options['process-select'] === 'process-1' ) {
    get_template_part('template-parts/process-sections/process-1');
} elseif ( isset( $options['process-select'] ) && $options['process-select'] === 'process-2' ) {
    get_template_part('template-parts/process-sections/process-2');
} elseif ( isset( $options['process-select'] ) && $options['process-select'] === 'process-3' ) {
    get_template_part('template-parts/process-sections/process-3');
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

// Include faq section files
if ( isset( $options['faq-select'] ) && $options['faq-select'] === 'faq-1' ) {
    get_template_part('template-parts/faq-sections/faq-1');
} elseif ( isset( $options['faq-select'] ) && $options['faq-select'] === 'faq-2' ) {
    get_template_part('template-parts/faq-sections/faq-2');
}

// Include team section files
if ( isset( $options['team-select'] ) && $options['team-select'] === 'team-1' ) {
    get_template_part('template-parts/team-sections/team-1');
} elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-2' ) {
    get_template_part('template-parts/team-sections/team-2');
} elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-3' ) {
    get_template_part('template-parts/team-sections/team-3');
} elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-4' ) {
    get_template_part('template-parts/team-sections/team-4');
} elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-5' ) {
    get_template_part('template-parts/team-sections/team-5');
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