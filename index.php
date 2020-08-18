<?php get_header(); ?>

<main class="main-grid-container">
  <?php 
    get_template_part('template-parts/aside', '/');
    get_template_part('template-parts/courses_headliner', '/');
    get_template_part('template-parts/courses', '/');
    get_template_part('template-parts/news_headliner', '/');
    get_template_part('template-parts/news', '/');
  ?>
</main>

<?php get_footer(); ?>