<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Team Section',
    'fields' => array(
        array(
            'id'      => 'v4-team-p',
            'type'    => 'text',
            'title'   => 'Section Name',
            'default' => 'Exclusive Members',
        ),
        array(
            'id'      => 'v4-team-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Meet Our Experienced Team Members',
        ),
        array(
            'id'            => 'v4-team-box-rep',
            'type'          => 'repeater',
            'title'         => 'Team Member',
            'button_title'  => 'Add Member',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v4-team-box-img',
                    'type'    => 'media',
                    'title'   => 'Member Avatar',
                ),
                array(
                    'id'      => 'v4-team-box-h4',
                    'type'    => 'text',
                    'title'   => 'Name',
                    'default' => 'Wallace S. Camacho',
                ),
                array(
                    'id'      => 'v4-team-box-p',
                    'type'    => 'text',
                    'title'   => 'Profession',
                    'default' => 'Business Manager',
                ),
                array(
                    'id'            => 'v4-team-social-rep',
                    'type'          => 'repeater',
                    'title'         => 'Social',
                    'button_title'  => 'Add Link',
                    'max'           => 4,
                    'fields'        => array(
                        array(
                            'id'      => 'v4-team-social-icon',
                            'type'    => 'icon',
                            'title'   => 'Icon',
                            'default' => 'fab fa-facebook-f',
                        ),
                        array(
                            'id'      => 'v4-team-social-link',
                            'type'    => 'link',
                            'title'   => 'Social Link',
                            'default' => '#',
                        ),
                    ),
                ),
            ),
        ),
    ),
));