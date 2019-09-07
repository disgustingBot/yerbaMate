<?php get_header(); ?>

<?php

$args = array(
  // 'post_type' => 'project',
  'post_type' => 'post',
  'posts_per_page' => 10,
);

$blogPosts = new WP_Query($args);

while($blogPosts->have_posts()) {
  $blogPosts->the_post(); ?>

  <a href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
  </a>
  <?php the_excerpt(); ?>


<?php } ?>

<?php get_footer(); ?>
