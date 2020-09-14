<?php get_header(); ?>

<main class="grid-course-container">
    <?php 
        get_template_part('template-parts/courses page/courses_headliner', '/');
    ?>
  <div class="grid-course-container__main">
        <div class="grid-course-intro">
            <div class="grid-course-intro__video-preview">video</div>
            <div class="grid-course-intro__video-description">Description</div>
            <div class="grid-course-intro__learning-objective">Object</div>
            <div class="grid-course-intro__learning-progress">Progress</div>
        </div>
  </div>
</main>

<?php get_footer(); ?>