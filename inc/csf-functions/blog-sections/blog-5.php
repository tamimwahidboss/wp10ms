<?php
// Create a v5 blog section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Blog Section',
    'fields' => array(

        // Text field for section subtitle
        array(
            'id'      => 'v5-blog-sec-h6',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'ARTICLES & TIPES',
        ),

        // Text field for section main title
        array(
            'id'      => 'v5-blog-sec-h2',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Get Every Single Updates',
        ),
    ),
) );