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
                    'title'   => 'Info Box Icon',
                    'default' => 'fal fa-envelope',
                ),
                array(
                    'id'      => 'v3-contact-box-h4',
                    'type'    => 'text',
                    'title'   => 'Info Title',
                    'default' => 'Email',
                ),
                array(
                    'id'      => 'v3-contact-box-span',
                    'type'    => 'text',
                    'title'   => 'Info Details',
                    'default' => 'Email',
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
                            'type'    => 'text',
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
            'default' => esc_url( '#' ),
        ),
        array(
            'id'      => 'v3-contact-form-p',
            'type'    => 'text',
            'title'   => 'Short Title',
        ),
        array(
            'id'      => 'v3-contact-form-h1',
            'type'    => 'text',
            'title'   => 'Form Title',
        ),
    ),
) );