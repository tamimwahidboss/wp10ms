<?php
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => 'Team Section',
    'fields' => array(
        array(
            'id'      => 'v1-team-p',
            'type'    => 'text',
            'title'   => 'Section Subtitle',
            'default' => 'Meet Our Team',
        ),
        array(
            'id'      => 'v1-team-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'Can I Get Internet In My Area?',
        ),
        array(
            'id'      => 'v1-team-btn',
            'type'    => 'link',
            'title'   => 'Button Link',
            'default' => '#',
        ),
        array(
            'id'            => 'v1-team-rep',
            'type'          => 'repeater',
            'title'         => 'Team Members',
            'button_title'  => 'Add Team Member',
            'max'           => 8,
            'fields'        => array(
                array(
                    'id'      => 'v1-team-box-avatar',
                    'type'    => 'media',
                    'title'   => 'Avatar',
                    'default' => '#',
                ),
                array(
                    'id'      => 'v1-team-box-h4',
                    'type'    => 'text',
                    'title'   => 'Name',
                    'default' => 'John Doe',
                ),
                array(
                    'id'      => 'v1-team-box-p',
                    'type'    => 'textarea',
                    'title'   => 'Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin.',
                ),
                array(
                    'id'            => 'v1-team-soc-rep',
                    'type'          => 'repeater',
                    'title'         => 'Social Media Links',
                    'button_title'  => 'Add Social Media',
                    'max'           => 4,
                    'fields'        => array(
                        array(
                            'id'      => 'v1-team-socLink',
                            'type'    => 'link',
                            'title'   => 'Social Media Link',
                        ),
                        array(
                            'id'      => 'v1-team-box-icon',
                            'type'    => 'icon',
                            'title'   => 'Social Media Icon',
                            'default' => 'fas fa-envelope-open-text',
                        ),
                    ),
                ),
            ),
        ),
    ),
));