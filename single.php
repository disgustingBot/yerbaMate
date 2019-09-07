<?php get_header(); ?>

<!-- <div class="breadcrumb"><?php // get_breadcrumb(); ?></div> -->
<!-- <div class="breadcrumb"><?php if(function_exists('bcn_display')){ bcn_display(); } ?></div> -->



<section id="homeAtf">
  <?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<?php while(have_posts()){the_post(); ?>
    <figure class="slide">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <figcaption>
        <p id="atfCategory"><?php echo get_the_category_list(', '); ?></p>
        <h3 id="atfTitle"><?php the_title(); ?></h3>
        <p id="atfAuthor">Por <?php the_author(); ?> - <?php the_date(); ?></p>
        <?php if(function_exists('the_views')){ ?>
          <div class="theViews">
            <svg viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
            <p><?php the_views(); ?></p>
          </div>
        <?php } ?>
      </figcaption>
    </figure>
</section>
<banner>banner</banner>

<section class="postMain">
  <div class="postContent">
    <div class="theContent"><?php the_content(); ?></div>


<?php if(function_exists('the_ratings')) { the_ratings(); } ?>












        <div style="display:none"><?php comments_template(); ?></div>


        <!-- .comment-list -->
        <ul class="comment-list comments">
          <?php wp_list_comments(array('callback' => 'better_comments')); ?>
        </ul>



        <?php
        $fields   = array(
        'author' => '<p class="comment-form-author"><label for="author">' . __( 'Tu nombre' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $html_req . ' /></p>',
        'email'  => '<p class="comment-form-email" ><label for="email" >' . __( 'Tu mail  ' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . ' /></p>',
        'url'    => '<p class="comment-form-url"   ><label for="url"   >' . __( 'Sitio web' ) . '</label> ' .'<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
        );

        $args = array(
          'id_form'           => 'commentform',
          'class_form'        => 'comment-form',
          'id_submit'         => 'submit',
          'class_submit'      => 'submit',
          'name_submit'       => 'submit',
          'title_reply'       => __( 'deja tu comentario' ),
          'title_reply_to'    => __( 'respondele a %s' ),
          'cancel_reply_link' => __( 'Cancelar respuesta' ),
          'label_submit'      => __( 'Enviar' ),
          'format'            => 'xhtml',

          'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Tu comentario', 'noun' ) .
            '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
            '</textarea></p>',

          'must_log_in' => '<p class="must-log-in">' .
            sprintf(
              __( 'Para comentar debes <a href="%s">iniciar sesion</a>.' ),
              wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
            ) . '</p>',

          'logged_in_as' => '<p class="logged-in-as">' .
            sprintf(
            __( 'Has iniciado sesion como: <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Cerrar la sesion?</a>' ),
              admin_url( 'profile.php' ),
              $user_identity,
              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
            ) . '</p>',

          // 'comment_notes_before' => '<p class="comment-notes">' .
          // __( 'Tu e-mail no será publicado.' ) . ( $req ? $required_text : '' ) .
          // '</p>',

          'comment_notes_before' => '',
          'comment_notes_after'  => '',

          'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        );
        comment_form($args);
        ?>
















    <ul id="postSocialMenu">
      <h4>Compartir</h4>
      <li>
        <a href="">
          <svg viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg>
        </a>
      </li>
      <li>
        <a href="">
          <svg viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path></svg>
        </a>
      </li>
      <li>
        <a href="">
          <svg viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
        </a>
      </li>
      <li>
        <a href="">
          <svg viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" class=""></path></svg>
        </a>
      </li>
      <li>
        <a href="">
          <svg viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
        </a>
      </li>
    </ul>

    <?php echo get_the_tag_list('<p class="postTags"><span>TAGS</span> ','','</p>'); ?>

    <br>

    <div class="postRelated">
      <h3>Artículos relacionados</h3>
      <?php
      $related = gp_get_related_posts( get_the_ID(), 6 );
      if ( $related->have_posts() ): ?>

      <ul id="postRelatedList">
        <?php while ( $related->have_posts() ): $related->the_post(); ?>
          <li>
            <a class="card" href="<?php the_permalink(); ?>">
              <figure>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <figcaption>
                  <h6><?php the_title(); echo $featuredID; ?></h6>
                  <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
                  <!-- <p><?php echo get_the_category_list(', '); ?></p> -->
                </figcaption>
              </figure>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <ul class="postSideBar">
    <?php
    $categories = get_the_category(); // busca las categorias a las que pertenece el post
    foreach($categories as $category) { // ejecuta el codigo a continuacion una vez por cada categoria que encuentre
      $args = array('child_of' => $category->term_id); // prepara los argumentos de la solicitud

      $subCategories = get_categories($args); // encuentra las sub-categorias de la categoria en la que se encuentre el iterador
      if ($subCategories) { // si el vector sub-categorias es no vacio
        for ($h=0; $h < 4; $h++) { // toma 4 sub-categorias para armar el menu de navegacion
          echo "<li><a href='".get_category_link( $subCategories[$h]->term_id )."'><nobr>".$subCategories[$h]->name ."</nobr></a></li>"; // aqui da formato al item del menu
        }
        break;
      }
    }
    ?>
    <li class="banner" id="singleBanner">
      <?php echo do_shortcode("[the_ad id='10916']");?>
    </li>
  </ul>

</section>


<?php } wp_reset_query(); ?>

<?php get_footer(); ?>
