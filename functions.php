<?php

// Using constant to check the developer mode is on. Default will be true
define('S68_DEV_MODE', true);

// Including - Will use to including files
include(get_theme_file_path('/includes/front/enqueue.php'));

// Action Hooks - Will be used for any filters and action hooks
add_action('wp_enqueue_scripts', 's68_enqueue_scripts');

?>