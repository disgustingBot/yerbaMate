<?php get_header(); ?>

<!-- <div class="breadcrumb"><?php //get_breadcrumb(); ?></div> -->
<!-- <div class="breadcrumb"><?php //if(function_exists('bcn_display')){bcn_display();} ?></div> -->



<section id="archiveAtf">
  <?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <h1 id="archiveTitle"><?php the_archive_title(); ?></h1>
  <?php
  $category = get_queried_object();

  if(is_category()){
    $args = array('parent' => $category->term_id);
    $args = array('child_of' => $category->term_id);
    $categories = get_categories( $args );
    // var_dump($categories[0]);
    if ($categories) { ?>
    <nav id="archiveNav">
      <ul>
      <?php foreach($categories as $cat) {
        echo "<li><a href='". get_category_link( $cat->term_id ) ."'>". $cat->name ."</a></li>";
      } ?>
      </ul>
    </nav>
    <?php } ?>
  <?php } ?>
  <?php echo do_shortcode("[the_ad_group id='1621']"); ?>
</section>




<section class="archiveSection">
    <?php $i=0;
    while(have_posts()){the_post();  ?>
      <figure class="card<?php if ($i  % 7==0) {echo " mainCard";} ?>">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        </a>
        <figcaption>
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
          <p class="sec1MainAuthor">Por <?php the_author(); ?> - <?php the_time('F j, Y'); ?></p>
          <?php if(function_exists('the_views')){ ?>
            <div class="theViews">
              <svg viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
              <p><?php the_views(); ?></p>
            </div>
          <?php } ?>
          <p class="sec1MainExcerpt"><?php if($i % 7==0){the_excerpt();} ?></p>
          <p><?php echo get_the_category_list(', '); ?></p>
        </figcaption>
      </figure>
      <!-- <ul id="archiveAtfCategory"><?php $array2 = get_the_category(); ?> -->

        <?php
        foreach ($array2 as $valor) {
          $link = get_category_link( $valor->term_id );
          // echo '<a href="'.get_category_link( $valor->id ).'">'.$valor->name.'</a>';
          // var_dump($valor);
          // echo '<a href="';
          // echo $link;
          // echo '">';
          // echo $valor->name;
          // echo "</a>";
          // echo '<li>';
          // echo "</li>";

            // echo "<br>";
        }
        ?>
      <!-- </ul> -->


    <?php

    if ($i % 7==6){ ?>
      </section>
      <banner>
        <?php
        switch ($i) {
          case 6:
            echo do_shortcode("[the_ad id='10913']");
            break;
          case 13:
            echo do_shortcode("[the_ad id='10915']");
            break;

          default:
            echo do_shortcode("[the_ad id='']");
            break;
        }
        ?>
      </banner>
      <section class="archiveSection">
    <?php }

    $i++;} wp_reset_query(); ?>
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
