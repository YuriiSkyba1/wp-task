<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>13 to Life</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <div><img src="<?php the_field('header_logo'); ?>" alt="logo" class="logo" /></div>
        <div class="nav_menu_main">
        <div class="nav__menu">
          <div class="header__top">
            <a href="#" class="header__top-item">Newsletter</a>
            <a href="#" class="header__top-item">Sign up</a>
            <a href="#" class="header__top-item">Contact</a>
          </div>
          <div class="header__sub">
            <a href="#" class="header__sub-item">About</a>
            <a href="#" class="header__sub-item">Programs</a>
            <a href="#" class="header__sub-item">Impact</a>
            <a href="#" class="header__sub-item">News</a>
            <a href="#" class="header__sub-item">Gallery</a>
            <a href="#" class="header__sub-item">Get Involved</a>
          </div>
        </div>
        <div class="donate">
          <a href="#" class="donate__item">DONATE</a>
        </div>
    </div>
        </nav>
    
     
    <div class="header__banner" style="background: url(<?php the_field('header_bg'); ?>) no-repeat center;"><h1 class="header__banner-title"><?php the_field('header_title'); ?></h1></div>