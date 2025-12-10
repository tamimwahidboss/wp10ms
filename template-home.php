<?php
/**
 * Template Name: Home Page
 */
get_header();
$options = get_option( 'wp10ms_options' );

// Include hero section files
if ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-1' ) {
    get_template_part('template-parts/hero-sections/hero-1');
} elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-2' ) {
    get_template_part('template-parts/hero-sections/hero-2');
} elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-3' ) {
    get_template_part('template-parts/hero-sections/hero-3');
} elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-4' ) {
    get_template_part('template-parts/hero-sections/hero-4');
} elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-5' ) {
    get_template_part('template-parts/hero-sections/hero-5');
} elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-6' ) {
    get_template_part('template-parts/hero-sections/hero-6');
}

// Include feature section files
if ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-1' ) {
    get_template_part('template-parts/feature-sections/feature-1');
} elseif ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-2' ) {
    get_template_part('template-parts/feature-sections/feature-2');
} elseif ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-3' ) {
    get_template_part('template-parts/feature-sections/feature-3');
}

// Include about section files
if ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-1' ) {
    get_template_part('template-parts/about-sections/about-us-1');
} elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-2' ) {
    get_template_part('template-parts/about-sections/about-us-2');
} elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-3' ) {
    get_template_part('template-parts/about-sections/about-us-3');
} elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-4' ) {
    get_template_part('template-parts/about-sections/about-us-4');
} elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-5' ) {
    get_template_part('template-parts/about-sections/about-us-5');
} elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-6' ) {
    get_template_part('template-parts/about-sections/about-us-6');
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

// Include pricing section files
if ( isset( $options['pricing-select'] ) && $options['pricing-select'] === 'pricing-1' ) {
    get_template_part('template-parts/pricing-sections/pricing-1');
} elseif ( isset( $options['pricing-select'] ) && $options['pricing-select'] === 'pricing-2' ) {
    get_template_part('template-parts/pricing-sections/pricing-2');
} elseif ( isset( $options['pricing-select'] ) && $options['pricing-select'] === 'pricing-3' ) {
    get_template_part('template-parts/pricing-sections/pricing-3');
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

// Include blog section files
if ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-1' ) {
    get_template_part('template-parts/blog-sections/blog-1');
} elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-2' ) {
    get_template_part('template-parts/blog-sections/blog-2');
} elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-3' ) {
    get_template_part('template-parts/blog-sections/blog-3');
} elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-4' ) {
    get_template_part('template-parts/blog-sections/blog-4');
} elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-5' ) {
    get_template_part('template-parts/blog-sections/blog-5');
} elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-6' ) {
    get_template_part('template-parts/blog-sections/blog-6');
} elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-7' ) {
    get_template_part('template-parts/blog-sections/blog-7');
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