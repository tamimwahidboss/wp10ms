<?php
/**
 * Here describe about custom meta box CMB and write some examples.
 */

// Register Custom Meta Boxes in page-post
function wpl_owt_register_metabox() {
    // page
    add_meta_box( 'owt-page-id', 'OWT Page Metabox', 'wpl_owt_page_function', 'page', 'normal', 'high');
    // post
    add_meta_box( 'owt-post-id', 'OWT Post Metabox', 'wpl_owt_post_function', 'post', 'side', 'default');
}
add_action( 'add_meta_boxes', 'wpl_owt_register_metabox' );
// page callback function
function wpl_owt_page_function() {
    $title = get_the_title();
    echo '<h3>Page Title: '. $title .'</h3>';
}
//post callback function
function wpl_owt_post_function() {
    $title = get_the_title();
    echo '<h3>Page Title: '. $title .'</h3>';
}

// Register CMB for CPT
function wpl_owt_register_metabox_cpt() {
    // register custom meta box
    add_meta_box( 'owt-book-id', 'OWT Book Metabox', 'wpl_owl_book_function', 'book', 'side', 'default' );
}
add_action( 'add_meta_boxes_book', 'wpl_owt_register_metabox_cpt' ); // or, add_meta_boxes_{custom_post_type}

// book custom post meta box callback function
function wpl_owl_book_function( $post ) {
    wp_nonce_field( 'wp_owt_cpt_action', 'wp_owt_cpt_nonce' );
    $contributors_name = get_post_meta( $post->ID, 'book_contributor_name', true );

    // $echo = $_POST['wp_owt_cpt_nonce'];
    // echo '<pre>';
    // print_r($echo);
    // echo '</pre>';
    
    echo '<div>';
    // enable banner checkbox
    echo '<input type="checkbox" id="bnEnbCheckbox" name="bnEnbCheckbox"> Enable/Disable';
    // Meta label
    echo '<label class="css-2o4jwd" for="txtContributorName"><strong>Add Contributor</strong></label>';
    // Meta input box
    echo '<input style="margin-bottom: 5px" type="text" id="txtContributorName" name="txtContributorName" placeholder="Contributor Name">';
    // Showing values
    echo '<div>';
    echo '<ul>';
        // we need to save and showing multiple values.
        foreach ( $contributors_name as $contributor_name ) {
            echo '<li><button type="button">'. $contributor_name. '</button></li>';
        }
    echo '</ul>';
    echo '</div>';
    echo '</div>';
}

// save meta box data
function wpl_owt_save_metabox_data( $post_id, $post) {
    // Nonce check
    if (
        ! isset( $_POST['wp_owt_cpt_nonce'] ) ||
        ! wp_verify_nonce($_POST['wp_owt_cpt_nonce'], 'wp_owt_cpt_action')
    ) {
        return $post_id;
    }

    // Autosave, AJAX, and revision checks
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return $post_id;
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) return $post_id;
    if ( $post->post_type !== 'book' ) return $post_id;

    // verifying slug value
    $post_slug = 'book';
    if ( $post_slug != $post->post_type ) {
        return;
    }

    // save value to db field
    $cntr_name = isset ( $_POST['txtContributorName']) ? sanitize_text_field($_POST['txtContributorName']) : '';
    update_post_meta ( $post_id, 'book_contributor_name', $cntr_name );

    return $post_id;
}
add_action( 'save_post', 'wpl_owt_save_metabox_data', 10, 2 );

// Register CMB for Dashboard
function wpl_owt_register_metabox_dashboard() {
    // dashboard
    add_meta_box( 'owt-dashboard-id', 'OWT Dashboard Metabox', 'wpl_owt_dashboard_function', 'dashboard', 'normal', 'high' );
    // remove meta box from dashboard
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // removed any default meta box
}
add_action( 'wp_dashboard_setup', 'wpl_owt_register_metabox_dashboard' );

// dashboard meta box callback function
function wpl_owt_dashboard_function() {}




function wpl_owt_authors_metabox() {
    // register custom author meta box
    add_meta_box( 'owt_author_id', 'OWT Author Meta Box', 'wpl_owt_author_callback_function', 'book', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'wpl_owt_authors_metabox' );

// callback function
function wpl_owt_author_callback_function($post) {
    // Nonce
    wp_nonce_field( 'wpt_owt_author_action', 'wpl_owt_author_nonce' );
    ?>
    <p>
        <label for="ddauthor">Select Author</label>
        <select name="ddauthor" id="ddauthor">
            <?php
                $post_id = $post->ID;
                $author_id = get_post_meta($post_id, 'owt_book_author_name', true);


                $all_authors = get_users(array('role'=>'author'));
                foreach( $all_authors as $index => $author ) {

                    $selected = ''; // check this
                    if ( $author_id == $author->data->ID ) {
                        $selected = 'selected="selected"';
                    }
                    ?>
                    <option value="<?php echo $author->data->ID; ?>"<?php echo $selected; ?>><?php echo $author->data->display_name; ?></option>
                    <?php
                }
            ?>
        </select>
    </p>
    <?php
}

// save data
function wpl_owt_save_author($post_id, $post) {
    // Nonce
    if ( ! isset($_POST['wpl_owt_author_nonce']) || ! wp_verify_nonce($_POST['wpl_owt_author_nonce'], 'wpt_owt_author_action') ) {
        return $post_id;
    }

    // verifying post slug
    $book_slug = 'book';
    if ( $book_slug != $post->post_type ) {
        return $post_id;
    }

    // save data on db
    $author_name = isset($_POST['ddauthor']) ? sanitize_text_field($_POST['ddauthor']) : '';
    update_post_meta( $post_id, 'owt_book_author_name',  $author_name);
}
add_action( 'save_post', 'wpl_owt_save_author', 10, 2 );