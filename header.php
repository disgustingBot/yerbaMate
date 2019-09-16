<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amita:400,700|Great+Vibes|Niconne|Tangerine:400,700&display=swap" rel="stylesheet">
</head>
<body>

  <?php if(is_user_logged_in()){ ?><style>:root{--top0: var(--topCero)}</style><?php }; ?>

	<view id="load" class="load"><div class="circle"></div></view>


    <header class="header">
      <h2 class="headerCont headerLogo">
        <a class="headerLink<?php if(is_front_page()){echo ' headerLinkActive"';} ?>" href="<?php echo site_url(''); ?>">CBbC Group</a>
      </h2>
      <nav id="navBar" class="headerCont navBar">
        <a class="headerLink altLogo<?php if(is_front_page()){echo ' headerLinkActive"';} ?>" href="<?php echo site_url(''); ?>">CBbC Group</a>
        <a class="headerLink<?php if(is_page("localizacion")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/localizacion'); ?>">Localización</a>
        <a class="headerLink<?php if(is_category("gastronomia")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/category/gastronomia'); ?>">Gastronomía</a>
        <a class="headerLink<?php if(is_category("experiencias")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/category/experiencias'); ?>">Experiencias</a>
        <a class="headerLink<?php if(is_page("eventos")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/eventos'); ?>">Eventos</a>
        <a class="headerLink<?php if(is_page("magazine")){echo ' headerLinkActive"';} ?>" href="<?php echo site_url('/magazine'); ?>">CBbC Life Magazine</a>
        <a class="headerLink" href="">Galeria</a>
        <a class="headerLink" href="">Reservas</a>
        <button class="close" onclick="alternateNavBar()">
          <div class="cross"></div>
          <div class="cross cross2"></div>
        </button>
      </nav>
      <button class="burger" onclick="alternateNavBar()">
        <div class="burgerBar"></div>
        <div class="burgerBar"></div>
        <div class="burgerBar"></div>
      </button>
      <!-- <button type="button" name="button">en</button> -->
    </header>
