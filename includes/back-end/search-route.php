<?php 

add_action('rest_api_init', 's68_course_api');

function s68_course_api() {
    register_rest_route('s68/v1', 'course', [
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 's68_course'
    ]);
}

function s68_course($data) {
    $course = new WP_Query([
        'post_type' => 'courses',
        's' => sanitize_text_field($data['q'])
    ]);

    $course_api = [];


    while($course -> have_posts()) {
        $course -> the_post();
        array_push($course_api, [
            'title' => get_the_title(),
            'permalink' => get_the_permalink(),
            'course' => [ 
                'progress' => track_progress(),
            ]
        ]);
    }

    return $course_api;
}
function track_progress() {
    $array_tracking = [];
    $rows = get_field('academy_course_content');
    if( $rows ) {
        foreach( $rows as $row ) {
            array_push($array_tracking, $row['academy_course_progress_button']); 
        }
    }
    return $array_tracking;
}