<?php 
$rows = get_field('academy_course_content');
if( $rows ) {
    foreach( $rows as $row ) {
        $permalink = get_the_permalink() . '?section=' . $row['academy_course_title'];  
        if($permalink && isset($_GET["section"]) && $_GET["section"] == $row['academy_course_title']) {
            echo $row['academy_course_embedded'];
        } 
    }
}
?>