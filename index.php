<?php get_header(); ?>

<main class="main-grid-container">
  <?php 
    get_template_part('template-parts/aside', '/');
    get_template_part('template-parts/news', '/');
    get_template_part('template-parts/courses', '/');
  ?>
</main>

<?php get_footer(); ?>