<?php get_header(); ?>
<?php while(have_posts()){the_post(); ?>


  <figure class="section singleATF">
    <img class="singleATFImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
    <figcaption class="singleATFCaption">
      <h3 class="title"><?php the_title(); ?></h3>
      <p class="singleATFAuthor">Por <?php the_author(); ?> - <?php the_date(); ?></p>
    </figcaption>
  </figure>

  <section class="section singleContent">
    <div class="theContent"><?php the_content(); ?></div>
  </section>


<?php } wp_reset_query(); ?>
<?php get_footer(); ?>
