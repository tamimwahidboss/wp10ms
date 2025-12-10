<?php
// Create an About Page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'About Section',
    'fields' => array(
        array(
            'id'    => 'v3-about-p',
            'type'  => 'text',
            'title' => 'Section Title (Paragraph)',
            'default' => 'About Company',
        ),
        array(
            'id'    => 'v3-about-span',
            'type'  => 'text',
            'title' => 'Section Title (Span)',
            'default' => 'About Company',
        ),
        array(
            'id'    => 'v3-about-h1',
            'type'  => 'text',
            'title' => 'Section Title (Heading)',
            'default' => 'Get’s IT Solutions For <br>Expert Consultants',
        ),
        array(
            'id'            => 'v3-about-box-rep',
            'type'          => 'repeater',
            'title'         => 'List Items',
            'button_title'  => 'Add List Item',
            'max'           => '10',
            'fields'        => array(
                array(
                    'id' => 'v3-about-box-icon',
                    'type' => 'icon',
                    'title' => 'Box Icon',
                    'default' => 'fal fa-users',
                ),
                array(
                    'id' => 'v3-about-box-h3',
                    'type' => 'text',
                    'title' => 'Box Title',
                    'default' => 'Professional Consultants',
                ),
                array(
                    'id' => 'v3-about-box-p',
                    'type' => 'text',
                    'title' => 'Box Description',
                    'default' => 'Professional Consultants',
                ),
            ),
        ),
        array(
            'id'    => 'v3-about-form-p',
            'type'  => 'text',
            'title' => 'Form Short Title (Paragraph)',
        ),
        array(
            'id'    => 'v3-about-form-h1',
            'type'  => 'text',
            'title' => 'Form Short Title (Heading)',
        ),
    )
) );