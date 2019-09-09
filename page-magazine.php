<?php get_header(); ?>

<!-- <h1>eventos.php</h1> -->





  <section class="ATF ">

    MAGAZINE
    <?php
    $categories = get_categories();
    foreach($categories as $category) {
      if ($category->slug=="plans") {
        echo '<a href="https://and7dreams.com/login/">' . $category->name . '</a>';
        continue;
      }
       echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
    }
    ?>

  </section>







  <section class="section sectionStories">

    <?php
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>6,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>
      <figure class="smallCard">
        <img class="smallCardImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <figcaption class="smallCardCaption">
          <a class="smallCardLink" href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
        </figcaption>
      </figure>
    <?php } wp_reset_query(); ?>

  </section>






    <section class="section sectionFeatured">
      <h2>CBbC FEATURED</h2>
      <?php
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>6,
      );$atf=new WP_Query($args);
      while($atf->have_posts()){$atf->the_post(); ?>
        <figure class="slide">
          <img class="slideImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption class="slideCaption">
            <a class="slideLink" href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
          </figcaption>
        </figure>
      <?php } wp_reset_query(); ?>

    </section>






    <section class="section sectionSelects">
      <h2 class="selectsTitle">CBbC SELECTS</h2>
      <?php
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>15,
      );$atf=new WP_Query($args);
      while($atf->have_posts()){$atf->the_post(); ?>
        <figure class="slide slideSmall">
          <img class="slideImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption class="slideCaption">
            <a class="slideLink" href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
          </figcaption>
        </figure>
      <?php } wp_reset_query(); ?>

    </section>



<?php get_footer(); ?>
