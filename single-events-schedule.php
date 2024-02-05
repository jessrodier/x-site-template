<?php
/**
 * This is the default template for a single event.
 *
 *
 * @package WordPress
 * @subpackage x-sited
 * @since x-sited 1.0
 * 
 */
?>

<?php get_header(); ?>

<?php
$eventDate = get_field('event_date');
$eventStart = get_field('event_start_time');
$eventEnd = get_field('event_end_time');

if ($eventStart) {
  if ($eventEnd) {
    $eventTime = ' from ' . $eventStart . ' - ' . $eventEnd;
  } else {
    $eventTime = ' at ' . $eventStart;
  }
} else {
  $eventTime = ', All Day';
}
?>

<main id="post-page" aria-hidden="false">
  <article id="main" class="container">
    <h1 class="text-center"><?php echo get_the_title(); ?></h1>
    <div class="post-meta text-center"><?php echo $eventDate .
      $eventTime; ?></div>
    <hr>
    <?php the_content(); ?>
    <p><?php echo get_field('event_description'); ?></p>
    <br>
    <p><?php echo get_field('event_html'); ?></p>
    <?php echo do_shortcode('[post-views]'); ?>
    <!-- <div class="addthis addthis_inline_share_toolbox"><strong>Share this post:</strong></div> -->
  </article>
</main>


<?php get_footer(); ?>
