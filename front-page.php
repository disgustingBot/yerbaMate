<?php get_header(); ?>




  <section class="ATF">
    <img class="logoATF" src="<?php echo get_template_directory_uri(); ?>/img/logoCalaBassa.png" alt="CBbC GROUP">
    <video class="bgATF" loop="loop"  autoplay="" playsinline="" muted="" id="" preload="none" src="http://new.cbbcgroup.com/wp-content/uploads/shutterstock_25094927_2-1.mp4" />
  </section>




  <section class="section">
    <figure class="show">
      <img class="showImg parallax" data-parallax="-3" src="<?php echo get_template_directory_uri(); ?>/img/home/localizaciones.jpg" alt="">
      <figcaption class="showCaption">
        <h3>LOCALIZACIÓN</h3>
        <p>En nuestros ambientes y restaurantes respirarás y sentirás que hasta el más mínimo detalle está por y para ti.</p>
        <a class="btn" href="">IBIZA</a>
        <a class="btn" href="">ANDORRA</a>
      </figcaption>
    </figure>


    <figure class="show">
      <img class="showImg" src="<?php echo get_template_directory_uri(); ?>/img/home/gastronomia.jpg" alt="">
      <figcaption class="showCaption showRight">
        <h3>GASTRONOMIA</h3>
        <p>Cuando te sientes a la mesa, invita a todos tus sentidos. Cada plato presenta colores, sabores, aroma y texturas de auténtica tradición ibicenca. Del mar de un Bullit de Peix, a la tierra de un jamón de pata negra.</p>
        <a class="btn" href="<?php echo site_url('/gastronomia'); ?>">Ver más</a>
      </figcaption>
    </figure>



    <figure class="show">
      <img class="showImg" src="<?php echo get_template_directory_uri(); ?>/img/home/experiencias.jpg" alt="">
      <figcaption class="showCaption">
        <h3>EXPERIENCIA</h3>
        <p>Te abrimos un horizonte de actividades de ocio y descanso para que exprimas hasta el último minuto que pases con nosotros.</p>
        <a class="btn" href="<?php echo site_url('/experiencias'); ?>">Ver más</a>
      </figcaption>
    </figure>
  </section>






  <section class="section sectionArticles">

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
        <img class="postImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
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
        <img class="postImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <figcaption class="postCaption">
        <h3><?php the_title(); ?></h3>
        <p></p>
      </figcaption>
    </article>
    <?php } wp_reset_query(); ?>

    <!-- <article class="post">
      <a class="postLink" href="">
        <img class="postImg" src="https://picsum.photos/400/?blur=4" alt="">
      </a>
      <figcaption class="postCaption">
        <h4>Lorem Ipsum</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et velit maximus, condimentum quam ac, malesuada ex. Vivamus elementum laoreet velit, vitae fringilla justo rutrum ut.</p>
      </figcaption>
    </article> -->

    <article class="post postPlan">
      <a class="postLink" href="">
        <img class="postImg" src="https://picsum.photos/300/?blur=4" alt="">
      </a>
      <figcaption class="postCaption">
        <h4>Lorem Ipsum</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et velit maximus, condimentum quam ac, malesuada ex. Vivamus elementum laoreet velit, vitae fringilla justo rutrum ut.</p>
      </figcaption>
    </article>

  </section>



  <section class="section">

    <figure class="show">
      <img class="showImg" src="https://picsum.photos/1400/?blur=4" alt="">
      <figcaption class="showCaption">
        <h3>MUSICA</h3>
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
