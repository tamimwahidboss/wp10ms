<?php
// Create a v3 Contact section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'Contact Section',
    'fields' => array(
        array(
            'id'          => 'v3-contact-box-rep',
            'type'        => 'repeater',
            'title'       => 'Add Info Box',
            'button_title' => 'Add More',
            'max'         => 3,
            'fields'      => array(
                array(
                    'id'      => 'v3-contact-box-i',
                    'type'    => 'icon',
                    'title'   => 'Icon',
                    'default' => 'fal fa-envelope',
                ),
                array(
                    'id'      => 'v3-contact-box-h4',
                    'type'    => 'text',
                    'title'   => 'Info Title',
                    'default' => 'Email Address',
                ),
                array(
                    'id'      => 'v3-contact-box-span',
                    'type'    => 'textarea',
                    'title'   => 'Info Details',
                    'default' => 'Sent mail asap anytime',
                ),
                array(
                    'id'          => 'v3-contact-box-info-rep',
                    'type'        => 'repeater',
                    'title'       => 'Add Info',
                    'button_title' => 'Add More',
                    'max'         => 5,
                    'fields'      => array(
                        array(
                            'id'      => 'v3-contact-box-info',
                            'type'    => 'textarea',
                            'title'   => 'Info Value',
                            'default' => 'info@example.com',
                        ),
                    ),
                ),
            ),
        ),
        array(
            'id'      => 'v3-contact-map',
            'type'    => 'text',
            'title'   => 'Google Map Link',
        ),
        array(
            'id'      => 'v3-contact-form-p',
            'type'    => 'text',
            'title'   => 'Sub Title',
            'default'   => 'Send us message',
        ),
        array(
            'id'      => 'v3-contact-form-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default'   => 'Don’t Hesited To Contact Us',
        ),
        array(
            'id'      => 'v3-contact-shortcode',
            'type'    => 'text',
            'title'   => 'Form Shortcode',
        ),
    ),
) );