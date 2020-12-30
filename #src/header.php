<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jewelry1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

  <?php wp_site_icon() ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <div class="page ">
    <header class="header">
      <div class="header__container container">

        <?php echo get_custom_logo() ?>
        <nav class="header__menu menu">

          <?php
          if (has_nav_menu('menu')) {
            wp_nav_menu(
              array(
                'theme_location' => 'menu',
                'container'   => false,
                'items_wrap' => '
          <button class="hamburger hamburger--squeeze" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
          <ul class="menu__list">%3$s</ul>'
              )
            );
          }
          ?>

        </nav>
      </div>
    </header>