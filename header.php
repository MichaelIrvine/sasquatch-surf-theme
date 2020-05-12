<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sasquatch_Surf
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text"
      href="#content"><?php esc_html_e('Skip to content', 'sasquatch-surf'); ?></a>

    <header id="masthead" class="site-header">
      <div class="site-branding">
        <div class="flower-1">
          <?php echo wp_get_attachment_image(32, array('300', '100'), "", array("class" => "header-img"));  ?>
        </div>
        <?php
        the_custom_logo();
        ?>
        <div class="flower-2">
          <?php echo wp_get_attachment_image(31, array('300', '100'), "", array("class" => "header-img"));  ?>
        </div>
        <?php
        if (is_front_page() && is_home()) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </h1>
        <?php
        else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </p>
        <?php
        endif;
        $sasquatch_surf_description = get_bloginfo('description', 'display');
        if ($sasquatch_surf_description || is_customize_preview()) :
        ?>
        <p class="site-description"><?php echo $sasquatch_surf_description; /* WPCS: xss ok. */ ?></p>
        <?php endif; ?>
      </div>

      <?php
      if (is_front_page()) : ?>

      <div class="front-page--sasquatch-logo__container">
        <?php echo wp_get_attachment_image(33, array('250', '250'), "", array("class" => "front-page--sasquatch-logo"));  ?>
      </div>
      <?php endif;
      ?>



      <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
          <span class="menu-toggle-icon menu-toggle-icon__top"></span>
          <span class="menu-toggle-icon menu-toggle-icon__middle">~</span>
          <span class="menu-toggle-icon menu-toggle-icon__bottom"></span>
        </button>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ));
        ?>
      </nav>
    </header>

    <div id="content" class="site-content">