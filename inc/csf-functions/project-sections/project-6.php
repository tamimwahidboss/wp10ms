<?php
// Control core classes to avoid errors
if ( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'wp10ms_metabox';

  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => 'Project Options',
    'post_type' => 'project',
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Project Details',
    'fields' => array(
      array(
        'id'           => 'v6-project-img-rep',
        'type'         => 'repeater',
        'title'        => 'Project Showcase',
        'max'          => 4,
        'button_title' => 'Add More',
        'fields'       => array(
          array(
            'id'    => 'v6-project-img',
            'type'  => 'media',
            'title' => 'Project Showcase Image',
          ),
        ),
      ),
      array(
        'id'    => 'v6-project-data-1',
        'type'  => 'text',
        'title' => 'Client Name',
        'default' => 'Robert C. Saavedra',
      ),
      array(
        'id'    => 'v6-project-data-2',
        'type'  => 'text',
        'title' => 'Project Name',
        'default' => 'Project Title',
      ),
      array(
        'id'    => 'v6-project-data-3',
        'type'  => 'text',
        'title' => 'Service Type',
        'default' => 'Service Description',
      ),
      array(
        'id'    => 'v6-project-data-4',
        'type'  => 'select',
        'title' => 'Category',
        'taxonomy' => 'project-category',
        'options'  => 'project-category',
        'default'  => 'Default Category',
      ),
      array(
        'id'    => 'v6-project-data-5',
        'type'  => 'date',
        'title' => 'Project Date',
      ),
    ),
  ) );

}