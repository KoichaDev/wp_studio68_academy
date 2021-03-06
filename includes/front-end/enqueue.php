<?php 
    // This is for front-end use. Basically everything related to what the user sees on the webpage
    function s68_front_enqueue_scripts() {

        $uri = get_theme_file_uri();
        $check_version = S68_DEV_MODE ? time() : false;

        // This will enforcing our WP to get our scripts
        wp_register_style('s68_css_style', $uri . '/assets/css/core.css', [], $check_version);
        wp_register_script('s68_script_js', $uri . '/dist/script.js', [], $check_version);
                
        // This will load our scripts to work
        wp_enqueue_style('s68_css_style');
        wp_enqueue_script('s68_script_js');

        wp_localize_script( 's68_script_js', 's68_api_data', array(
            'root' => esc_url_raw( rest_url() ),
            'nonce' => wp_create_nonce( 'wp_rest' )
        ) );
    }
?>