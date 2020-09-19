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
                                <ul>
                                    <li>
                                        <div class="circle circle--br-almond" data-set-course-section></div>
                                    </li>
                                    <li>
                                        <h1><?php echo $row['academy_course_section']; ?> </h1>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li>
                                <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                        <?php if($row['academy_course_section'] !== '') { ?>
                            <div class="table-of-content-container__information" data-duration>
                                <h3>
                                    <?php echo $row['academy_course_title']; ?>
                                    <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                                </h3>
                            </div>
                            </a>
                        </li>
                        <?php
                    } else {
                         ?>
                        <li>
                            <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                            <h3>
                                <?php echo $row['academy_course_title']; ?>
                                <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                            </h3>
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
                            <div class="table-of-content-container__information" data-duration>
                                <h3>
                                    <?php echo $row['academy_course_title']; ?>
                                    <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                                </h3>
                            </div>
                            </a>
                        </li>
                        <?php
                    } else {
                         ?>
                        <li>
                            <a href="<?php echo get_the_permalink() . '?section=' . $row['academy_course_title']; ?>"> 
                            <h3>
                                <?php echo $row['academy_course_title']; ?>
                                <small>(<?php echo $row['academy_course_duration']; ?> min) </small>
                            </h3>
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