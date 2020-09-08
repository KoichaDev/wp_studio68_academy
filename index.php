<?php get_header(); ?>

<main class="main-grid-container">
  <?php 
    get_template_part('template-parts/home page/aside', '/');
    get_template_part('template-parts/home page/courses_headliner', '/');
    get_template_part('template-parts/home page/courses', '/');
    get_template_part('template-parts/home page/news_headliner', '/');
    get_template_part('template-parts/home page/news', '/');
  ?>
</main>

<?php get_footer(); ?>