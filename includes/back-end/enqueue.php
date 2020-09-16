<?php 
    // This is for back-end use. Basically everything related to Admin dashboard
    
    // This is just a general way to organize our WP REST API
    require get_theme_file_path('includes/back-end/search-route.php');
    
    function s68_back_enqueue_scripts() {
        
        // Add featured image
        add_theme_support('post-thumbnails');
    }

    function s68_academy_course_post_types() {
        // Post type for Courses
        register_post_type('courses', [
            'public' => true,
            'has_archieve' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true, // This assoc. array will go from default tinyMCE to Gutenberg Editor
            'labels' => [ // This is admin dashboard events for plugins
                'name' => 'Academy Courses',
                'edit_item' => 'Edit Course',
                'all_items' => 'All Courses',
                'singular_name' => 'Studio68 Academy Courses' 
            ],
            'menu_icon' => 'dashicons-welcome-learn-more'
        ]);
    }
?>