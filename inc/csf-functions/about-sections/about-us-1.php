<?php
// Create an About Page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'About Section',
    'fields' => array(
        array(
            'id'    => 'about-sec-title-p',
            'type'  => 'text',
            'title' => 'Section Title (Paragraph)',
            'default' => 'About Company',
        ),
        array(
            'id'    => 'about-sec-title-h1',
            'type'  => 'textarea',
            'title' => 'Section Title (Heading)',
            'default' => 'Get’s IT Solutions For <br>Expert Consultants',
        ),
        array(
            'id'    => 'about-sec-title-des',
            'type'  => 'textarea',
            'title' => 'Section Description',
            'default' => 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam.',
        ),
        array(
            'id'            => 'about-sec-box-rep',
            'type'          => 'repeater',
            'title'         => 'Icon Box',
            'button_title'  => 'Add Icon Box',
            'max'           => '2',
            'fields'        => array(
                array(
                    'id' => 'about-sec-box-icon',
                    'type' => 'icon',
                    'title' => 'Box Icon',
                    'default' => 'fal fa-users',
                ),
                array(
                    'id' => 'about-sec-box-title',
                    'type' => 'text',
                    'title' => 'Box Title',
                    'default' => 'Professional Consultants',
                ),
                array(
                    'id' => 'about-sec-box-des',
                    'type' => 'text',
                    'title' => 'Box Description',
                    'default' => 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque',
                ),
            ),
        ),
        array(
            'id'    => 'about-sec-banner',
            'type'  => 'media',
            'title' => 'About Banner',
        ),
        array(
            'id'            => 'about-sec-ft-item-rep',
            'type'          => 'repeater',
            'title'         => 'Features Item',
            'button_title'  => 'Add Item',
            'max'           => '3',
            'fields'        => array(
                array(
                    'id' => 'about-sec-ft-item-icon',
                    'type' => 'icon',
                    'title' => 'Feature Icon',
                    'default' => 'flaticon-speech-bubble',
                ),
                array(
                    'id' => 'about-sec-ft-item-title',
                    'type' => 'text',
                    'title' => 'Feature Title',
                    'default' => 'IT Consultancy',
                ),
                array(
                    'id' => 'about-sec-ft-item-des',
                    'type' => 'text',
                    'title' => 'Feature Description',
                    'default' => 'Faster & Smarter Solutions',
                ),
            ),
        ),
    )
) );