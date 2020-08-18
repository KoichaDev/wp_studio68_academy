<?php 
    function s68_enqueue_scripts() {
        
        $uri = get_theme_file_uri();
        $check_version = S68_DEV_MODE ? time() : false;

        // This will enforcing our WP to get our scripts
        wp_register_style('s68_css_style', $uri . '/assets/css/core.css', [], $check_version);

        // This will load our scripts to work
        wp_enqueue_style('s68_css_style');
    }
?>