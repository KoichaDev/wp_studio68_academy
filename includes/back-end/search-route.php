<?php 

add_action('rest_api_init', 's68_course_api');

function s68_course_api() {
    register_rest_route('s68/v1', 'course', [
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 's68_course'
    ]);
}

function s68_course() {
    return 'yuiashduiashudiashuidhausidhuiasheah';
}