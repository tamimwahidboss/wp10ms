<?php
// Get the header
get_header();

get_template_part('template-parts/blog-sections/blog-7');

// Default post content here
// echo '<section class="blog-section section-padding bg-contain">';
// echo '<div class="container">';
// echo '<div class="row mb-30">';
// echo '<div class="col-12 col-lg-12">';
// echo the_post_thumbnail();
// echo '</div>';
// echo '<div class="col-12 col-lg-12">';
// the_content();
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</section>';

// get_template_part('template-parts/global-elements/breadcrumb');
// get_template_part('template-parts/blog-sections/blog-7');

// // Include cta section files
// if ( isset( $options['cta-select'] ) && $options['cta-select'] === 'cta-1' ) {
//     get_template_part('template-parts/cta-sections/cta-1');
// } elseif ( isset( $options['cta-select'] ) && $options['cta-select'] === 'cta-2' ) {
//     get_template_part('template-parts/cta-sections/cta-2');
// }

// Get the footer
get_footer();