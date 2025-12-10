<?php
// Create a v1 blog section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Blog Section',
    'fields' => array(

        // Text field for section subtitle
        array(
            'id'      => 'v1-blog-sec-p',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Latest News & Blog',
        ),

        // Text field for section main title
        array(
            'id'      => 'v1-blog-sec-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Get Every Single Updates',
        ),
    ),
) );