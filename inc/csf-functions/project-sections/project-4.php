<?php
// Create a v4 project section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Project Section',
    'fields' => array(

        // Short Title
        array(
            'id'      => 'v4-project-p',
            'type'    => 'text',
            'title'   => 'Short Title',
            'default' => 'Our Recent Project',
        ),

        // Section Title
        array(
            'id'      => 'v4-project-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'Latest Case Studies',
        ),
    ),
) );