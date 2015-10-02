<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ann_Adores
 */

?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <div id="page" class="hfeed site wrapper">

    <header class="ann-header">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_roze.png" alt="logo ann adores"></a>
       <span class="menu-link"><a href="#hoofdmenu">Menu &#x25BC;</a></span>
    </header>

    <nav class="hoofdmenu" id="hoofdmenu">
    <?php
      $defaults = array(
      'menu_class'      => 'menu',
      'echo'            => false,
      'fallback_cb'     => 'wp_page_menu',
      'items_wrap'      => '%3$s',
      'depth'           => 0
      );

      echo strip_tags(wp_nav_menu( $defaults ), '<a>' );
    ?>
    </nav>

    <main id="content" class="ann-adores">