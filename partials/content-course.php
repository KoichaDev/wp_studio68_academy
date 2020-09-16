<?php 

if( isset( $_GET['section'] ) ) {
  $section = sanitize_text_field( $_GET['section'] );
  get_template_part( 'partials/content-course', $section );
}
else {
  get_template_part( 'partials/content', 'course' );
}

?>