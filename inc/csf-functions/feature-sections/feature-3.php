<?php
// Create a feature section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Feature Section',
    'fields' => array(
        array(
            'id'    => 'v3-feature-a',
            'type'  => 'text',
            'title' => 'Top Text',
        ),
        array(
            'id'    => 'v3-feature-h1',
            'type'  => 'text',
            'title' => 'Main Title',
        ),
        array(
            'id'    => 'v3-feature-box-rep',
            'type'  => 'repeater',
            'title' => 'Feature Box',
            'max'   => '8',
            'button_title' => 'Add Box',
            'fields' => array(
                array(
                    'id'    => 'v3-feature-box-img',
                    'type'  => 'media',
                    'title' => 'Box Icon',
                ),
                array(
                    'id'    => 'v3-feature-box-link',
                    'type'  => 'link',
                    'title' => 'Box Link',
                    'default' => '#',
                ),
                array(
                    'id'    => 'v3-feature-box-h3',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'v3-feature-box-p',
                    'type'  => 'text',
                    'title' => 'Description',
                ),
                array(
                    'id'    => 'v3-feature-btn-icon',
                    'type'  => 'icon',
                    'title' => 'Box Icon',
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    )
) );