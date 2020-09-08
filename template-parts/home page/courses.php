<article class="main-grid-container__courses">
      <?php 
      $academy_courses = new WP_Query([
            'posts_per_page' => -1,
            'post_type' => 'courses'
      ]);
      
      while($academy_courses -> have_posts()) {
            $academy_courses -> the_post();
            ?>
      <article class="container__courses__card">
            <img 
                  src="<?php the_post_thumbnail_url(); ?>" 
                  alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
            >
            <div class="container__courses__card__card-body">
                  <h1 class="container__courses__card__card-title"><?php the_title(); ?></h1>
                  <p class="container__courses__card__card-text">
                        <?php echo wp_trim_words( get_the_excerpt(), 18); ?></p>
                  </p>
                  <a href="<?php echo get_the_permalink(); ?>" class="container__courses__card__card-btn">Get Started »</a>
            </div>
      </article>
      <?php } ?>
      <?php wp_reset_postdata(); ?>
</article>

