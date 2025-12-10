<?php
get_header();
echo '<h1>search</h1>';
get_template_part('template-parts/blog-sections/blog-6');

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