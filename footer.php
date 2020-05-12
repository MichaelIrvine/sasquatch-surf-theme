<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sasquatch_Surf
 */

?>

</div>

<footer id="colophon" class="site-footer">
  <div class="footer-container">
    <div class="footer-banner-container">
      <?php if (get_field('footer_banner_image', 'option')) : ?>
      <img src="<?php the_field('footer_banner_image', 'option'); ?>" />
      <?php endif; ?>
    </div>
    <div class="site-info-container">
      <div class="site-info_col site-info_col-01">

        <?php
        $emailLink = get_field('footer_email', 'option');
        $phoneLink = get_field('footer_phone_number', 'option');
        $address = get_field('footer_address', 'option');
        ?>

        <a href="mailto:<?php echo $emailLink; ?>"><?php echo $emailLink; ?></a>
        <a href="tel:<?php echo $phoneLink; ?>"><?php echo $phoneLink; ?></a>

        <!-- Social Media -->
        <?php if (have_rows('footer_social_media', 'option')) : ?>

        <ul class="social-media-list">

          <?php while (have_rows('footer_social_media', 'option')) : the_row();
              $smIcon = get_sub_field('social_media_icon');
              $smLink = get_sub_field('social_media_link');
            ?>

          <li class="sm-list-item">
            <?php if ($smLink) : ?>
            <a class="sm-icon-link" href="<?php echo $smLink; ?>">
              <?php endif; ?>
              <img class="sm-icon" src="<?php echo $smIcon['url']; ?>" alt="<?php echo $smIcon['alt'] ?>" />
              <?php if ($smLink) : ?>
            </a>
            <?php endif; ?>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>

        <address>
          <p><?php echo $address; ?></p>
        </address>
      </div>
      <div class="site-info_col site-info_col-02">
        <?php if (get_field('footer_logo', 'option')) : ?>
        <img class="footer-logo" src="<?php the_field('footer_logo', 'option'); ?>" />
        <?php endif; ?>
        <?php if (get_field('footer_logotype', 'option')) : ?>
        <img class="footer-logotype" src="<?php the_field('footer_logotype', 'option'); ?>" />
        <?php endif; ?>
      </div>
      <div class="site-info_col site-info_col-03">
        <?php

        echo the_field('footer_plugin', 'option');

        ?>
      </div>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>




</body>

</html>