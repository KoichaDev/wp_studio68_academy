<article class="main-grid-container__news">
      <?php 
      $newsArticle = new WP_Query([
            'posts_per_page' => -1
      ]); 
      ?>
      <?php while($newsArticle -> have_posts()) { 
            $newsArticle -> the_post(); 
      ?>
      <article class="container__news__card">
            <img src="http://source.unsplash.com/random/288x236" alt>
                  <div class="container__news__card-body">
                        <h1 class="container__news__card-title"><?php echo get_the_title(); ?></h1>
                        <p class="container__news__card-text">
                              <?php echo wp_trim_words( get_the_excerpt(), 18); ?></p>
                        <a href="<?php the_permalink(); ?>" class="container__news__card-btn">Get Started »</a>
                  </div>
      </article>
      <?php } 
            wp_reset_postdata();
      ?>
</article>