<?php get_header(); ?>

<?php  get_template_part('template-parts/courses page/courses_headliner', '/'); ?>
  <main class="grid-course-container__main">
    <div class="grid-course-container__main__video-preview">
        <div class="embed-container">
            <?php the_field('academy_course_video_preview'); ?>
        </div>
    </div>
    <div class="grid-course-container__main__video-description">
        <h1>Description</h1>
        <p>
            <?php the_field('academy_course_description'); ?>
        </p>
        <br>
        <br>
        <a href="<?php echo get_the_permalink() . '?section=preview'; ?>" class="btn btn--yellow btn-hover--purple">Get Started »</a>
    </div>
    <div class="grid-course-container__main__learning-objective">
        <?php the_field('academy_course_objective_learning'); ?>
    </div>
    <div class="grid-course-container__main__learning-progress">
         <div class="grid-course-container__main__learning-progress__chartjs">
            <canvas id="s68-course-chart" width="225" height="225"></canvas>
         </div>
         <div class="grid-course-container__main__learning-progress__description">
             <h2>Complete Progress</h2>
             <p>11 of 13 lessons Completed</p>
             <ul>
                 <li>
                    <h3>Incomplete</h3> 
                 </li>
                 <li>
                    <p >
                        <small data-incomplete>40%</small>
                    </p>
                 </li>
                 <li>
                     <div class="box box-rectangle--mulberry" style="padding: 0;"></div>
                 </li>
             </ul>
             <ul>
                 <li>
                    <h3>Complete</h3> 
                 </li>
                 <li>
                    <p>
                        <small data-complete>60%</small>
                    </p>
                 </li>
                 <li>
                     <div class="box box-rectangle--shamrock" style="padding: 0;"></div>
                 </li>
             </ul>
             <hr>
             <ul>
                 <li>“</li>
                 <li>
                    <p data-motivation-quote>You are almost there! You can do it! Go go! ✊</p>
                 </li>
                 <li>“</li>
             </ul>
         </div>
    </div>
    <div class="grid-course-container__main__table-of-contents-header">
        <h1>Table of Content</h1>
        <p class="box box--width-80 box--electric-violet" data-table-of-content-head-section style="margin-top: 2rem;">
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
    <div class="grid-course-container__main__table-of-contents" data-table-of-content-course>
        <div class="grid-table-of-content-container">
          <?php 
           $rows = get_field('academy_course_content');
            if($rows) { ?>
                <div class="grid-table-of-content-container__image">
                    <ul>
                    <?php
                    foreach($rows as $row ) {
                        if($row['academy_course_section'] !== '') { 
                            ?>
                            <li>
                                <h2><?php echo $row['academy_course_section']; ?> </h2>
                            </li>
                            <li>
                                <img 
                                src="<?php echo $row['academy_course_image']['url']; ?>" 
                                alt="<?php echo $row['academy_course_image']['alt']; ?>"
                                width="169"
                                height="89"
                                >
                            </li>
                            <?php
                        } else {
                              ?>
                              <li>
                                <img 
                                src="<?php echo $row['academy_course_image']['url']; ?>" 
                                alt="<?php echo $row['academy_course_image']['alt']; ?>"
                                width="169"
                                height="89"
                                >
                            </li>
                            <?php
                        }
                } ?>
                    </ul>;
                </div>
                
                <div class="grid-table-of-content-container__description">
                    <ul>
                <?php
                foreach( $rows as $row ) {
                    if($row['academy_course_section'] !== '') {
                        ?>
                        <li>
                            <h3>
                                <?php echo $row['academy_course_title']; ?>
                            </h3>
                            <p>
                                <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                            </p>
                        </li>
                        <li>
                            <p><?php echo $row['academy_course_lecture_description']; ?></p>
                        </li>
                        <?php
                    } else {
                         ?>
                        <li>
                            <h3>
                                <?php echo $row['academy_course_title']; ?>
                            </h3>
                            <p>
                                <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                            </p>
                        </li>
                        <li>
                            <p><?php echo $row['academy_course_lecture_description']; ?></p>
                        </li>
                        <?php
                    }
                    ?>
                <?php
            }
            ?>
            </ul>
                </div>;
                <?php
            }
        ?> 
        </div>
    </div>
  </main>

<?php get_footer(); ?>