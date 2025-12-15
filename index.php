<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get data from DB
$breadcrumb_enabled = get_post_meta( get_the_ID(), '_breadcrumb_control', true );
$sections = get_post_meta(get_the_ID(), '_page_sections', true);
$meta = get_post_meta( get_the_ID(), 'wp10ms_metabox', true );

// some variable
$endDiv = '</div>';

// Get the header
get_header();

if ( is_front_page() || is_page() ) {
    // Breadcrumb condition
    if ( $breadcrumb_enabled === '1' ) {
        get_template_part('template-parts/global-elements/breadcrumb');
    }
    // Metabox controlled section support
    if ($sections && is_array($sections)) {
        foreach ($sections as $sec) {
            get_template_part(
                'template-parts/' . $sec['folder'] . '/' . str_replace('.php', '', $sec['file'])
            );
        }
    }
    // Show the page content
    $the_content = get_the_content();
    if ( ! empty( $the_content )) :
        get_template_part('template-parts/global-elements/content');
    endif;
} elseif ( is_home() || is_singular('post') || is_archive() || is_search() && !is_singular( 'project' )  ) {
    get_template_part('template-parts/global-elements/breadcrumb');
    echo '<section class="blog-wrapper news-wrapper section-padding">';
    echo '<div class="container">';
    echo '<div class="row">';

    echo '<div class="col-12 col-lg-8">';
    if ( is_home() ) {
        get_template_part('template-parts/global-elements/content');
    } elseif( is_single() ) {
        get_template_part('template-parts/global-elements/content');
    } elseif ( is_archive() ) {
        get_template_part('template-parts/global-elements/content');
    }
    echo '</div>';

    echo '<div class="col-12 col-lg-4">';
    echo '<div class="main-sidebar">';
    dynamic_sidebar( 'main-sidebar-1' );
    echo '</div></div>';

    echo '</div></div></section>';
} elseif( is_singular( 'project' ) ) {
    get_template_part('template-parts/global-elements/breadcrumb');
    // PROJECT DETAILS
    echo '<section class="case-study-post-wrapper section-padding">';
    echo '<div class="container">';
    // echo '<h3>is_singular</h3>';
    get_template_part('template-parts/global-elements/content');
    echo '</div></section>';
}


// if ( is_front_page() || is_page() ) {
//     echo '<h3>is_singular</h3>';
// }
// elseif ( is_home() || is_singular('post') || is_archive() || is_search() ) {
//     echo '<h3>is_singular</h3>';
// }
// elseif( is_archive( 'project' ) ) {
//     echo '<h3>is_singular - projects</h3>';
// }



// Get the footer
get_footer();