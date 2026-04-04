<?php
/**
 * File: /inc/csf-metabox.php
 * Codestar Framework Metabox Configuration
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Existing project metabox include
include_once get_template_directory() . '/inc/csf-functions/project-sections/project-6.php';

/**
 * Service CPT Metabox Configuration
 */
if ( class_exists( 'CSF' ) ) {
    
    $prefix = 'wp10ms_service_meta';
    
    // Create a metabox
    CSF::createMetabox( $prefix, array(
        'title'     => __( 'Service Details', 'wp10ms' ),
        'post_type' => 'service',
        'priority'  => 'high',
        'context'   => 'normal',
    ));
    
    // ==========================================
    // SERVICE PRICING SECTION
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Pricing Information', 'wp10ms' ),
        'icon'   => 'fa fa-dollar-sign',
        'fields' => array(
            
            array(
                'id'          => 'service_price',
                'type'        => 'text',
                'title'       => __( 'Service Price', 'wp10ms' ),
                'placeholder' => __( 'e.g., $99 or Starting at $199', 'wp10ms' ),
                'sanitize'    => 'sanitize_text_field',
                // 'validate'    => 'csf_validate_numeric_or_text',
            ),
            
            array(
                'id'      => 'price_type',
                'type'    => 'select',
                'title'   => __( 'Price Type', 'wp10ms' ),
                'options' => array(
                    'fixed'    => __( 'Fixed Price', 'wp10ms' ),
                    'hourly'   => __( 'Hourly Rate', 'wp10ms' ),
                    'project'  => __( 'Per Project', 'wp10ms' ),
                    'custom'   => __( 'Custom Pricing', 'wp10ms' ),
                ),
                'default' => 'fixed',
            ),
            
            array(
                'id'          => 'service_duration',
                'type'        => 'text',
                'title'       => __( 'Service Duration', 'wp10ms' ),
                'placeholder' => __( 'e.g., 2-3 weeks, 6 months', 'wp10ms' ),
                'sanitize'    => 'sanitize_text_field',
            ),
            
            array(
                'id'      => 'show_pricing',
                'type'    => 'switcher',
                'title'   => __( 'Display Pricing on Page', 'wp10ms' ),
                'default' => true,
            ),
            
        )
    ));
    
    // ==========================================
    // SERVICE FEATURES SECTION
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Service Features', 'wp10ms' ),
        'icon'   => 'fa fa-list-ul',
        'fields' => array(
            
            array(
                'id'          => 'service_features',
                'type'        => 'group',
                'title'       => __( 'Features List', 'wp10ms' ),
                'button_title' => __( 'Add New Feature', 'wp10ms' ),
                'fields'      => array(
                    
                    array(
                        'id'          => 'feature_icon',
                        'type'        => 'icon',
                        'title'       => __( 'Feature Icon', 'wp10ms' ),
                        'default'     => 'fa fa-check',
                    ),
                    
                    array(
                        'id'          => 'feature_title',
                        'type'        => 'text',
                        'title'       => __( 'Feature Title', 'wp10ms' ),
                        'placeholder' => __( 'e.g., 24/7 Support', 'wp10ms' ),
                        'sanitize'    => 'sanitize_text_field',
                    ),
                    
                    array(
                        'id'          => 'feature_description',
                        'type'        => 'textarea',
                        'title'       => __( 'Feature Description', 'wp10ms' ),
                        'placeholder' => __( 'Describe this feature...', 'wp10ms' ),
                        'sanitize'    => 'wp_kses_post',
                    ),
                    
                    array(
                        'id'      => 'feature_highlight',
                        'type'    => 'switcher',
                        'title'   => __( 'Highlight This Feature', 'wp10ms' ),
                        'default' => false,
                    ),
                    
                ),
            ),
            
        )
    ));
    
    // ==========================================
    // SERVICE PROCESS/WORKFLOW SECTION
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Service Process', 'wp10ms' ),
        'icon'   => 'fa fa-tasks',
        'fields' => array(
            
            array(
                'id'          => 'service_process',
                'type'        => 'group',
                'title'       => __( 'Process Steps', 'wp10ms' ),
                'button_title' => __( 'Add Process Step', 'wp10ms' ),
                'fields'      => array(
                    
                    array(
                        'id'          => 'step_number',
                        'type'        => 'number',
                        'title'       => __( 'Step Number', 'wp10ms' ),
                        'default'     => 1,
                    ),
                    
                    array(
                        'id'          => 'step_title',
                        'type'        => 'text',
                        'title'       => __( 'Step Title', 'wp10ms' ),
                        'placeholder' => __( 'e.g., Initial Consultation', 'wp10ms' ),
                        'sanitize'    => 'sanitize_text_field',
                    ),
                    
                    array(
                        'id'          => 'step_description',
                        'type'        => 'wp_editor',
                        'title'       => __( 'Step Description', 'wp10ms' ),
                        'sanitize'    => 'wp_kses_post',
                    ),
                    
                    array(
                        'id'    => 'step_icon',
                        'type'  => 'icon',
                        'title' => __( 'Step Icon', 'wp10ms' ),
                    ),
                    
                ),
            ),
            
        )
    ));
    
    // ==========================================
    // DELIVERABLES SECTION
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Deliverables', 'wp10ms' ),
        'icon'   => 'fa fa-gift',
        'fields' => array(
            
            array(
                'id'          => 'service_deliverables',
                'type'        => 'repeater',
                'title'       => __( 'What Client Gets', 'wp10ms' ),
                'button_title' => __( 'Add Deliverable', 'wp10ms' ),
                'fields'      => array(
                    
                    array(
                        'id'          => 'deliverable_item',
                        'type'        => 'text',
                        'title'       => __( 'Deliverable', 'wp10ms' ),
                        'placeholder' => __( 'e.g., Complete source code', 'wp10ms' ),
                        'sanitize'    => 'sanitize_text_field',
                    ),
                    
                ),
            ),
            
        )
    ));
    
    // ==========================================
    // FAQ SECTION
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Service FAQ', 'wp10ms' ),
        'icon'   => 'fa fa-question-circle',
        'fields' => array(
            
            array(
                'id'          => 'service_faq',
                'type'        => 'group',
                'title'       => __( 'Frequently Asked Questions', 'wp10ms' ),
                'button_title' => __( 'Add FAQ', 'wp10ms' ),
                'fields'      => array(
                    
                    array(
                        'id'          => 'faq_question',
                        'type'        => 'text',
                        'title'       => __( 'Question', 'wp10ms' ),
                        'sanitize'    => 'sanitize_text_field',
                    ),
                    
                    array(
                        'id'       => 'faq_answer',
                        'type'     => 'wp_editor',
                        'title'    => __( 'Answer', 'wp10ms' ),
                        'sanitize' => 'wp_kses_post',
                    ),
                    
                ),
            ),
            
        )
    ));
    
    // ==========================================
    // CALL TO ACTION SECTION
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Call to Action', 'wp10ms' ),
        'icon'   => 'fa fa-bullhorn',
        'fields' => array(
            
            array(
                'id'      => 'enable_cta',
                'type'    => 'switcher',
                'title'   => __( 'Enable CTA Section', 'wp10ms' ),
                'default' => true,
            ),
            
            array(
                'id'          => 'cta_title',
                'type'        => 'text',
                'title'       => __( 'CTA Title', 'wp10ms' ),
                'default'     => __( 'Ready to Get Started?', 'wp10ms' ),
                'dependency'  => array( 'enable_cta', '==', 'true' ),
                'sanitize'    => 'sanitize_text_field',
            ),
            
            array(
                'id'          => 'cta_description',
                'type'        => 'textarea',
                'title'       => __( 'CTA Description', 'wp10ms' ),
                'dependency'  => array( 'enable_cta', '==', 'true' ),
                'sanitize'    => 'wp_kses_post',
            ),
            
            array(
                'id'          => 'cta_button_text',
                'type'        => 'text',
                'title'       => __( 'Button Text', 'wp10ms' ),
                'default'     => __( 'Contact Us', 'wp10ms' ),
                'dependency'  => array( 'enable_cta', '==', 'true' ),
                'sanitize'    => 'sanitize_text_field',
            ),
            
            array(
                'id'          => 'cta_button_url',
                'type'        => 'text',
                'title'       => __( 'Button URL', 'wp10ms' ),
                'placeholder' => __( 'https://example.com/contact', 'wp10ms' ),
                'dependency'  => array( 'enable_cta', '==', 'true' ),
                'sanitize'    => 'esc_url_raw',
            ),
            
        )
    ));
    
    // ==========================================
    // RELATED SERVICES
    // ==========================================
    CSF::createSection( $prefix, array(
        'title'  => __( 'Related Services', 'wp10ms' ),
        'icon'   => 'fa fa-link',
        'fields' => array(
            
            array(
                'id'          => 'related_services',
                'type'        => 'select',
                'title'       => __( 'Select Related Services', 'wp10ms' ),
                'chosen'      => true,
                'multiple'    => true,
                'sortable'    => true,
                'ajax'        => true,
                'options'     => 'posts',
                'query_args'  => array(
                    'post_type'      => 'service',
                    'posts_per_page' => -1,
                ),
                'placeholder' => __( 'Select services...', 'wp10ms' ),
            ),
            
        )
    ));
    
}

/**
 * Custom validation for numeric or text fields
 */
function csf_validate_numeric_or_text( $value ) {
    // Allow numbers, dollar signs, and text like "Starting at $99"
    if ( empty( $value ) ) {
        return $value;
    }
    
    // Sanitize the value
    return sanitize_text_field( $value );
}