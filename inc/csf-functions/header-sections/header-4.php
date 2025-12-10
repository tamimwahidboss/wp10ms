<?php
// Create a top header sub-section
CSF::createSection( $prefix, array(
    'parent' => 'header-section',
    'title'  => 'Top Header',
    'fields' => array(
        // Create a top header info repeater
        array(
            'id'            => 'top-header-info-rep',
            'type'          => 'repeater',
            'title'         => 'Business Information',
            'max'           => '3',
            'button_title'  => 'Add More',
            'fields'        => array(
                // Top header info icon
                array(
                    'id'    => 'top-header-info-icon',
                    'type'  => 'icon',
                    'title' => 'Icon',
                    'default' => 'icon-location-dot',
                ),
                // Top header info link
                array(
                    'id'    => 'top-header-info-link',
                    'type'  => 'link',
                    'title' => 'Link',
                    'default' => '#',
                ),
                // Top header info text
                array(
                    'id'    => 'top-header-info-text',
                    'type'  => 'text',
                    'title' => 'Text',
                    'default' => '55 Clark St, Brooklyn, NY 11201, USA',
                ),
            ),
        ),
        // Create a top header and footer social repeater
        array(
            'id'            => 'top-header-social-rep',
            'type'          => 'repeater',
            'title'         => 'Social Connect (Header-Footer)',
            'max'           => '5',
            'button_title'  => 'Add More',
            'fields'        => array(
                // Top header social icon
                array(
                    'id'    => 'top-header-social-icon',
                    'type'  => 'icon',
                    'title' => 'Add Icon',
                    'default' => 'fab fa-facebook',
                ),
                // Top header social link
                array(
                    'id'    => 'top-header-social-link',
                    'type'  => 'link',
                    'title' => 'Add Social Link',
                    'default' => '#',
                ),
            ),
        ),
    )
) );

// Create a main header sub-section
CSF::createSection( $prefix, array(
    'parent' => 'header-section',
    'title'  => 'Main Header',
    'fields' => array(
        // Brand logo
        array(
            'id'    => 'header-logo',
            'type'  => 'media',
            'title' => 'Brand Logo',
        ),
        // Header Button
        array(
            'id'    => 'header-btn',
            'type'  => 'link',
            'title' => 'Header Button',
        ),
    )
) );