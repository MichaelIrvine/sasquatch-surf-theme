<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sasquatch_Surf
 */

get_header();
?>
<main class="coming-soon front-page__background-image "
  style="background-image: url(<?php the_field('front_page_background_image'); ?>);">
  <div class="front-page--sasquatch-logo__container">
    <?php echo wp_get_attachment_image(33, array('250', '250'), "", array("class" => "front-page--sasquatch-logo"));  ?>
  </div>
  <div class="coming-soon__text-container">
    <h1>Sasquatch Surf</h1>
    <h3>Coming Soon</h3>
  </div>
</main>

<?php
get_footer();