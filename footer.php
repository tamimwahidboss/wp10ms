<?php
    // Retrieve the csf saved option value
    $options = get_option('wp10ms_options');
    if ( isset( $options['ft-select'] ) && $options['ft-select'] === 'ft-1' ) {
        get_template_part('template-parts/footer-sections/footer-1');
    }
?>

<?php wp_footer(); ?>
</body>

</html>