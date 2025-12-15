<?php
// Create a FAQ section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'FAQ Section',
    'fields' => array(
        array(
            'id'    => 'faq-sec-banner',
            'type'  => 'media',
            'title' => 'Section Banner',
        ),
        array(
            'id'    => 'faq-sec-title-p',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Why choose us',
        ),
        array(
            'id'    => 'faq-sec-title-h1',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Innovating Solutions <br> Digital Mindset',
        ),
        array(
            'id'            => 'faq-sec-acc-rep',
            'type'          => 'repeater',
            'title'         => 'FAQ Item',
            'button_title'  => 'Add Item',
            'max'           => '10',
            'fields'        => array(
                array(
                    'id'    => 'faq-sec-acc-title',
                    'type'  => 'text',
                    'title' => 'FAQ Title',
                    'default' => 'Can I Get Internet In My Area?',
                ),
                array(
                    'id'    => 'faq-sec-acc-des',
                    'type'  => 'textarea',
                    'title' => 'Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
                ),
            ),
        ),
    ),
) );