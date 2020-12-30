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
 * @package Jewelry
 */

get_header();
?>

<main id="primary">
  <div class="main-block">
    <img src="<?php bloginfo('template_url') ?>/img/logobig.png" alt="logo">
    <p> <?php _e('How design makes healthcare better'); ?></p>
  </div>
  <div class="second-block" id="second-block">
    <div class="second-block__lefttext">
      <div class="second-block__leftbg"></div>

      <div class="second-block__content">

        <div class="container">

          <div class="second-block__body">
            <p>
              Imagine that there’s an app that lets you know how your mom is feeling from day to day. Now imagine that within that same app you can set up a doctor’s visit for her, if you notice anything abnormal. Imagine even being able to book a ride for her. All of this in a single mobile app. Wouldn’t it be amazing?
            </p>
            <p>
              The Care.Card Design Contest is the opportunity for you to create a smooth and intuitive user experience for better healthcare outcomes for your loved ones.
            </p>
            <p>
              On the base of the revolutionary blockchain ecosystem of the Care.Wallet mobile app, you can design your very own HAYFT (How Are You Feeling Today) Care.Card to track, impact, and improve the physical and mental wellbeing of those you care about.
            </p>
            <p>
              The future of healthcare starts today with your participation in the Care.Card Design Contest!
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="second-block__video">
      <img id="videoPlayBtn" src="<?php bloginfo('template_url') ?>/img/playbtn.png" alt="play">
      <div class="video_wrapper video_wrapper_full js-videoWrapper">
        <div class="loader">
          <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
        <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/G4cJ4wviwS8?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
        <div class="close-video-btn"> <?php _e('Close video'); ?></div>
      </div>
    </div>

  </div>
  <div class="join-block container">
    <h2><?php _e('Hurry up to join'); ?></h2>
    <div class="join-block__container">
      <img src="<?php bloginfo('template_url') ?>/img/join.png" alt="join">
      <div class="join-block__content">
        <p> Here at the Care.Card Design Contest, we believe that great UX and UI can change lives. Make your mark in improving healthcare outcomes, people’s perception of wellness and wellbeing, and ease of access to care for every man, woman, and child worldwide.
        </p>
        <p> <b>Join the Care.Card Design Contest Today! </b> </p>
        <button class="joinBtn"><?php _e('Join us'); ?></button>
      </div>
    </div>
  </div>
  <div class="modal">
    <div class="modal__window">
      <h2>Join us</h2>

      <form action="" method="POST" id="send_form" name="contact-form">
        <input type="email" name="email" id="email" class="email" placeholder="Email" require>
        <textarea name="message" class="message" id="message" cols="30" rows="10" placeholder="Write the message if you want" require></textarea>
        <input type="hidden" name="action" value="send_form" />
        <input type="submit" id="submit" value="<?php _e('Send'); ?>" class="submit" disabled>
      </form>
      <div class="alert" style="display: none" role="alert"></div>

    </div>


  </div>

  </div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
