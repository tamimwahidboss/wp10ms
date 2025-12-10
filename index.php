<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get the header
get_header();

// Breadcrumb condition
$breadcrumb_enabled = get_post_meta( get_the_ID(), '_breadcrumb_control', true );
if ( $breadcrumb_enabled === '1' ) {
    // Show breadcrumb
    get_template_part('template-parts/global-elements/breadcrumb');
}



$sections = get_post_meta(get_the_ID(), '_page_sections', true);

if ($sections && is_array($sections)) {
    foreach ($sections as $sec) {
        get_template_part(
            'template-parts/' . $sec['folder'] . '/' . str_replace('.php', '', $sec['file'])
        );
    }
}




// Show the page content
get_template_part('template-parts/global-elements/content');

// Get the footer
get_footer();