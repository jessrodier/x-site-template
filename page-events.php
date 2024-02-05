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
      echo get_the_title();
      if (is_user_logged_in()) {
        edit_post_link();
      }
      ?>
    </h1>
    <div class="text-center">
      <?php the_content(); ?>
    </div>

    <hr>

    <div class="row">
    <?php
    $today = date('Ymd');
    // get all published posts AFTER today's date without pagination
    $listAllPosts = new WP_Query([
      'post_type' => 'events-schedule',
      'post_status' => 'publish',
      'meta_key' => 'event_date',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
      'meta_query' => [
        [
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today,
        ],
      ],
      'posts_per_page' => -1,
    ]);
    ?>

      <?php if ($listAllPosts->have_posts()): ?>

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

            <?php
            $eventDate = get_field('event_date');
            $eventStart = get_field('event_start_time');
            $eventEnd = get_field('event_end_time');

            if ($eventStart) {
              if ($eventEnd) {
                $eventTime = $eventStart . ' - ' . $eventEnd;
              } else {
                $eventTime = ' @ ' . $eventStart;
              }
            } else {
              $eventTime = ', All Day';
            }
            ?>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
              <a href="<?php the_permalink(); ?>" class="card no-thumb">
                <div class="card-body centered">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-meta mb-0"><?php echo $eventDate; ?></p>
                  <p class="card-meta m-0"><?php echo $eventTime; ?></p>
                  <p class="card-content"><?php the_field(
                    'event_description'
                  ); ?></p>
                </div>
              </a>
            </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
      <?php else: ?>
          <p><?php _e(
            'Sorry, no events are scheduled right now. Check back later!'
          ); ?></p>
      <?php endif; ?>
    </div>
  </article>
</main>
<?php get_footer(); ?>
