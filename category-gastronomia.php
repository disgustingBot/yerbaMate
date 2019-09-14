<?php get_header(); ?>

<!-- <h1>eventos.php</h1> -->





  <section class="ATF carousel">


    <?php
    $categoria="gastronomia";
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>5,
      'category_name' => $categoria,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>
      <figure class="slide inactive carouselItem">
        <img class="slideImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <figcaption class="slideCaption">
          <a class="slideLink" href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
            <!-- <p>Por <?php the_author(); ?> - <?php the_date(); ?></p> -->
            <p>LEER</p>
          </a>
        </figcaption>
      </figure>
    <?php } wp_reset_query(); ?>


    <button class="slideButton slideLeft" onclick="plusDivs(-1)">&#10094;</button>
    <button class="slideButton slideRight" onclick="plusDivs(+1)">&#10095;</button>
  </section>







  <section class="section sectionStories">

    <?php
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>6,
      'category_name' => $categoria,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>
      <figure class="smallCard">
        <img class="smallCardImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <figcaption class="smallCardCaption">
          <a class="smallCardLink" href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
        </figcaption>
      </figure>
    <?php } wp_reset_query(); ?>

  </section>






    <section class="section sectionFeatured">
      <h2 class="title">CBbC destacados</h2>
      <?php
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>6,
        'category_name' => $categoria,
      );$atf=new WP_Query($args);
      while($atf->have_posts()){$atf->the_post(); ?>
        <figure class="slide">
          <img class="slideImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption class="slideCaption">
            <a class="slideLink" href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
          </figcaption>
        </figure>
      <?php } wp_reset_query(); ?>

    </section>






    <section class="section sectionSelects">
      <h2 class="title selectsTitle">CBbC selectos</h2>
      <?php
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>15,
        'category_name' => $categoria,
      );$atf=new WP_Query($args);
      while($atf->have_posts()){$atf->the_post(); ?>
        <figure class="slide slideSmall">
          <img class="slideImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption class="slideCaption">
            <a class="slideLink" href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
          </figcaption>
        </figure>
      <?php } wp_reset_query(); ?>

    </section>



<?php get_footer(); ?>
