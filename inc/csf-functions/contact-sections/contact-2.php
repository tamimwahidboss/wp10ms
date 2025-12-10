<?php
// Create a v2 Contact section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'Contact Section',
    'fields' => array(
        array(
            'id'      => 'v2-contact-sec-h6',
            'type'    => 'text',
            'title'   => 'Subtitle',
            'default' => 'Let\'s Talk With Us',
        ),
        array(
            'id'      => 'v2-contact-sec-h2',
            'type'    => 'text',
            'title'   => 'Main Title',
            'default' => 'Title',
        ),
        array(
            'id'      => 'v2-contact-shortcode',
            'type'    => 'text',
            'title'   => 'Form Shortcode',
        ),
        array(
            'id'      => 'v2-contact-sec-h2-right',
            'type'    => 'text',
            'title'   => 'Subtitle (Right)',
            'default' => 'Don’t Hesitate To Contact With Us, We’ve Very Friendly',
        ),
        array(
            'id'      => 'v2-contact-sec-des',
            'type'    => 'text',
            'title'   => 'Description',
            'default' => 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.',
        ),
        array(
            'id'      => 'v2-contact-sec-icon',
            'type'    => 'media',
            'title'   => 'Add Icon',
            'default' => esc_url( '#' ),
        ),
        array(
            'id'      => 'v2-contact-sec-p',
            'type'    => 'text',
            'title'   => 'Text',
            'default' => 'Call Any Time',
        ),
        array(
            'id'      => 'v2-contact-sec-email',
            'type'    => 'link',
            'title'   => 'Email Link',
            'default' => '+254 (487) 25654',
        ),
    ),
) );