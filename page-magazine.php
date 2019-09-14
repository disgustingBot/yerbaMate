<?php get_header(); ?>

<!-- <h1>eventos.php</h1> -->





  <section class="section magazineATF">

    <h2 class="title">Magazine</h2>
    <?php
    $categories=get_categories();
    foreach($categories as $category){
      // if ($category->slug=="plans") {
      //   echo '<a href="https://and7dreams.com/login/">'.$category->name.'</a>';
      //   continue;
      // }
      if($category->slug=="uncategorized"){continue;}
       echo '<a class="magazineATFLink" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
    }
    ?>

  </section>


    <section class="section sectionLatest">
      <h3 class="title sectionLatestTitle">Úlitmas entradas</h3>
      <?php $i=0;
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>9,
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




    <section class="section sectionFeatured">
      <h2 class="title">CBbC destacados</h2>
      <?php
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>6,
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





    <section class="section sectionStories">
      <h3 class="title sectionStoriesTitle">Vive la Experiencia</h3>
      <?php
      $categoria="experiencias";
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>3,
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





    <section class="section sectionStories">
      <h3 class="title sectionStoriesTitle">La mejor Gastronomia</h3>
      <?php
      $categoria="gastronomia";
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>3,
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



<?php get_footer(); ?>
