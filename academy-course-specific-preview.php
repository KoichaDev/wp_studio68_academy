<?php get_header(); ?>


<main class="preview-grid-container">
  <div class="preview-grid__courses">
     <?php 
            $rows = get_field('academy_course_content');
            if( $rows ) {
                echo '<ul data-unordered-list>';
                foreach( $rows as $row ) {
                    if($row['academy_course_section'] !== '') { 
                            ?>
                            <li>
                                <h1><?php echo $row['academy_course_section']; ?> </h1>
                            </li>
                            <li>
                                <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                        <?php if($row['academy_course_section'] !== '') { ?>
                            <ul class="data-unordered-list__ul">
                                <li> 
                                    <?php if($row['academy_course_progress_button'][0] == 'true') : ?>
                                    <label for="progress-<?php echo $row['academy_course_progress_button'][0]; ?>">
                                        <input type="checkbox" id="progress-<?php echo $row['academy_course_progress_button'][0]; ?>" data-id="<?php the_ID(); ?>" checked>
                                    </label>
                                    <?php else :?>
                                    <label for="progress-<?php echo $row['academy_course_progress_button'][0]; ?>">
                                        <input type="checkbox" id="progress-<?php echo $row['academy_course_progress_button'][0]; ?>" data-id="<?php the_ID(); ?>">
                                    </label>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <div class="table-of-content-container__information" data-duration>
                                        <p>
                                        <?php echo $row['academy_course_title']; ?>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p>
                                        <small><?php echo $row['academy_course_duration']; ?> min</small>
                                    </p>
                                </li>
                            </ul>
                            </a>
                        </li>
                      
                        <?php
                    } else {
                         ?>
                         <li data-id="<?php the_ID(); ?>"> 
                            <?php if($row['academy_course_progress_button'][0] == 'true') : ?>
                                <label for="progress-<?php echo $row['academy_course_progress_button'][0]; ?>">
                                    <input type="checkbox" id="progress-<?php echo $row['academy_course_progress_button'][0]; ?>" data-id="<?php the_ID(); ?>" checked>
                                </label>
                            <?php else :?>
                            <label for="progress-<?php echo $row['academy_course_progress_button'][0]; ?>">
                                <input type="checkbox" id="progress-<?php echo $row['academy_course_progress_button'][0]; ?>" data-id="<?php the_ID(); ?>">
                            </label>
                            <?php endif; ?>
                        </li>
                        <li>
                            <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                            <ul style="margin-top: 2rem;">
                                <li>
                                    <p>
                                    <?php echo $row['academy_course_title']; ?>
                                    </p>

                                </li>
                                <li>
                                    <p>
                                        <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                                    </p>
                                </li>
                            </ul>                            
                        </li>
                        </a>
                        <?php
                    }
                    ?>
                            <?php
                        } else {
                              ?>
                              <li>
                                <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                                    <?php if($row['academy_course_section'] == '') { ?>
                                <ul class="data-unordered-list__ul">
                                    <li data-id="<?php the_ID(); ?>"> 
                                        <?php if($row['academy_course_progress_button'][0] == 'true') : ?>
                                            <label for="progress-<?php echo $row['academy_course_progress_button'][0]; ?>">
                                                <input type="checkbox" id="progress-<?php echo $row['academy_course_progress_button'][0]; ?>" data-id="<?php the_ID(); ?>" checked>
                                            </label>
                                        <?php else :?>
                                            <label for="progress-<?php echo $row['academy_course_progress_button'][0]; ?>">
                                                <input type="checkbox" id="progress-<?php echo $row['academy_course_progress_button'][0]; ?>" data-id="<?php the_ID(); ?>">
                                            </label>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <div class="table-of-content-container__information" data-duration>
                                            <p><?php echo $row['academy_course_title']; ?></p>
                                          </div>
                                    </li>
                                    <li>
                                        <p>
                                            <small><?php echo $row['academy_course_duration']; ?> min</small>
                                        </p>
                                    </li>
                                </ul>   
                            </a>
                        </li>
                        <?php
                    } else {
                         ?>
                        <li>
                            <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                            <ul class="data-unordered-list__ul">
                                <li>
                                    <p>
                                        <?php echo $row['academy_course_title']; ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <small><?php echo $row['academy_course_duration']; ?> min</small>
                                    </p>
                                </li>
                            </ul>
                            <p>
                            </p>
                        </li>
                        </a>
                        <?php
                    }
                    ?>
                            </li>
                            <?php
                        }
                }
                echo '</ul>';
                ?>
            </div><!-- End Div grid -->
            <?php
            }
        ?>  
  </div>
  <div class="preview-grid__video-preview">
    <?php 
        $rows = get_field('academy_course_content');
        if( $rows ) {
            foreach( $rows as $row ) {
                $permalink = get_the_permalink() . '?section=' . $row['academy_course_title'];  
                if($permalink && isset($_GET["section"]) && $_GET["section"] == $row['academy_course_title']) {
                    ?>
                        <?php echo $row['academy_course_embedded']; ?>
                    <?php
                }                 
            }
        }
        
    ?>

  </div>
</main>

<?php get_footer(); ?>