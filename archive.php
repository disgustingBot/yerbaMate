<?php get_header(); ?>




  <section class="section magazineATF">

    <h2 class="title"><?php echo get_queried_object()->name; ?></h2>
    <?php
    $categories=get_categories();
    foreach($categories as $category){
      // if ($category->slug=="plans") {
      //   echo '<a href="https://and7dreams.com/login/">'.$category->name.'</a>';
      //   continue;
      // }
      if($category->slug=="uncategorized"){continue;}
       //echo '<a class="magazineATFLink" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
    }
    ?>

  </section>


    <section class="section sectionLatest">
      <h3 class="title sectionLatestTitle">Úlitmas entradas</h3>
      <?php $i=0;
      while(have_posts()){the_post(); ?>

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



<div class="pagination">
  <?php echo paginate_links(); ?>
</div>




<?php
    // wp_nav_menu( array $args = array(
    //     'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    //     'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    //     'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    //     'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    //     'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    //     'container_id'      => "", // (string) The ID that is applied to the container.
    //     'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
    //     'before'            => "", // (string) Text before the link markup.
    //     'after'             => "", // (string) Text after the link markup.
    //     'link_before'       => "", // (string) Text before the link text.
    //     'link_after'        => "", // (string) Text after the link text.
    //     'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
    //     'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
    //     'walker'            => "", // (object) Instance of a custom walker class.
    //     'theme_location'    => "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    //     'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
    //     'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
    // ) );
    ?>


<?php get_footer(); ?>
