<?php
// Create a funfact section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Funfact Section',
    'fields' => array(
        array(
            'id'     => 'v2-funfact-box-rep',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'max'    => '4',
            'button_title' => 'Add Box',
            'fields' => array(
                array(
                    'id'    => 'v2-funfact-box-icon',
                    'type'  => 'icon',
                    'title' => 'Icon',
                ),
                array(
                    'id'    => 'v2-funfact-box-h3',
                    'type'  => 'number',
                    'title' => 'Number Count',
                    'default' => '368',
                ),
                array(
                    'id'    => 'v2-funfact-box-p',
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
//             'id'     => 'v2-funfact-box-rep',
//             'type'   => 'repeater',
//             'title'  => 'Repeater',
//             'max'   => '4',
//             'button_title' => 'Add Box',
//             'fields' => array(
//                 array(
//                     'id'    => 'v2-funfact-box-icon',
//                     'type'  => 'icon',
//                     'title' => 'Title',
//                 ),
//                 array(
//                     'id'    => 'v2-funfact-box-h3',
//                     'type'  => 'number',
//                     'title' => 'Number Count',
//                     'default' => '368',
//                 ),
//                 array(
//                     'id'    => 'v2-funfact-box-p',
//                     'type'  => 'text',
//                     'title' => 'Title',
//                     'default' => 'Project Completed',
//                 ),
//             ),
//         ),
//     )
// ) );