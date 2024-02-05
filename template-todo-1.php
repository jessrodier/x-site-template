<?php
/**
 *
 * This is the default template file for the todo 1 page.
 *
 * Template Name: TODO 1 Page
 *
 * @package WordPress
 * @subpackage x-sited
 * @since x-sited 1.0
 *
 */
?>

<?php get_header(); ?>

<main id="menus" aria-hidden="false">
  <article id="main" class="white-bg container">
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

    <div class="accordion col-12 col-sm-6 mt-3 mx-auto">
      <button type="button" class="accordion-header" data-target="jumpToMenu" aria-expanded="false" aria-controls="jumpToMenu">
        <h4 id="jumpToMenuHeading">Skip to...</h4>
        <div class="toggle-icon">
          <i class="far fa-chevron-down" aria-hidden="true"></i>
        </div>
      </button>
      <div id="jumpToMenu" class="accordion-content" aria-labelledby="jumpToMenuHeading">
        <ul class="jump-to us-list text-center">
          <li>
            <a href="#signature">Saloon Signatures</a>
          </li>
          <li>
            <a href="#seasonal">Seasonal Cocktails</a>
          </li>
          <?php if (get_field('has_holiday_cocktails')): ?>
            <li>
              <a href="#holiday"><?php echo the_field('holiday_name'); ?></a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>

    <!-- Saloon Signatures -->
    <section id="signature">

      <h3>Saloon Signature Cocktails</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'drink-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'drink_menu_category',
            'compare' => '=',
            'value' => 'Saloon',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <div class="menu-item col-12 col-lg-6">
            <h5 class="d-flex justify-content-between">
              <span class="">
                <?php the_title(); ?>
                <?php if (get_field('photo')): ?>
                  <button data-postId="<?php echo get_the_ID(); ?>" class="us-button btn photo-btn p-0 m-0">
                    <i class="fa-regular fa-camera"></i>
                  </button>
                  <div id="lightbox-<?php echo get_the_ID(); ?>" class="lightbox">
                    <button class="btn btn-primary icon-right close-btn" data-postId="<?php echo get_the_ID(); ?>">Close<i class="fa-solid fa-xmark"></i></button>
                    <img src="<?php the_field(
                      'photo'
                    ); ?>" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
              </span>
              <span class="">
                $<?php the_field('drink_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('drink_description'); ?></p>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Seasonal Cocktails -->
    <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
      'post_type' => 'drink-menu',
      'post_status' => 'publish',
      'orderby' => 'publish_date',
      'order' => 'ASC',
      'meta_query' => [
        [
          'key' => 'drink_menu_category',
          'compare' => '=',
          'value' => 'Seasonal',
        ],
      ],
      'posts_per_page' => -1,
    ]); ?>

    <?php if ($listAllPosts->have_posts()): ?>

      <section id="seasonal">

        <h3>Seasonal Cocktails</h3>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <div class="menu-item col-12 col-lg-6">
            <h5 class="d-flex justify-content-between">
              <span class="">
                <?php the_title(); ?>
                <?php if (get_field('photo')): ?>
                  <button data-postId="<?php echo get_the_ID(); ?>" class="us-button btn photo-btn p-0 m-0">
                    <i class="fa-regular fa-camera"></i>
                  </button>
                  <div id="lightbox-<?php echo get_the_ID(); ?>" class="lightbox">
                    <button class="btn btn-primary icon-right close-btn" data-postId="<?php echo get_the_ID(); ?>">Close<i class="fa-solid fa-xmark"></i></button>
                    <img src="<?php the_field(
                      'photo'
                    ); ?>" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
              </span>
              <!-- <span class="">
                $<?php
            // the_field('drink_base_price');
            ?>
              </span>   -->
            </h5>
            <p><?php the_field('drink_description'); ?></p>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

      </section>

    <?php endif; ?>

    <!-- Holiday Cocktails -->
    <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
      'post_type' => 'drink-menu',
      'post_status' => 'publish',
      'orderby' => 'publish_date',
      'order' => 'ASC',
      'meta_query' => [
        [
          'key' => 'drink_menu_category',
          'compare' => '=',
          'value' => 'Holiday',
        ],
      ],
      'posts_per_page' => -1,
    ]); ?>

    <?php if ($listAllPosts->have_posts()): ?>

      <section id="holiday">
        <h3><?php echo the_field('holiday_name'); ?></h3>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <div class="menu-item col-12 col-lg-6">
            <h5 class="d-flex justify-content-between">
              <span class="">
                <?php the_title(); ?>
                <?php if (get_field('photo')): ?>
                  <button data-postId="<?php echo get_the_ID(); ?>" class="us-button btn photo-btn p-0 m-0">
                    <i class="fa-regular fa-camera"></i>
                  </button>
                  <div id="lightbox-<?php echo get_the_ID(); ?>" class="lightbox">
                    <button class="btn btn-primary icon-right close-btn" data-postId="<?php echo get_the_ID(); ?>">Close<i class="fa-solid fa-xmark"></i></button>
                    <img src="<?php the_field(
                      'photo'
                    ); ?>" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
              </span>
              <!-- <span class="">
                $<?php
            // the_field('drink_base_price');
            ?>
              </span>   -->
            </h5>
            <p><?php the_field('drink_description'); ?></p>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

      </section>
    <?php endif; ?>
    

  </article>
</main>

<?php get_footer(); ?>
