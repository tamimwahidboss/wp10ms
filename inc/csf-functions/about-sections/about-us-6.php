<?php
// Create a v6 about section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'About Section',
    'fields' => array(

        // Media field for image upload
        array(
            'id'    => 'v6-about-sec-media',
            'type'  => 'media',
            'title' => 'Add Image',
        ),

        // Text field for H6 title
        array(
            'id'      => 'v6-about-sec-h6',
            'type'    => 'text',
            'title'   => 'Add Title',
            'default' => 'What we do',
        ),

        // Text field for H2 title
        array(
            'id'      => 'v6-about-sec-h2',
            'type'    => 'text',
            'title'   => 'Add Title',
            'default' => 'Digital data consulting for your Business Growth',
        ),

        // Textarea for description
        array(
            'id'      => 'v6-about-sec-des',
            'type'    => 'textarea',
            'title'   => 'Description',
            'default' => 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.',
        ),

        // Text field for button text
        array(
            'id'      => 'v6-about-sec-btn-text',
            'type'    => 'text',
            'title'   => 'Add Button Text',
            'default' => 'Know us more',
        ),

        // Link field for button link
        array(
            'id'      => 'v6-about-sec-btn-link',
            'type'    => 'link',
            'title'   => 'Add Button Link',
            'default' => '#',
        ),

        // Icon field for button icon
        array(
            'id'      => 'v6-about-sec-btn-icon',
            'type'    => 'icon',
            'title'   => 'Add Button Icon',
            'default' => 'icon-arrow-right-1',
        ),
    ),
) );