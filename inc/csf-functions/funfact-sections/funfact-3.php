<?php
// Create a funfact section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => 'Funfact Section',
    'fields' => array(
        array(
            'id'    => 'v3-funfact-p',
            'type'  => 'text',
            'title' => 'Short Title',
            'default' => 'Project Completed',
        ),
        array(
            'id'    => 'v3-funfact-h1',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Project Completed',
        ),
        array(
            'id'    => 'v3-funfact-des',
            'type'  => 'textarea',
            'title' => 'Description',
            'default' => 'Project Completed',
        ),
        array(
            'id'    => 'v3-funfact-btn',
            'type'  => 'link',
            'title' => 'Button Title & Link',
        ),
        array(
            'id'    => 'v3-funfact-btn-icon',
            'type'  => 'icon',
            'title' => 'Button Icon',
        ),
        array(
            'id'     => 'v3-funfact-box-rep',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'max'    => '4',
            'button_title' => 'Add Box',
            'fields' => array(
                array(
                    'id'    => 'v3-funfact-box-icon',
                    'type'  => 'icon',
                    'title' => 'Box Icon',
                ),
                array(
                    'id'    => 'v3-funfact-box-h3',
                    'type'  => 'number',
                    'title' => 'Number Count',
                    'default' => '368',
                ),
                array(
                    'id'    => 'v3-funfact-box-p',
                    'type'  => 'text',
                    'title' => 'Description',
                    'default' => 'Project Completed',
                ),
            ),
        ),
    )
) );