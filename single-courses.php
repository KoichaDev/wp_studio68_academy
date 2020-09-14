<?php get_header(); ?>

    <?php  get_template_part('template-parts/courses page/courses_headliner', '/'); ?>
  <main class="grid-course-container__main">
    <div class="grid-course-container__main__video-preview">
        <div class="embed-container">
            <?php the_field('academy_course_video_preview'); ?>
        </div>
    </div>
    <div class="grid-course-container__main__video-description">
        <p>
            <?php the_field('academy_course_description'); ?>
        </p>
        <br>
        <br>
        <a href="#" class="btn btn--yellow btn-hover--purple">Get Started »</a>
    </div>
    <div class="grid-course-container__main__learning-objective">
        <?php the_field('academy_course_objective_learning'); ?>
    </div>
    <div class="grid-course-container__main__learning-progress">
<canvas id="s68-course-chart" width="300" height="300"></canvas>
    </div>
    <div class="grid-course-container__main__table-of-contents-header">
        <h1>Table of Content</h1>
        <p class="box box--width-80 box--electric-violet" style="margin-top: 2rem;">
            21 sections • 10 lectures • 5h 26m total length
        </p>
    </div>
    <div class="grid-course-container__main__table-of-contents-skills">
        <h1>Skills Covered</h1>
        <?php 
        $terms = get_field('academy_course_skills_tag');
        if( $terms ): ?>
        <?php foreach( $terms as $term ): ?>
                <p class="box box--electric-violet" style="display: inline-block; margin: 0.5rem 1px;"><?php echo esc_html( $term->name ); ?></p>
            <?php endforeach; ?>
        <?php endif; ?>           
    </div>
    <div class="grid-course-container__main__table-of-contents">
        <?php the_field('academy_table_of_contents'); ?>
    </div>
  </main>

<?php get_footer(); ?>