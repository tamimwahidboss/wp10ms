<?php
// Create an offset menu section
CSF::createSection( $prefix, array(
    'parent' => 'header-section',
    'title'  => 'Offset Menu',
    'fields' => array(
        array(
            'id'    => 'v2-head-off-logo',
            'type'  => 'media',
            'title' => 'Offset Brand Logo',
        ),
        array(
            'id'    => 'v2-head-off-1h3',
            'type'  => 'text',
            'title' => 'Offset Title 1',
        ),
        array(
            'id'    => 'v2-head-off-p',
            'type'  => 'textarea',
            'title' => 'About Your Business',
        ),
        array(
            'id'    => 'v2-head-off-btn',
            'type'  => 'link',
            'title' => 'Set Offset Button',
            'default' => '#',
        ),
        array(
            'id'    => 'v2-head-off-2h3',
            'type'  => 'text',
            'title' => 'Offset Title 2',
        ),
        array(
            'id'            => 'v2-head-off-rep',
            'type'          => 'repeater',
            'title'         => 'Offset Brand Info',
            'max'           => 5,
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v2-head-off-info',
                    'type'  => 'text',
                    'title' => 'Brand Info',
                ),
                array(
                    'id'    => 'v2-head-off-info-icon',
                    'type'  => 'icon',
                    'title' => 'Info Icon',
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
        array(
            'id'    => 'v2-header-notice',
            'type'  => 'text',
            'title' => 'Header Notice',
            'default' => 'Welcome to Techex IT Services Company. <a href="#">Setting &amp; Parivacy, Faq</a>',
        ),
        array(
            'id'    => 'v2-header-logo',
            'type'  => 'media',
            'title' => 'Brand Logo',
        ),
        array(
            'id'            => 'v2-main-header-info-rep',
            'type'          => 'repeater',
            'title'         => 'Business Information',
            'max'           => '3',
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v2-main-header-info-icon',
                    'type'  => 'icon',
                    'title' => 'Icon',
                    'default' => 'icon-location-dot',
                ),
                array(
                    'id'    => 'v2-main-header-info-h3',
                    'type'  => 'text',
                    'title' => 'Link',
                ),
                array(
                    'id'    => 'v2-main-header-info-text',
                    'type'  => 'text',
                    'title' => 'Text',
                    'default' => '55 Clark St, Brooklyn, NY 11201, USA',
                ),
            ),
        ),
        array(
            'id'            => 'v2-top-header-social-rep',
            'type'          => 'repeater',
            'title'         => 'Social Connect (Header-Footer)',
            'max'           => '5',
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v2-top-header-social-icon',
                    'type'  => 'icon',
                    'title' => 'Add Icon',
                    'default' => 'fab fa-facebook',
                ),
                array(
                    'id'    => 'v2-top-header-social-link',
                    'type'  => 'text',
                    'title' => 'Add Social Link',
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'    => 'v2-header-btn',
            'type'  => 'link',
            'title' => 'Header Button',
        ),
    )
) );