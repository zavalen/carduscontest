<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jewelry1
 */

?>

<footer class="footer" id="contacts">
  <div class="footer__container container">
    <div class="footer__contacts">
      <h3><?php _e('Contacts'); ?></h3>
      <p>
        Estonia: Narva mnt 5,<br>
        Tallinn city, Harju county,<br>
        10117
      </p>
    </div>
    <div class="footer__question">
      <h3><?php _e('Got a question?'); ?></h3>
      <div class="footer__email">
        <a href="mailto:contest@solve.care">

          contest@solve.care
        </a>
      </div>
      <div class="footer__social">
        <a href="#">
          <img src="<?php bloginfo('template_url') ?>/img/tg.png" alt="tg">
        </a>
        <a href="#">
          <img src="<?php bloginfo('template_url') ?>/img/youtube.png" alt="youtube">
        </a>
        <a href="#">
          <img src="<?php bloginfo('template_url') ?>/img/linkedin.png" alt="linkedin">
        </a>
        <a href="#">
          <img src="<?php bloginfo('template_url') ?>/img/fb.png" alt="fb">
        </a>
      </div>


    </div>
  </div>
  <div class="container">
    <p class="copyright "></p><?php _e(' @ 2019 Solve.Care. All Rights Reserved | Terms of use | Privacy policy'); ?>
  </div>
</footer>
</div>
</div>
<?php wp_footer(); ?>

</div>
<!-- end of page -->
</body>

</html>