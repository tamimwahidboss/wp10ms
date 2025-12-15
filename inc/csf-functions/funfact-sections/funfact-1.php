<?php
// Create a funfact section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Funfact Section',
    'fields' => array(
        array(
            'id'     => 'v1-funfact-box-rep',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'max'    => '4',
            'button_title' => 'Add Box',
            'fields' => array(
                array(
                    'id'    => 'v1-funfact-box-icon',
                    'type'  => 'icon',
                    'title' => 'Icon',
                ),
                array(
                    'id'    => 'v1-funfact-box-h3',
                    'type'  => 'text',
                    'title' => 'Number',
                    'default' => '368',
                ),
                array(
                    'id'    => 'v1-funfact-box-p',
                    'type'  => 'text',
                    'title' => 'Description',
                    'default' => 'Project Completed',
                ),
            ),
        ),
    )
) );

    // // Create a funfact section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Funfact Section',
    //     'fields' => array(
    //         array(
    //             'id'     => 'v1-funfact-box-rep',
    //             'type'   => 'repeater',
    //             'title'  => 'Repeater',
    //             'max'   => '4',
    //             'button_title' => 'Add Box',
    //             'fields' => array(
    //                 array(
    //                     'id'    => 'v1-funfact-box-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Title',
    //                 ),
    //                 array(
    //                     'id'    => 'v1-funfact-box-h3',
    //                     'type'  => 'text',
    //                     'title' => 'Title',
    //                     'default' => '368',
    //                 ),
    //                 array(
    //                     'id'    => 'v1-funfact-box-p',
    //                     'type'  => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Project Completed',
    //                 ),
    //             ),
    //         ),
    //     )
    // ) );