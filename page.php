<?php
/**
 *
 * This is the default template for a page.
 *
 * @package WordPress
 * @subpackage x-sited
 * @since x-sited 1.0
 *
 */
?>

<?php get_header(); ?>

<main aria-hidden="false">
  <article id="main" class="white-bg container">
    <h1 class="text-center">
      <?php
      echo get_the_title();
      if (is_user_logged_in()) {
        edit_post_link();
      }
      ?>
    </h1>

    <hr>

    <?php the_content(); ?>

  </article>
</main>

<?php get_footer(); ?>
