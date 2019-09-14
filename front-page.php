<?php get_header(); ?>




  <section id="homeATF" class="ATF">
    <h2 class="title captionATF">More than a lifestyle</h2>
    <img class="logoATF lazy" data-url="<?php echo get_template_directory_uri(); ?>/img/logoCalaBassa.png" alt="CBbC GROUP">
    <video class="bgATF" src="http://new.cbbcgroup.com/wp-content/uploads/shutterstock_25094927_2-1.mp4" loop="loop"  autoplay="" playsinline="" muted="" id="" preload="none" />
  </section>




  <section class="section section1">
    <figure class="show showLocalizacion lazy-background">
      <figcaption class="showCaption">
        <h3 class="title">Localización</h3>
        <p>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</p>
        <a class="btn" href="">IBIZA</a>
        <a class="btn" href="">ANDORRA</a>
      </figcaption>
    </figure>


    <figure class="show showGastronomia lazy-background">
      <figcaption class="showCaption showRight">
        <h3 class="title">Gastronomía</h3>
        <p>Cuando te sientes a la mesa, invita a todos tus sentidos. Cada plato presenta colores, sabores, aroma y texturas de auténtica tradición ibicenca. Del mar de un Bullit de Peix, a la tierra de un jamón de pata negra.</p>
        <a class="btn btnRight" href="<?php echo site_url('/gastronomia'); ?>">Ver más</a>
      </figcaption>
    </figure>



    <figure class="show showExperiencia lazy-background">
      <!-- <img class="showImg parallax" data-parallax=".8" src="<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg" alt=""> -->
      <!-- <div class="showImg parallax lazy-background" data-parallax=".8" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg)" alt=""></div> -->
      <figcaption class="showCaption">
        <h3 class="title">Experiencia</h3>
        <p>Te abrimos un horizonte de actividades de ocio y descanso para que exprimas hasta el último minuto que pases con nosotros.</p>
        <a class="btn" href="<?php echo site_url('/experiencias'); ?>">Ver más</a>
      </figcaption>
    </figure>
  </section>






  <section class="section sectionArticles section2">

    <?php
    $categoria="gastronomia";
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>1,
      'category_name' => $categoria,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>

    <article class="post">
      <a class="postLink" href="<?php the_permalink(); ?>">
        <img class="postImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <figcaption class="postCaption">
        <h3><?php the_title(); ?></h3>
        <p></p>
      </figcaption>
    </article>
    <?php } wp_reset_query(); ?>


    <?php
    $categoria="experiencias";
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>1,
      'category_name' => $categoria,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>

    <article class="post">
      <a class="postLink" href="<?php the_permalink(); ?>">
        <img class="postImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <figcaption class="postCaption">
        <h3><?php the_title(); ?></h3>
        <p></p>
      </figcaption>
    </article>
    <?php } wp_reset_query(); ?>

    <?php
    $categoria="plans";
    $args=array(
      'post_type'=>'post',
      'posts_per_page'=>1,
      'category_name' => $categoria,
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>

    <article class="post postPlan">
      <a class="postLink" href="<?php the_permalink(); ?>">
        <img class="postImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <figcaption class="postCaption">
        <h3><?php the_title(); ?></h3>
        <p></p>
      </figcaption>
    </article>
    <?php } wp_reset_query(); ?>


  </section>



  <section class="section section3">

    <figure class="show showMusica lazy-background">
      <figcaption class="showCaption">
        <h3 class="title">Música</h3>
        <p>Música en vivo y Dj’s de todo Europa y más allá nos acercan sus últimas creaciones: chill out y fiesta, hay un ritmo para cada momento.</p>
        <a class="btn" href="">MÁS MUSICA</a>
      </figcaption>
    </figure>



  </section>

<?php
  // while(have_posts()){the_post();
  //   the_content();
  // }
?>




<?php get_footer(); ?>
