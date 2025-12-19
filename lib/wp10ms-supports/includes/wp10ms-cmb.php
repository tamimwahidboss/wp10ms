<?php

class WP10MS_Custom_Capabilities {
    public function __construct() {
        if ( is_admin() ) {
            add_action( 'load-post.php', array( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
        }
    }

    public function init_metabox() {
        add_action( 'add_meta_boxes', array( $this, 'add_metabox' ) );
        add_action( 'save_post', array( $this, 'save_metabox' ), 10, 2 );
    }

    public function add_metabox() {
        add_meta_box(
            'breadcrumb_control_metabox',
            __( 'Breadcrumb', 'wp10ms' ),
            array( $this, 'render_metabox' ),
            'page',
            'side',
            'high'
        );
    }

    public function render_metabox( $post, $metabox ) {
        // Add nonce for security
        wp_nonce_field( 'breadcrumb_nonce_action', 'breadcrumb_nonce' );

        // Get saved value
        $value = get_post_meta( $post->ID, '_breadcrumb_control', true );
        if ( empty( $value ) ) {
            $value = '0';
        }

        // Debug: Uncomment to see the value
        // echo '<pre>'; print_r( $value ); echo '</pre>';

        echo '<p>';
        echo '<input type="checkbox" id="breadcrumb_control" name="breadcrumb_control" value="1" ' . checked( $value, '1', false ) . ' />';
        echo '<label for="breadcrumb_control">' . esc_html__( 'Enable Breadcrumb', 'wp10ms' ) . '</label>';
        echo '</p>';
    }

    public function save_metabox( $post_id, $post ) {
        // Check nonce
        $nonce_name = isset( $_POST['breadcrumb_nonce'] ) ? sanitize_text_field( $_POST['breadcrumb_nonce'] ) : '';
        $nonce_action = 'breadcrumb_nonce_action';

        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
            return;
        }

        // Check permissions
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        // Check for autosave or revision
        if ( wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id ) ) {
            return;
        }

        // Save value
        $value = isset( $_POST['breadcrumb_control'] ) ? '1' : '0';
        update_post_meta( $post_id, '_breadcrumb_control', $value );
    }
}

new WP10MS_Custom_Capabilities();
