<?php
// Create an 'About Page' section using CSF framework
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'About Section', // Escaping the section title
    'fields' => array(

        // Media field for the About section banner
        array(
            'id'    => 'v4-about-banner',
            'type'  => 'media',
            'title' => 'Add Banner',
        ),

        // Text field for the About section paragraph title
        array(
            'id'      => 'v4-about-p',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'About Company',
        ),

        // Text field for the About section H1 title
        array(
            'id'      => 'v4-about-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Get’s IT Solutions For <br>Expert Consultants',
        ),

        // Textarea field for the description
        array(
            'id'      => 'v4-about-des',
            'type'    => 'textarea',
            'title'   => 'Title',
            'default' => 'About Company',
        ),

        // Link field for adding a button
        array(
            'id'    => 'v4-about-btn',
            'type'  => 'link',
            'title' => 'Add Button',
        ),

        // Icon field for adding an icon next to the button
        array(
            'id'      => 'v4-about-btn-icon',
            'type'    => 'icon',
            'title'   => 'Add Icon',
            'default' => 'fal fa-users',
        ),

        // Repeater field for icon box items
        array(
            'id'            => 'v4-about-box-rep',
            'type'          => 'repeater',
            'title'         => 'List Item',
            'button_title'  => 'Add List',
            'max'           => 10, // Maximum number of list items
            'fields'        => array(

                // Icon field for each list item
                array(
                    'id'      => 'v4-about-box-icon',
                    'type'    => 'icon',
                    'title'   => 'Add Icon',
                    'default' => 'fal fa-users',
                ),

                // Link field for the list title and link
                array(
                    'id'    => 'v4-about-box-link',
                    'type'  => 'link',
                    'title' => 'Box Title & Link',
                ),

                // Text field for the box description
                array(
                    'id'      => 'v4-about-box-p',
                    'type'    => 'text',
                    'title'   => 'Box Description',
                    'default' => 'Professional Consultants',
                ),
            ),
        ),

        // Text fields for CTA (Call to Action) section
        array(
            'id'      => 'v4-about-cta-h2',
            'type'    => 'text',
            'title'   => 'CTA Title',
            'default' => 'Professional Consultants',
        ),
        array(
            'id'      => 'v4-about-cta-p',
            'type'    => 'text',
            'title'   => 'CTA Description',
            'default' => 'Professional Consultants',
        ),

        // Link field for CTA button
        array(
            'id'    => 'v4-about-cta-link',
            'type'  => 'link',
            'title' => 'CTA Title & Link',
        ),

        // Icon field for the CTA
        array(
            'id'      => 'v4-about-cta-icon',
            'type'    => 'icon',
            'title'   => 'Add CTA Icon',
            'default' => 'fal fa-users',
        ),
    )
) );