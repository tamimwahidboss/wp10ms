<?php
// Create an 'About Page' section using CSF framework
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'About Section', // Escaping the section title
    'fields' => array(

        // Media field for the About section banner
        array(
            'id'    => 'v5-about-banner',
            'type'  => 'media',
            'title' => 'Add Banner',
        ),

        // Link field for adding a YouTube video link
        array(
            'id'    => 'v5-about-yt',
            'type'  => 'link',
            'title' => 'Add Video Link',
        ),

        // Text field for the About section title
        array(
            'id'      => 'v5-about-a',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'About Company',
        ),

        // Text field for the About section H1 title
        array(
            'id'      => 'v5-about-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Get’s IT Solutions For <br>Expert Consultants',
        ),

        // Textarea field for the description
        array(
            'id'      => 'v5-about-p',
            'type'    => 'textarea',
            'title'   => 'Description',
            'default' => 'About Company',
        ),

        // Repeater field for rating items
        array(
            'id'            => 'v5-about-rate-rep',
            'type'          => 'repeater',
            'title'         => 'List Item',
            'button_title'  => 'Add List',
            'max'           => 10, // Maximum number of list items
            'fields'        => array(

                // Text field for rating count
                array(
                    'id'      => 'v5-about-rate-h3',
                    'type'    => 'text',
                    'title'   => 'Count',
                    'default' => '300',
                ),

                // Text field for the rate description
                array(
                    'id'      => 'v5-about-rate-p',
                    'type'    => 'text',
                    'title'   => 'Rate Description',
                    'default' => 'Professional Consultants',
                ),
            ),
        ),

        // Repeater field for buttons
        array(
            'id'            => 'v5-about-btn-rep',
            'type'          => 'repeater',
            'title'         => 'About Button',
            'button_title'  => 'Add Button',
            'max'           => 2, // Maximum number of buttons
            'fields'        => array(

                // Link field for button
                array(
                    'id'    => 'v5-about-btn',
                    'type'  => 'link',
                    'title' => 'Add Button',
                ),

                // Icon field for button icon
                array(
                    'id'      => 'v5-about-btn-icon',
                    'type'    => 'icon',
                    'title'   => 'Icon',
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    )
) );