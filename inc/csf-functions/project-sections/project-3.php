<?php
// Create a v3 project section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Project Section',
    'fields' => array(

        // Short Title
        array(
            'id'      => 'v3-project-p',
            'type'    => 'text',
            'title'   => 'Short Title',
            'default' => 'Our Recent Project',
        ),

        // Section Title
        array(
            'id'      => 'v3-project-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'Latest Case Studies',
        ),
    ),
) );