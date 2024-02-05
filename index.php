<?php
/**
 *
 * This is the default template file for the static posts page.
 *
 * @package WordPress
 * @subpackage x-sited
 * @since x-sited 1.0
 *
 */
?>

<?php get_header(); ?>

<main aria-hidden="false">
  <article id="main" class="container">
    <h1 class="text-center">
      <?php
      echo get_the_title(get_option('page_for_posts', true));
      if (is_user_logged_in()) {
        edit_post_link();
      }
      ?>
    </h1>
    <hr>
    <div class="row justify-content-evenly">
      <?php // wp-query to get all published posts without pagination

$listAllPosts = new WP_Query([
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

        <?php while ($listAllPosts->have_posts()):
          $listAllPosts->the_post(); ?>

          <?php
          $overrideDate = get_field('date_override');
          $postDate;

          if ($overrideDate) {
            $postDate = $overrideDate;
          } else {
            $postDate = get_the_date('l, F j, Y');
          }
          ?>

          <div class="col-sm-12 col-md-6 col-lg-4 my-2">
            <a href="<?php the_permalink(); ?>" class="card">
              <div class="card-thumbnail" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
              <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <div class="card-subtitle"><?php echo $postDate; ?></div>
                <div class="card-content">
                  <p><?php echo get_the_excerpt(); ?></p>
                </div>
              </div>
            </a>
          </div>

        <?php
        endwhile; ?>
      
        </div>

      <?php endif; ?>


        <!-- <ul class="mt-3">
            <?php
// while ($listAllPosts->have_posts()):
// $listAllPosts->the_post();
?>
            <li class="mb-2">
              <a href="<?php
// the_permalink();
?>"><?php
// echo get_the_date('l, F j, Y');
?></a>
            </li>
            <?php
// endwhile;
?>
        </ul>

        <?php wp_reset_postdata(); ?>
      <?php
//else:
?>
          <p><?php
// _e('Oops... looks like there\'s nothing here just yet. Check back later!');
?></p>
      <?php
// endif;
?> -->
    </div>
  </article>
</main>
<?php get_footer(); ?>
