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
                                <ul style="margin-top: 2rem;">
                                    <li>
                                        <div class="circle circle--br-almond" data-set-course-section></div>
                                    </li>
                                    <li>
                                        <h1><?php echo $row['academy_course_section']; ?> </h1>
                                    </li>
                                </ul>
                            </li>
                            <li class="data-unordered-list__li-duration">
                                <img src="<?php echo get_theme_file_uri() . './assets/img/iconmonstr-time-2.svg' ?>" alt="clock">
                                <p data-get-duration>clock</p>
                            </li>
                           
                            <li>
                                <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                        <?php if($row['academy_course_section'] !== '') { ?>
                            <ul class="data-unordered-list__ul">
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
                           <hr>
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
            </div>;<!-- End Div grid -->
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
                    echo $row['academy_course_embedded'];
                } 
            }
        }
    ?>
  </div>
</main>

<?php get_footer(); ?>