<?php
// Create a v2 project section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Project Section',
    'fields' => array(

        // Section Name
        array(
            'id'      => 'v2-project-span',
            'type'    => 'text',
            'title'   => 'Section Name',
            'default' => 'Project',
        ),

        // Short Title
        array(
            'id'      => 'v2-project-p',
            'type'    => 'text',
            'title'   => 'Short Title',
            'default' => 'Our Recent Project',
        ),

        // Section Title
        array(
            'id'      => 'v2-project-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'Latest Case Studies',
        ),
    ),
) );