<?php get_header(); ?>

<!-- <h1>eventos.php</h1> -->





  <section class="ATF carousel">


    <?php
    $categoria="music";
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




  <section class="section">
    <h3 class="title">Testeos de Spotify</h3>

  </section>





  <section class="section sectionLatest">
    <h3 class="title sectionLatestTitle">Úlitmas entradas sobre música</h3>
    <?php $i=0;
    $categoria="music";
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>9,
      'category_name' => $categoria,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>

      <figure class="lastPost<?php
        switch($i){
          case 0:
            echo" lastPostBig";
            break;
          case 6:
            echo" lastPostBig";
            break;
          default:break;
        }
      ?>">
        <a class="lastPostLink" href="<?php the_permalink(); ?>">
          <img class="lastPostImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        </a>
        <figcaption class="lastPostCaption">
          <h3><?php the_title(); ?></h3>
        </figcaption>
      </figure>

    <?php $i++;}wp_reset_query(); ?>

  </section>




<?php get_footer(); ?>
