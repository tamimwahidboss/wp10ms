<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('add_meta_boxes', function () {
    add_meta_box(
        'section_builder',
        'Page Sections Builder',
        'render_section_builder_metabox',
        'page',
        'normal',
        'default'
    );
});
function render_section_builder_metabox($post)
{
    $base_dir = get_template_directory() . '/template-parts/';
    $folders = array_filter(glob($base_dir . '*'), 'is_dir');

    $sections = get_post_meta($post->ID, '_page_sections', true);
    $sections = is_array($sections) ? $sections : [];

    wp_nonce_field('save_page_sections', 'page_sections_nonce');

    ?>
    <style>
        .section-row { 
            border:1px solid #ddd; 
            padding:10px; 
            margin-bottom:10px; 
            background:#fff;
            cursor:move;
        }
        .remove-section { color:#a00; cursor:pointer; float:right; }
    </style>

    <div id="sections-container">
        <?php foreach ($sections as $index => $sec): ?>
            <div class="section-row">
                <span class="remove-section">Remove ✖</span>

                <select class="section-folder" name="sections[<?php echo $index; ?>][folder]">
                    <option value="">Select Folder</option>
                    <?php foreach ($folders as $folder): 
                        $folder_name = basename($folder); ?>
                        <option value="<?php echo esc_attr($folder_name); ?>"
                            <?php selected($sec['folder'], $folder_name); ?>>
                            <?php echo esc_html($folder_name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <select class="section-file" name="sections[<?php echo $index; ?>][file]">
                    <option value="">Select File</option>
                    <?php
                    if ($sec['folder']) {
                        $files = glob($base_dir . $sec['folder'] . '/*.php');
                        foreach ($files as $file) {
                            $fn = basename($file);
                            echo '<option value="' . esc_attr($fn) . '" ' . selected($sec['file'], $fn, false) . '>' . esc_html($fn) . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        <?php endforeach; ?>
    </div>

    <button type="button" id="add-section" class="button">+ Add Section</button>

    <script>
        jQuery(function($){

            function loadFiles(folderSelect, fileSelect) {
                $.post(ajaxurl, {
                    action: 'load_section_files',
                    folder: folderSelect.val()
                }, function(response){
                    fileSelect.html(response);
                });
            }

            // When folder changes, load its files
            $(document).on('change', '.section-folder', function(){
                let fileSelect = $(this).closest('.section-row').find('.section-file');
                loadFiles($(this), fileSelect);
            });

            // Remove section
            $(document).on('click', '.remove-section', function(){
                $(this).closest('.section-row').remove();
            });

            // Add new section
            $('#add-section').on('click', function(){
                let index = $('.section-row').length;

                $.post(ajaxurl, { action: 'new_section_row', index: index }, function(html){
                    $('#sections-container').append(html);
                });
            });

            // Make sortable
            $('#sections-container').sortable();
        });
    </script>
    <?php
}
add_action('wp_ajax_new_section_row', function () {

    $index = intval($_POST['index']);
    $base_dir = get_template_directory() . '/template-parts/';
    $folders = array_filter(glob($base_dir . '*'), 'is_dir');

    ?>

    <div class="section-row">
        <span class="remove-section">Remove ✖</span>

        <select class="section-folder" name="sections[<?php echo $index; ?>][folder]">
            <option value="">Select Folder</option>
            <?php foreach ($folders as $folder):
                $name = basename($folder); ?>
                <option value="<?php echo esc_attr($name); ?>">
                    <?php echo esc_html($name); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select class="section-file" name="sections[<?php echo $index; ?>][file]">
            <option value="">Select File</option>
        </select>
    </div>

    <?php
    wp_die();
});
add_action('wp_ajax_load_section_files', function () {

    $folder = sanitize_text_field($_POST['folder']);
    $path = get_template_directory() . '/template-parts/' . $folder . '/';

    echo '<option value="">Select File</option>';

    if (is_dir($path)) {
        $files = glob($path . '*.php');
        foreach ($files as $file) {
            $fn = basename($file);
            echo '<option value="' . esc_attr($fn) . '">' . esc_html($fn) . '</option>';
        }
    }

    wp_die();
});
add_action('save_post', function ($post_id) {

    if (!isset($_POST['page_sections_nonce'])) return;
    if (!wp_verify_nonce($_POST['page_sections_nonce'], 'save_page_sections')) return;

    if (!isset($_POST['sections'])) {
        delete_post_meta($post_id, '_page_sections');
        return;
    }

    $clean = [];

    foreach ($_POST['sections'] as $sec) {
        if (empty($sec['folder']) || empty($sec['file'])) continue;

        $clean[] = [
            'folder' => sanitize_text_field($sec['folder']),
            'file'   => sanitize_text_field($sec['file']),
        ];
    }

    update_post_meta($post_id, '_page_sections', $clean);
});