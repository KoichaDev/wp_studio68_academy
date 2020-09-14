<?php get_header(); ?>

<main class="grid-course-container">
    <?php 
        get_template_part('template-parts/courses page/courses_headliner', '/');
    ?>
  <section class="grid-course-container__main">
    <div class="grid-course-container__main__video-preview">
        <!-- <div class="embed-container">
            <?php the_field('academy_course_video_preview'); ?>
        </div> -->
    </div>
    <div class="grid-course-container__main__video-description">
        <p>
            <?php the_field('academy_course_description'); ?>
        </p>
        <a href="#" class="btn btn--yellow btn-hover--purple">Get Started »</a>
    </div>
    <div class="grid-course-container__main__learning-objective">Object</div>
    <div class="grid-course-container__main__learning-progress">Progress</div>
  </section>
</main>

<?php get_footer(); ?>