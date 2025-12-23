<?php
/**
 * This is home settings options.
 */

// CSF hero section select function
function wp10ms_csf_hero_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'type'    => 'notice',
            'style'   => 'warning',
            'content' => 'You can get design related dynamic options by saving and refreshing the page',
        ),
        array(
            'id'          => 'hero-select',
            'type'        => 'select',
            'title'       => 'Select Hero Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'hero-1'  => 'Hero v1',
                'hero-2'  => 'Hero v2',
                'hero-3'  => 'Hero v3',
                'hero-4'  => 'Hero v4',
                'hero-5'  => 'Hero v5',
                'hero-6'  => 'Hero v6',
            ),
            'default'     => 'hero-5',
        ),
    );
}

// CSF features section select function
function wp10ms_csf_feature_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'feature-select',
            'type'        => 'select',
            'title'       => 'Select Feature Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'feature-1'  => 'Feature v1',
                'feature-2'  => 'Feature v2',
                'feature-3'  => 'Feature v3',
            ),
            'default'     => 'feature-3',
        ),
    );
}

// CSF about section select function
function wp10ms_csf_about_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'about-select',
            'type'        => 'select',
            'title'       => 'Select about Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'about-us-1'  => 'About v1',
                'about-us-2'  => 'About v2',
                'about-us-3'  => 'About v3',
                'about-us-4'  => 'About v4',
                'about-us-5'  => 'About v5',
                'about-us-6'  => 'About v6',
            ),
            'default'     => 'about-us-2',
        ),
    );
}

// CSF service section select function
function wp10ms_csf_service_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'service-select',
            'type'        => 'select',
            'title'       => 'Select service Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'service-1'  => 'service v1',
                'service-2'  => 'service v2',
                'service-3'  => 'service v3',
                'service-4'  => 'service v4',
                'service-5'  => 'service v5',
                'service-6'  => 'service v6',
                'service-7'  => 'service v7',
                'service-8'  => 'service v8',
                'service-9'  => 'service v9',
                'service-10'  => 'service v10',
            ),
            'default'     => 'service-6',
        ),
    );
}

// CSF process section select function
function wp10ms_csf_process_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'process-select',
            'type'        => 'select',
            'title'       => 'Select process Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'process-1'  => 'process v1',
                'process-2'  => 'process v2',
                'process-3'  => 'process v3',
            ),
        ),
    );
}

// CSF funfact section select function
function wp10ms_csf_funfact_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'funfact-select',
            'type'        => 'select',
            'title'       => 'Select funfact Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'funfact-1'  => 'funfact v1',
                'funfact-2'  => 'funfact v2',
                'funfact-3'  => 'funfact v3',
                'funfact-4'  => 'funfact v4',
            ),
        ),
    );
}

// CSF faq section select function
function wp10ms_csf_faq_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'faq-select',
            'type'        => 'select',
            'title'       => 'Select faq Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'faq-1'  => 'faq v1',
                'faq-2'  => 'faq v2',
            ),
        ),
    );
}

// CSF team section select function
function wp10ms_csf_team_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'team-select',
            'type'        => 'select',
            'title'       => 'Select team Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'team-1'  => 'team v1',
                'team-2'  => 'team v2',
                'team-3'  => 'team v3',
                'team-4'  => 'team v4',
                'team-5'  => 'team v5',
            ),
        ),
    );
}

// CSF project section select function
function wp10ms_csf_project_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'project-select',
            'type'        => 'select',
            'title'       => 'Select project Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'project-1'  => 'project v1',
                'project-2'  => 'project v2',
                'project-3'  => 'project v3',
                'project-4'  => 'project v4',
                'project-5'  => 'project v5',
                // 'project-6'  => 'project v6',
            ),
            'default'     => 'project-4',
        ),
    );
}

// CSF brands section select function
function wp10ms_csf_brand_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'brand-select',
            'type'        => 'select',
            'title'       => 'Select Brand Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'brand-1'  => 'Brand v1',
                'brand-2'  => 'Brand v2',
            ),
        ),
    );
}

// CSF pricing section select function
function wp10ms_csf_pricing_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'pricing-select',
            'type'        => 'select',
            'title'       => 'Select pricing Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'pricing-1'  => 'pricing v1',
                'pricing-2'  => 'pricing v2',
                'pricing-3'  => 'pricing v3',
            ),
        ),
    );
}

// CSF testimonial section select function
function wp10ms_csf_testimonial_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'testimonial-select',
            'type'        => 'select',
            'title'       => 'Select testimonial Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'testimonial-1'  => 'testimonial v1',
                'testimonial-2'  => 'testimonial v2',
                'testimonial-3'  => 'testimonial v3',
                'testimonial-4'  => 'testimonial v4',
            ),
            'default'     => 'testimonial-3',
        ),
    );
}

// CSF blog section select function
function wp10ms_csf_blog_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'blog-select',
            'type'        => 'select',
            'title'       => 'Select blog Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'blog-1'  => 'blog v1',
                'blog-2'  => 'blog v2',
                'blog-3'  => 'blog v3',
                'blog-4'  => 'blog v4',
                'blog-5'  => 'blog v5',
                // 'blog-6'  => 'blog v6',
                // 'blog-7'  => 'blog v7',
            ),
            'default'     => 'blog-4',
        ),
    );
}

// CSF contact section select function
function wp10ms_contact_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'contact-select',
            'type'        => 'select',
            'title'       => 'Select contact Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'contact-1'  => 'contact v1',
                'contact-2'  => 'contact v2',
                'contact-3'  => 'contact v3',
            ),
        ),
    );
}

// CSF cta section select function
function wp10ms_csf_cta_select_func() {
    return array(
        // Design Selected CSF Module
        array(
            'id'          => 'cta-select',
            'type'        => 'select',
            'title'       => 'Select cta Design',
            'placeholder' => 'Section Hide',
            'options'     => array(
                'cta-1'  => 'cta v1',
                'cta-2'  => 'cta v2',
            ),
        ),
    );
}

