<?php
// Create a v6 project section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Project Section',
    'fields' => array(
        array(
            'id'      => 'v6-project-sec-h6',
            'type'    => 'text',
            'title'   => 'Add Title',
            'default' => 'Completed Projects',
        ),
        array(
            'id'      => 'v6-project-sec-h2',
            'type'    => 'text',
            'title'   => 'Add Title',
            'default' => 'We Have Successfully Completed One IT Solutions Project',
        ),
        array(
            'id'      => 'v6-project-sec-btn-text',
            'type'    => 'text',
            'title'   => 'Button Title',
            'default' => 'View All Work',
        ),
        array(
            'id'      => 'v6-project-sec-btn-link',
            'type'    => 'link',
            'title'   => 'Button Link',
            'default' => '#',
        ),
        array(
            'id'      => 'v6-project-sec-btn-icon',
            'type'    => 'icon',
            'title'   => 'Button Icon',
            'default' => 'icon-arrow-right-1',
        ),
    ),
) );