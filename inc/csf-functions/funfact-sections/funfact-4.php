<?php
// Create a v4 count bar section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Count Bar Section',
    'fields' => array(
        array(
            'id'            => 'v4-count-sec-rep',
            'type'          => 'repeater',
            'title'         => 'Add Count Bar',
            'max'           => '4',
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v4-count-sec-h3',
                    'type'  => 'text',
                    'title' => 'Count',
                    'default' => '320',
                ),
                array(
                    'id'    => 'v4-count-sec-p',
                    'type'  => 'text',
                    'title' => 'Title',
                    'default' => 'Project Completed',
                ),
            ),
        ),
    ),
) );