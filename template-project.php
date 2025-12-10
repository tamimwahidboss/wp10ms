<?php
/**
 * Template Name: Case Study Page
 */
get_header();
?>
<?php $options = get_option( 'wp10ms_options' );?>
<?php
get_template_part('template-parts/global-elements/breadcrumb');

// Include project section files
if ( isset( $options['project-select'] ) && $options['project-select'] === 'project-1' ) {
    get_template_part('template-parts/project-sections/project-1');
} elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-2' ) {
    get_template_part('template-parts/project-sections/project-2');
} elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-3' ) {
    get_template_part('template-parts/project-sections/project-3');
} elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-4' ) {
    get_template_part('template-parts/project-sections/project-4');
} elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-5' ) {
    get_template_part('template-parts/project-sections/project-5');
} elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-6' ) {
    get_template_part('template-parts/project-sections/project-6');
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






get_footer(); ?>