<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300,400&display=swap" rel="stylesheet">

</head>
<body>

  <?php if(is_user_logged_in()){ ?><style>:root{--top0: var(--topCero)}</style><?php }; ?>


    <header class="header">
      <h2 class="navBar">
        <a class="headerLink<?php if(is_front_page()){echo ' active"';} ?>" href="<?php echo site_url(''); ?>">CBbC Group</a>
      </h2>
      <nav class="navBar">
        <a class="headerLink" href="">Localización</a>
        <a class="headerLink<?php if(is_category("gastronomia")){echo ' active"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
        <a class="headerLink<?php if(is_category("experiencias")){echo ' active"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="headerLink<?php if(is_page("eventos")){echo ' active"';} ?>" href="<?php echo site_url('/eventos'); ?>">Planes / Eventos</a>
        <a class="headerLink<?php if(is_page("magazine")){echo ' active"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC Life. Magazine</a>
        <a class="headerLink" href="">Galeria</a>
        <a class="headerLink" href="">Reservas</a>
      </nav>
      <button type="button" name="button">en</button>
    </header>
