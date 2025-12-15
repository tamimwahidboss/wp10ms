<?php

// Attached home page section design selected csf functions file
include_once get_template_directory() . '/inc/csf-functions/theme-settings/home-settings.php';

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'wp10ms_options';
    
    // Retrieve the csf saved option value
    $options = get_option( 'wp10ms_options' );

    // Create theme options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'WP10MS Options',
        'menu_slug'  => 'wp10ms-options',
        'framework_title' => 'WP10MS THEME OPTIONS',
        'menu_icon' => 'dashicons-sort',
        'menu_position' => '1',
        'show_in_customizer' => true,
        'footer_text' => 'Thank you for choosing WP10MS THEME develop by A.A. WAHID',
        // 'footer_after' => 'footer_after',
    ) );

    // Create a header main-tab
    CSF::createSection( $prefix, array(
        'id'    => 'header-section',
        'title' => 'Header',
        'icon' => 'fas fa-window-restore',
    ) );

    // Create a header settings
    CSF::createSection( $prefix, array(
        'parent' => 'header-section',
        'title'  => 'Header Settings',
        'fields' => array(
            array(
                'type'    => 'notice',
                'style'   => 'warning',
                'content' => 'You can get related options by saving and refreshing the page',
                // 'dependency' => array( 'header-select', '==', 'header-5' ),
            ),
            array(
                'id'          => 'header-select',
                'type'        => 'select',
                'title'       => 'Select Header Design',
                'placeholder' => 'Select an option',
                'options'     => array(
                    'header-1'  => 'Header 1',
                    'header-2'  => 'Header 2',
                    'header-3'  => 'Header 3',
                    'header-4'  => 'Header 4',
                ),
                'default'     => 'header-4',
            ),
        ),
    ));
    
    // This is header selection area. Ensure that 'header-*' is selected before creating a subsection
    if ( isset( $options['header-select'] ) && $options['header-select'] === 'header-1' ) {
        // Attached header 1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/header-sections/header-1.php';

    } elseif ( isset( $options['header-select'] ) && $options['header-select'] === 'header-2' ) {
        // Attached header 5 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/header-sections/header-2.php';

    } elseif ( isset( $options['header-select'] ) && $options['header-select'] === 'header-3' ) {
        // Attached header 5 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/header-sections/header-3.php';

    } elseif ( isset( $options['header-select'] ) && $options['header-select'] === 'header-4' ) {
        // Attached header 5 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/header-sections/header-4.php';

    }

    // Create a global settings tab
    CSF::createSection( $prefix, array(
        'id'    => 'global',
        'title' => 'Global',
        'icon'  => 'fas fa-globe',
    ) );

    // Declare the selected csf function files.
    CSF::createSection( $prefix, array(
        'parent' => 'global',
        'title'  => 'Global Settings',
        'fields' => array_merge(
            wp10ms_csf_brand_select_func(),
            wp10ms_contact_select_func(),
            wp10ms_csf_cta_select_func(),
        ),
    ) );

    // Attached brand section csf code file path.
    if ( isset( $options['brand-select'] ) && $options['brand-select'] === 'brand-1' ) {
        // Attached brand-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/brand-sections/brand-1.php';
    } elseif ( isset( $options['brand-select'] ) && $options['brand-select'] === 'brand-2' ) {
        // Attached brand-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/brand-sections/brand-2.php';
    }

    // Attached contact section csf code file path.
    if ( isset( $options['contact-select'] ) && $options['contact-select'] === 'contact-1' ) {
        // Attached contact-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/contact-sections/contact-1.php';
    } elseif ( isset( $options['contact-select'] ) && $options['contact-select'] === 'contact-2' ) {
        // Attached contact-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/contact-sections/contact-2.php';
    } elseif ( isset( $options['contact-select'] ) && $options['contact-select'] === 'contact-3' ) {
        // Attached contact-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/contact-sections/contact-3.php';
    }

    // Attached cta section csf code file path.
    if ( isset( $options['cta-select'] ) && $options['cta-select'] === 'cta-1' ) {
        // Attached cta-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/cta-sections/cta-1.php';
    } elseif ( isset( $options['cta-select'] ) && $options['cta-select'] === 'cta-2' ) {
        // Attached cta-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/cta-sections/cta-2.php';
    }

    // Attached global>breadcrumb csf code file path.
    include_once get_template_directory() . '/inc/csf-functions/global-elements/breadcrumb.php';

    /**
     * Create a home page tab
     * Create and add a home settings tab functions
     * Include a home page for all sections and give the option to change an sections design
     */
    CSF::createSection( $prefix, array(
        'id'    => 'home-page',
        'title' => 'Templates',
        'icon'  => 'fas fa-home',
    ) );

    // Declare the selected csf function files.
    CSF::createSection( $prefix, array(
        'parent' => 'home-page',
        'title'  => 'Template Settings',
        'priority' => 1,
        'fields' => array_merge(
            wp10ms_csf_hero_select_func(),
            wp10ms_csf_feature_select_func(),
            wp10ms_csf_about_select_func(),
            wp10ms_csf_service_select_func(),
            wp10ms_csf_process_select_func(),
            wp10ms_csf_funfact_select_func(),
            wp10ms_csf_faq_select_func(),
            wp10ms_csf_team_select_func(),
            wp10ms_csf_project_select_func(),
            wp10ms_csf_pricing_select_func(),
            wp10ms_csf_testimonial_select_func(),
            wp10ms_csf_blog_select_func(),
        ),
    ) );

    // This is hero selection area. Ensure that 'hero-*' is selected before creating a subsection
    if ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-1' ) {
        // Attached hero 1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/hero-sections/hero-1.php';

    } elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-2' ) {
        // Attached hero-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/hero-sections/hero-2.php';

    } elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-3' ) {
        // Attached hero-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/hero-sections/hero-3.php';

    } elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-4' ) {
        // Attached hero-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/hero-sections/hero-4.php';

    } elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-5' ) {
        // Attached hero-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/hero-sections/hero-5.php';

    } elseif ( isset( $options['hero-select'] ) && $options['hero-select'] === 'hero-6' ) {
        // Attached hero-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/hero-sections/hero-6.php';

    }


    // Attached feature-section csf code file path.
    if ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-1' ) {
        include_once get_template_directory() . '/inc/csf-functions/feature-sections/feature-1.php';
    } elseif ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-2' ) {
        include_once get_template_directory() . '/inc/csf-functions/feature-sections/feature-2.php';
    } elseif ( isset( $options['feature-select'] ) && $options['feature-select'] === 'feature-3' ) {
        include_once get_template_directory() . '/inc/csf-functions/feature-sections/feature-3.php';
    }


    // Attached about-us section csf code file path.
    if ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-1' ) {
        include_once get_template_directory() . '/inc/csf-functions/about-sections/about-us-1.php';
    } elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-2' ) {
        // Attached about-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/about-sections/about-us-2.php';
    } elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-3' ) {
        // Attached about-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/about-sections/about-us-3.php';
    } elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-4' ) {
        // Attached about-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/about-sections/about-us-4.php';
    } elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-5' ) {
        // Attached about-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/about-sections/about-us-5.php';
    } elseif ( isset( $options['about-select'] ) && $options['about-select'] === 'about-us-6' ) {
        // Attached about-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/about-sections/about-us-6.php';
    }


    // Attached service section csf code file path.
    if ( isset( $options['service-select'] ) && $options['service-select'] === 'service-1' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-1.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-2' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-2.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-3' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-3.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-4' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-4.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-5' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-5.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-6' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-6.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-7' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-7.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-8' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-8.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-9' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-9.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-10' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-10.php';
    } elseif ( isset( $options['service-select'] ) && $options['service-select'] === 'service-11' ) {
        // Attached service-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/service-sections/service-11.php';
    }

    // Attached project section csf code file path.
    if ( isset( $options['project-select'] ) && $options['project-select'] === 'project-1' ) {
        // Attached project-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/project-sections/project-1.php';
    } elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-2' ) {
        // Attached project-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/project-sections/project-2.php';
    } elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-3' ) {
        // Attached project-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/project-sections/project-3.php';
    } elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-4' ) {
        // Attached project-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/project-sections/project-4.php';
    } elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-5' ) {
        // Attached project-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/project-sections/project-5.php';
    } elseif ( isset( $options['project-select'] ) && $options['project-select'] === 'project-6' ) {
        // Attached project-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/project-sections/project-6.php';
    }

    // Attached pricing section csf code file path.
    if ( isset( $options['pricing-select'] ) && $options['pricing-select'] === 'pricing-1' ) {
        // Attached pricing-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/pricing-sections/pricing-1.php';
    } elseif ( isset( $options['pricing-select'] ) && $options['pricing-select'] === 'pricing-2' ) {
        // Attached pricing-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/pricing-sections/pricing-2.php';
    } elseif ( isset( $options['pricing-select'] ) && $options['pricing-select'] === 'pricing-3' ) {
        // Attached pricing-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/pricing-sections/pricing-3.php';
    }

    // Attached testimonial section csf code file path.
    if ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-1' ) {
        // Attached testimonial-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/testimonial-sections/testimonial-1.php';
    } elseif ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-2' ) {
        // Attached testimonial-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/testimonial-sections/testimonial-2.php';
    } elseif ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-3' ) {
        // Attached testimonial-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/testimonial-sections/testimonial-3.php';
    } elseif ( isset( $options['testimonial-select'] ) && $options['testimonial-select'] === 'testimonial-4' ) {
        // Attached testimonial-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/testimonial-sections/testimonial-4.php';
    }

    // Attached blog section csf code file path.
    if ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-1' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-1.php';
    } elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-2' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-2.php';
    } elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-3' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-3.php';
    } elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-4' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-4.php';
    } elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-5' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-5.php';
    } elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-6' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-6.php';
    } elseif ( isset( $options['blog-select'] ) && $options['blog-select'] === 'blog-7' ) {
        // Attached blog-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/blog-sections/blog-7.php';
    }

    // Attached process section csf code file path.
    if ( isset( $options['process-select'] ) && $options['process-select'] === 'process-1' ) {
        // Attached process-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/process-sections/process-1.php';
    } elseif ( isset( $options['process-select'] ) && $options['process-select'] === 'process-2' ) {
        // Attached process-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/process-sections/process-2.php';
    } elseif ( isset( $options['process-select'] ) && $options['process-select'] === 'process-3' ) {
        // Attached process-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/process-sections/process-3.php';
    }

    // Attached funfact section csf code file path.
    if ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-1' ) {
        // Attached funfact-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-1.php';
    } elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-2' ) {
        // Attached funfact-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-2.php';
    } elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-3' ) {
        // Attached funfact-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-3.php';
    } elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-4' ) {
        // Attached funfact-section-6 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-4.php';
    }

    // Attached team section csf code file path.
    if ( isset( $options['team-select'] ) && $options['team-select'] === 'team-1' ) {
        // Attached team-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/team-sections/team-1.php';
    } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-2' ) {
        // Attached team-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/team-sections/team-2.php';
    } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-3' ) {
        // Attached team-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/team-sections/team-3.php';
    } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-4' ) {
        // Attached team-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/team-sections/team-4.php';
    } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-5' ) {
        // Attached team-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/team-sections/team-5.php';
    }

    // Attached faq section csf code file path.
    if ( isset( $options['faq-select'] ) && $options['faq-select'] === 'faq-1' ) {
        // Attached faq-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/faq-sections/faq-1.php';
    } elseif ( isset( $options['faq-select'] ) && $options['faq-select'] === 'faq-2' ) {
        // Attached faq-section-1 csf code file path.
        include_once get_template_directory() . '/inc/csf-functions/faq-sections/faq-2.php';
    }

    // // Create a About page
    // CSF::createSection( $prefix, array(
    //     'title' => 'About Page',
    //     'id'    => 'about-page',
    //     'icon'  => 'fas fa-pager',
    // ) );

    // // Declare the selected csf function files.
    // CSF::createSection( $prefix, array(
    //     'parent' => 'about-page',
    //     'title'  => 'About Settings',
    //     'priority' => 1,
    //     'fields' => array_merge(
    //         wp10ms_csf_team_select_func(),
    //         wp10ms_csf_faq_select_func(),
    //         wp10ms_csf_process_select_func(),
    //         wp10ms_csf_funfact_select_func(),
    //     ),
    // ) );

    // // Attached team section csf code file path.
    // if ( isset( $options['team-select'] ) && $options['team-select'] === 'team-1' ) {
    //     // Attached team-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/team-sections/team-1.php';
    // } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-2' ) {
    //     // Attached team-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/team-sections/team-2.php';
    // } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-3' ) {
    //     // Attached team-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/team-sections/team-3.php';
    // } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-4' ) {
    //     // Attached team-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/team-sections/team-4.php';
    // } elseif ( isset( $options['team-select'] ) && $options['team-select'] === 'team-5' ) {
    //     // Attached team-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/team-sections/team-5.php';
    // }

    // // Attached faq section csf code file path.
    // if ( isset( $options['faq-select'] ) && $options['faq-select'] === 'faq-1' ) {
    //     // Attached faq-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/faq-sections/faq-1.php';
    // } elseif ( isset( $options['faq-select'] ) && $options['faq-select'] === 'faq-2' ) {
    //     // Attached faq-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/faq-sections/faq-2.php';
    // }


    // // Attached process section csf code file path.
    // if ( isset( $options['process-select'] ) && $options['process-select'] === 'process-1' ) {
    //     // Attached process-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/process-sections/process-1.php';
    // } elseif ( isset( $options['process-select'] ) && $options['process-select'] === 'process-2' ) {
    //     // Attached process-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/process-sections/process-2.php';
    // } elseif ( isset( $options['process-select'] ) && $options['process-select'] === 'process-3' ) {
    //     // Attached process-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/process-sections/process-3.php';
    // }



    // // Attached funfact section csf code file path.
    // if ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-1' ) {
    //     // Attached funfact-section-1 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-1.php';
    // } elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-2' ) {
    //     // Attached funfact-section-6 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-2.php';
    // } elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-3' ) {
    //     // Attached funfact-section-6 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-3.php';
    // } elseif ( isset( $options['funfact-select'] ) && $options['funfact-select'] === 'funfact-4' ) {
    //     // Attached funfact-section-6 csf code file path.
    //     include_once get_template_directory() . '/inc/csf-functions/funfact-sections/funfact-4.php';
    // }


    // Create a footer section
    CSF::createSection( $prefix, array(
        'title' => 'Footer',
        'id'    => 'footer-section',
        'icon'  => 'fas fa-window-maximize',
    ) );

    // Create a footer section
    CSF::createSection( $prefix, array(
        'parent' => 'footer-section',
        'title'  => 'Footer Section',
        'fields' => array(
            // Design Selected CSF Module
            array(
                'id'          => 'ft-select',
                'type'        => 'select',
                'title'       => 'Enable Footer Design',
                'placeholder' => 'Disable Footer',
                'options'     => array(
                    'ft-1'  => 'Enable Footer',
                ),
            ),
            // Footer copyright text
            array(
                'id'    => 'ft-cp-text',
                'type'  => 'text',
                'title' => 'Copyright Text',
                'default' => '© 2022-2024 WP10MS. All Rights Reserved',
            ),
        )
    ) );
  
}
  