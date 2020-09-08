<?php
// Using constant to check the developer mode is on. Default will be true
define('S68_DEV_MODE', true);

// Including - Will use to including files
include(get_theme_file_path('/includes/back-end/enqueue.php'));
include(get_theme_file_path('/includes/front-end/enqueue.php'));


// Action Hooks - Will be used for any filters and action hooks
add_action('after_setup_theme', 's68_back_enqueue_scripts');
add_action('wp_enqueue_scripts', 's68_front_enqueue_scripts');

// Action Hooks - Cutom Custome post Types
add_action('init', 's68_academy_course_post_types');