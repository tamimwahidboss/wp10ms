<?php
/**
 * Author Social Media Fields
 * Add social media fields to WordPress user profiles
 * 
 * Add this code to your functions.php or create a new file in /inc/
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add social media fields to user profile
 */
function wp10ms_add_author_social_fields( $user ) {
    ?>
    <h2><?php esc_html_e( 'Social Media Links', 'wp10ms' ); ?></h2>
    <table class="form-table wp10ms-social-fields">
        <tr>
            <th>
                <label for="facebook">
                    <i class="fab fa-facebook-f"></i> <?php esc_html_e( 'Facebook URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="facebook" 
                       id="facebook" 
                       value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://facebook.com/username" />
                <p class="description"><?php esc_html_e( 'Enter your Facebook profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="twitter">
                    <i class="fab fa-twitter"></i> <?php esc_html_e( 'Twitter URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="twitter" 
                       id="twitter" 
                       value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://twitter.com/username" />
                <p class="description"><?php esc_html_e( 'Enter your Twitter profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="linkedin">
                    <i class="fab fa-linkedin-in"></i> <?php esc_html_e( 'LinkedIn URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="linkedin" 
                       id="linkedin" 
                       value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://linkedin.com/in/username" />
                <p class="description"><?php esc_html_e( 'Enter your LinkedIn profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="instagram">
                    <i class="fab fa-instagram"></i> <?php esc_html_e( 'Instagram URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="instagram" 
                       id="instagram" 
                       value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://instagram.com/username" />
                <p class="description"><?php esc_html_e( 'Enter your Instagram profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="github">
                    <i class="fab fa-github"></i> <?php esc_html_e( 'GitHub URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="github" 
                       id="github" 
                       value="<?php echo esc_attr( get_the_author_meta( 'github', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://github.com/username" />
                <p class="description"><?php esc_html_e( 'Enter your GitHub profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="youtube">
                    <i class="fab fa-youtube"></i> <?php esc_html_e( 'YouTube URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="youtube" 
                       id="youtube" 
                       value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://youtube.com/c/channelname" />
                <p class="description"><?php esc_html_e( 'Enter your YouTube channel URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="pinterest">
                    <i class="fab fa-pinterest-p"></i> <?php esc_html_e( 'Pinterest URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="pinterest" 
                       id="pinterest" 
                       value="<?php echo esc_attr( get_the_author_meta( 'pinterest', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://pinterest.com/username" />
                <p class="description"><?php esc_html_e( 'Enter your Pinterest profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
        
        <tr>
            <th>
                <label for="tiktok">
                    <i class="fab fa-tiktok"></i> <?php esc_html_e( 'TikTok URL', 'wp10ms' ); ?>
                </label>
            </th>
            <td>
                <input type="url" 
                       name="tiktok" 
                       id="tiktok" 
                       value="<?php echo esc_attr( get_the_author_meta( 'tiktok', $user->ID ) ); ?>" 
                       class="regular-text" 
                       placeholder="https://tiktok.com/@username" />
                <p class="description"><?php esc_html_e( 'Enter your TikTok profile URL', 'wp10ms' ); ?></p>
            </td>
        </tr>
    </table>
    
    <style>
        .wp10ms-social-fields th label i {
            margin-right: 8px;
            width: 20px;
            text-align: center;
        }
        .wp10ms-social-fields input[type="url"] {
            width: 100%;
            max-width: 500px;
        }
    </style>
    <?php
}
add_action( 'show_user_profile', 'wp10ms_add_author_social_fields' );
add_action( 'edit_user_profile', 'wp10ms_add_author_social_fields' );

/**
 * Save social media fields
 */
function wp10ms_save_author_social_fields( $user_id ) {
    if ( ! current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }
    
    // List of social media fields
    $social_fields = array(
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'github',
        'youtube',
        'pinterest',
        'tiktok',
    );
    
    foreach ( $social_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            $url = sanitize_text_field( $_POST[ $field ] );
            
            // Validate URL
            if ( ! empty( $url ) && ! filter_var( $url, FILTER_VALIDATE_URL ) ) {
                // Invalid URL, skip saving
                continue;
            }
            
            update_user_meta( $user_id, $field, esc_url_raw( $url ) );
        }
    }
}
add_action( 'personal_options_update', 'wp10ms_save_author_social_fields' );
add_action( 'edit_user_profile_update', 'wp10ms_save_author_social_fields' );

/**
 * Add custom contact methods (extends WordPress default)
 * This makes the fields available in REST API and other WordPress features
 */
function wp10ms_author_contact_methods( $methods ) {
    // Add new contact methods
    $methods['facebook']  = __( 'Facebook', 'wp10ms' );
    $methods['twitter']   = __( 'Twitter', 'wp10ms' );
    $methods['linkedin']  = __( 'LinkedIn', 'wp10ms' );
    $methods['instagram'] = __( 'Instagram', 'wp10ms' );
    $methods['github']    = __( 'GitHub', 'wp10ms' );
    $methods['youtube']   = __( 'YouTube', 'wp10ms' );
    $methods['pinterest'] = __( 'Pinterest', 'wp10ms' );
    $methods['tiktok']    = __( 'TikTok', 'wp10ms' );
    
    return $methods;
}
add_filter( 'user_contactmethods', 'wp10ms_author_contact_methods' );

/**
 * Get author social links (Helper function)
 * 
 * @param int $author_id Author user ID
 * @return array Array of social links
 */
function wp10ms_get_author_social_links( $author_id = null ) {
    if ( ! $author_id ) {
        $author_id = get_the_author_meta( 'ID' );
    }
    
    $social_links = array();
    
    $fields = array(
        'facebook'  => array( 'icon' => 'fab fa-facebook-f', 'label' => 'Facebook' ),
        'twitter'   => array( 'icon' => 'fab fa-twitter', 'label' => 'Twitter' ),
        'linkedin'  => array( 'icon' => 'fab fa-linkedin-in', 'label' => 'LinkedIn' ),
        'instagram' => array( 'icon' => 'fab fa-instagram', 'label' => 'Instagram' ),
        'github'    => array( 'icon' => 'fab fa-github', 'label' => 'GitHub' ),
        'youtube'   => array( 'icon' => 'fab fa-youtube', 'label' => 'YouTube' ),
        'pinterest' => array( 'icon' => 'fab fa-pinterest-p', 'label' => 'Pinterest' ),
        'tiktok'    => array( 'icon' => 'fab fa-tiktok', 'label' => 'TikTok' ),
    );
    
    foreach ( $fields as $field => $data ) {
        $url = get_the_author_meta( $field, $author_id );
        if ( ! empty( $url ) ) {
            $social_links[ $field ] = array(
                'url'   => esc_url( $url ),
                'icon'  => $data['icon'],
                'label' => $data['label'],
            );
        }
    }
    
    return $social_links;
}

/**
 * Display author social links (Helper function)
 * 
 * @param int $author_id Author user ID
 * @param string $class Additional CSS classes
 */
function wp10ms_display_author_social_links( $author_id = null, $class = '' ) {
    $social_links = wp10ms_get_author_social_links( $author_id );
    
    if ( empty( $social_links ) ) {
        return;
    }
    
    echo '<div class="author-social-links ' . esc_attr( $class ) . '">';
    
    foreach ( $social_links as $network => $data ) {
        printf(
            '<a href="%s" target="_blank" rel="noopener noreferrer" class="social-link social-%s" aria-label="%s">
                <i class="%s"></i>
            </a>',
            esc_url( $data['url'] ),
            esc_attr( $network ),
            esc_attr( $data['label'] ),
            esc_attr( $data['icon'] )
        );
    }
    
    echo '</div>';
}

/**
 * Add admin notice to remind users to fill out their profile
 */
function wp10ms_author_profile_reminder() {
    $user_id = get_current_user_id();
    $user_bio = get_the_author_meta( 'description', $user_id );
    
    // Only show to authors and above
    if ( ! current_user_can( 'publish_posts' ) ) {
        return;
    }
    
    // Don't show if user has already filled bio
    if ( ! empty( $user_bio ) ) {
        return;
    }
    
    // Check if notice was dismissed
    $dismissed = get_user_meta( $user_id, 'wp10ms_profile_reminder_dismissed', true );
    if ( $dismissed ) {
        return;
    }
    
    ?>
    <div class="notice notice-info is-dismissible wp10ms-profile-reminder">
        <p>
            <strong><?php esc_html_e( 'Complete Your Author Profile!', 'wp10ms' ); ?></strong><br>
            <?php 
            printf(
                /* translators: %s: URL to user profile */
                __( 'Add a bio and social media links to your <a href="%s">profile</a> to appear on your author page.', 'wp10ms' ),
                esc_url( get_edit_profile_url( $user_id ) )
            );
            ?>
        </p>
    </div>
    <script>
    jQuery(document).ready(function($) {
        $('.wp10ms-profile-reminder').on('click', '.notice-dismiss', function() {
            $.post(ajaxurl, {
                action: 'wp10ms_dismiss_profile_reminder',
                nonce: '<?php echo wp_create_nonce( 'wp10ms_dismiss_reminder' ); ?>'
            });
        });
    });
    </script>
    <?php
}
add_action( 'admin_notices', 'wp10ms_author_profile_reminder' );

/**
 * AJAX handler to dismiss profile reminder
 */
function wp10ms_dismiss_profile_reminder() {
    check_ajax_referer( 'wp10ms_dismiss_reminder', 'nonce' );
    
    $user_id = get_current_user_id();
    update_user_meta( $user_id, 'wp10ms_profile_reminder_dismissed', true );
    
    wp_send_json_success();
}
add_action( 'wp_ajax_wp10ms_dismiss_profile_reminder', 'wp10ms_dismiss_profile_reminder' );