<?php

// Create a global settings section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'Breadcrumb Section',
    'fields' => array(
        // Breadcrumb Banner
        array(
            'id'    => 'breadcrumb-banner',
            'type'  => 'media',
            'title' => 'Breadcrumb Banner',
        ),
    ),
) );