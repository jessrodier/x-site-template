<?php
/**
 * This is the default template for a single post.
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
$overrideDate = get_field('date_override');
$postDate;

if ($overrideDate) {
  $postDate = $overrideDate;
} else {
  $postDate = get_the_date('l, F j, Y');
}
?>

<main id="post-page" aria-hidden="false" class="<?php the_field(
  'page_class'
); ?>">
  <article id="main" class="white-bg container">
    <h1 class="text-center"><?php echo get_the_title(); ?></h1>
    <div class="post-meta text-center"><?php echo $postDate; ?></div>
    <hr>
    <div class="col-12 col-lg-8 mx-auto text-center">
      <?php the_content(); ?>
    </div>
    <div class="post-footer">
      <?php echo do_shortcode('[post-views]'); ?>
      &nbsp;&nbsp;|&nbsp;&nbsp;
      <a href="/updates">Back to Updates</a>
    </div>
  </article>
</main>


<?php get_footer(); ?>
