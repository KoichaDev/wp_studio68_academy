<?php
// This is the entry point of WP Custom Post Type. Usually, this is only dedicated single-post type,
// Since WP doesn't have in-built parent-child relationship, so we can create this logic instead

if (isset($_GET["section"]) && $_GET["section"] == "preview") {
    // Direct access to the preview of the course
    require_once "academy-course-preview.php";
} else {
    // Direct access to the course description
    require_once "academy-course.php";
}

