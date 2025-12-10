<?php
// Create a feature section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Feature Section',
    'fields' => array(
        array(
            'id'    => 'v2-feature-icon-rep',
            'type'  => 'repeater',
            'title' => 'Feature Icons',
            'max'   => '9',
            'button_title' => 'Add Icon',
            'fields' => array(
                array(
                    'id'    => 'v2-feature-box-icon',
                    'type'  => 'icon',
                    'title' => 'Box Icon',
                    'default' => 'icon-arrow-right-1',
                ),
                array(
                    'id'    => 'v2-feature-box-link',
                    'type'  => 'link',
                    'title' => 'Button Link',
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'    => 'v2-feature-top-title',
            'type'  => 'text',
            'title' => 'Top Text',
        ),
        array(
            'id'    => 'v2-feature-h1',
            'type'  => 'text',
            'title' => 'Main Title',
        ),
        array(
            'id'    => 'v2-feature-p',
            'type'  => 'text',
            'title' => 'Description',
        ),
        array(
            'id'    => 'v2-feature-btn',
            'type'  => 'link',
            'title' => 'Button Link',
            'default' => '#',
        ),
        array(
            'id'    => 'v2-feature-btn-icon',
            'type'  => 'icon',
            'title' => 'Button Icon',
            'default' => 'flaticon flaticon-monitor',
        ),
    )
) );