<?php
// Create a v3 blog section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Blog Section',
    'fields' => array(

        // Text field for section subtitle
        array(
            'id'      => 'v3-blog-p',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Latest News & Blog',
        ),

        // Text field for section main title
        array(
            'id'      => 'v3-blog-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Get Every Single Updates',
        ),
    ),
) );