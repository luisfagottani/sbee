<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <!-- Scripts and Styles -->
  <?php wp_head() ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

<!-- Open Header -->
<header class="header">
  <nav class="header__nav">
    <div class="header__hamburguer">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <h1 class="header__logo">
      <img src="<?php cot_showheaderlogo(); ?>" alt="Logo SBEE"><span>Sociedade Brasileira de Estudos Espiritas</span>
    </h1>
    <div class="menu-main">
      <?php if(has_nav_menu( 'main' )): ?>
        <?php wp_nav_menu( array('theme_location' => 'main' ) ) ?>
      <?php endif; ?>
    </div>
    
  </nav>
</header>


