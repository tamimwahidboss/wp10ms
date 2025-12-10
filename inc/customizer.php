<?php

// Theme header customizer options
// esc_html__('', 'wp10ms'),
// function wp10ms_theme_customizer($wp_customize) {
//     // Add a panel for header customization
//     $wp_customize->add_panel('wp10ms_panel_01', array(
//         'priority'    => 10,
//         'title'       => esc_html__('Header', 'wp10ms'),
//         'description' => esc_html__('If you want to modify header elements, you can do it here.', 'wp10ms'),
//     ));
    
//     // Add a section within the panel for top header settings
//     $wp_customize->add_section('top_header', array(
//         'title'       => esc_html__('Top Header', 'wp10ms'),
//         'description' => esc_html__('If you want to modify top header elements, you can do it here.', 'wp10ms'),
//         'panel'       => 'wp10ms_panel_01',
//     ));

//     // Add a section within the panel for top header settings
//     $wp_customize->add_section('main_header', array(
//         'title'       => esc_html__('Top Header', 'wp10ms'),
//         'description' => esc_html__('If you want to modify top header elements, you can do it here.', 'wp10ms'),
//         'panel'       => 'wp10ms_panel_01',
//     ));
    
//     // Add a setting for the header email
//     $wp_customize->add_setting('header_email', array(
//         'default'           => esc_attr__('hello@colorlib.com', 'wp10ms'), // Set the default value for the setting
//         'sanitize_callback' => 'sanitize_email', // Add a callback to sanitize the email input
//     ));
    
//     // Add a control for the header email setting
//     $wp_customize->add_control('header_email', array(
//         'label'       => esc_html__('Header email', 'wp10ms'),
//         'description' => esc_html__('If you want to change the top header email, you can do it here.', 'wp10ms'),
//         'section'     => 'top_header',
//         'settings'    => 'header_email',
//     ));
