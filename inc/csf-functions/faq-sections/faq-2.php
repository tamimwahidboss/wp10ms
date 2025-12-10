<?php
// Create a FAQ section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => 'FAQ Section',
    'fields' => array(
        array(
            'id'            => 'v2-faq-rep',
            'type'          => 'repeater',
            'title'         => 'FAQ Left Item',
            'button_title'  => 'Add Item',
            'max'           => '10',
            'fields'        => array(
                array(
                    'id'    => 'v2-faq-title',
                    'type'  => 'text',
                    'title' => 'FAQ Title',
                    'default' => 'Can I Get Internet In My Area?',
                ),
                array(
                    'id'    => 'v2-faq-des',
                    'type'  => 'textarea',
                    'title' => 'Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
                ),
            ),
        ),
        array(
            'id'            => 'v2-faq-r8-rep',
            'type'          => 'repeater',
            'title'         => 'FAQ Right Item',
            'button_title'  => 'Add Item',
            'max'           => '10',
            'fields'        => array(
                array(
                    'id'    => 'v2-faq-r8-title',
                    'type'  => 'text',
                    'title' => 'FAQ Title',
                    'default' => 'Can I Get Internet In My Area?',
                ),
                array(
                    'id'    => 'v2-faq-r8-des',
                    'type'  => 'textarea',
                    'title' => 'Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
                ),
            ),
        ),
    ),
) );