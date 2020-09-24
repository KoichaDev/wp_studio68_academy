<?php 

add_action('rest_api_init', 's68_course_api');

function s68_course_api() {
    register_rest_route('s68/v1', 'course/(?P<id>\d+)', [
      [
        'methods' => WP_REST_Server::READABLE,
        'callback' => 's68_get_course'
      ],
      [
        'methods' => WP_REST_Server::EDITABLE,
        'callback' => 's68_update_course'
      ]
    ]);
}


function s68_get_course($data) {  
    $course = new WP_Query([
        'post_type' => 'courses',
        'p' => sanitize_text_field($data['id'])
    ]);

    $course_api = [];

    while($course -> have_posts()) {
        $course -> the_post();
        array_push($course_api, [
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'permalink' => get_the_permalink(),
            'progress' => track_progress(),
        ]);
    }

    return $course_api;
}

function s68_update_course($data) {
      $subfield_whitelist = ['academy_course_progress_button'];
    $post_id = sanitize_text_field( $data['id' ] );

    if( $data['course_content'] ) {
        $row_index = intval( $data['course_content']['row_index'] );
        $sub_field = sanitize_text_field( $data['course_content']['sub_field'] );
        $new_value = $data['course_content']['value'];

        // If intval() returned 0, then $data['course_content']['row_index'] was not a number.
        // It's alright to check this way because ACF row indexes start at 1 instead of 0 - so 0 is
        // never a valid row number.
        if( $row_index === 0 ) {
            return [
                'success' => false,
                'message' => 'Invalid row number'
            ];
        }

        // Don't let malicious users change subfields they're not allowed to
        if( !in_array( $sub_field, $subfield_whitelist ) ) {
            return [
                'success' => false,
                'message' => 'Invalid sub field'
            ];
        }

        $success = update_sub_field(
          [ 'academy_course_content', $row_index, $sub_field ],
          $new_value,
          $post_id
        );

        return [
            'success' => $success
        ];
    }

    return [
        'success' => false,
        'message' => 'Unknown update request'
    ];
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