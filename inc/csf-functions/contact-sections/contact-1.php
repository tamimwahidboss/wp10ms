<?php
// Create a v6 Contact section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'Contact Section',
    'fields' => array(
        array(
            'id'      => 'v1-contact-sec-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Contacts',
        ),
        array(
            'id'      => 'v1-contact-sec-p',
            'type'    => 'text',
            'title'   => 'Subtitle',
            'default' => 'What people say About Techex',
        ),
        array(
            'id'      => 'v1-contact-shortcode',
            'type'    => 'text',
            'title'   => 'Form Shortcode',
        ),
        array(
            'id'            => 'v1-contact-rep',
            'type'          => 'repeater',
            'title'         => 'Info Details',
            'max'           => '3',
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v1-contact-info-icon',
                    'type'  => 'icon',
                    'title' => 'Info Icon',
                ),
                array(
                    'id'    => 'v1-contact-info-span',
                    'type'  => 'text',
                    'title' => 'Info Title',
                ),
                array(
                    'id'    => 'v1-contact-info-a',
                    'type'  => 'link',
                    'title' => 'Info Value & Link',
                ),
            ),
        ),
        array(
            'id'      => 'v1-contact-p',
            'type'    => 'text',
            'title'   => 'Subtitle',
            'default' => 'What people say About Techex',
        ),
        array(
            'id'      => 'v1-contact-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Title',
        ),
    ),
) );