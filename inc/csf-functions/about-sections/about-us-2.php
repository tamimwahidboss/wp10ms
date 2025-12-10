<?php

// Create an About Page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'About Section',
    'fields' => array(
        array(
            'id'    => 'v2-about-sec-title-p',
            'type'  => 'text',
            'title' => 'Section Title (Paragraph)',
            'default' => 'About Company',
        ),
        array(
            'id'    => 'v2-about-sec-title-h1',
            'type'  => 'text',
            'title' => 'Section Title (Heading)',
            'default' => 'Get’s IT Solutions For <br>Expert Consultants',
        ),
        array(
            'id'    => 'v2-about-sec-des',
            'type'  => 'textarea',
            'title' => 'Section Description',
            'default' => 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam.',
        ),
        array(
            'id'    => 'v2-about-list-banner',
            'type'  => 'media',
            'title' => 'About Banner',
        ),
        array(
            'id'            => 'v2-about-list-rep',
            'type'          => 'repeater',
            'title'         => 'List Items',
            'button_title'  => 'Add List Item',
            'max'           => '10',
            'fields'        => array(
                array(
                    'id' => 'v2-about-list',
                    'type' => 'text',
                    'title' => 'List Item Title',
                    'default' => 'Professional Consultants',
                ),
            ),
        ),
        array(
            'id'    => 'v2-about-sec-banner1',
            'type'  => 'media',
            'title' => 'Banner Left 1',
        ),
        array(
            'id'    => 'v2-about-sec-banner2',
            'type'  => 'media',
            'title' => 'Banner Left 2',
        ),
    )
) );