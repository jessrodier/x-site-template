<?php
/**
 *
 * This is the default template file for the Todo 2 page.
 *
 * Template Name: Todo 2 Page
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
            <a href="#specials">Today's Specials</a>
          </li>
          <li>
            <a href="#starters">Saloon Starters</a>
          </li>
          <li>
            <a href="#soups">Homemade Soups</a>
          </li>
          <li>
            <a href="#salads">Hand-Tossed Salads</a>
          </li>
          <li>
            <a href="#entrees">Entrees</a>
          </li>
          <li>
            <a href="#seafood">Seafood</a>
          </li>
          <li>
            <a href="#breakfast">Breakfast</a>
          </li>
          <li>
            <a href="#sandwiches">Sandwiches</a>
          </li>
          <li>
            <a href="#burgers">10oz. Burgers</a>
          </li>
          <li>
            <a href="#pasta">Pasta Dishes</a>
          </li>
          <li>
            <a href="#pizzas">14-in. Pizzas</a>
          </li>
          <li>
            <a href="#calzones">Calzones</a>
          </li>
          <li>
            <a href="#kids">Kids Menu</a>
          </li>
          <li>
            <a href="#dessert">Desserts</a>
          </li>
          <li>
            <a href="#seafood">Sides</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Specials -->
    <section id="specials">

      <h3>Today's Specials</h3>
      <p class="subtitle text-center"><?php the_field('specials_date'); ?></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'specials-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'category',
            'compare' => '=',
            'value' => 'Appetizers',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <?php
        $price = '';
        if (get_field('price') != '') {
          $price = ' - $' . get_field('price');
        }
        ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <div class="menu-item col-12 col-lg-8 mx-auto text-center">
          <h5><?php the_title(); ?> - $<?php the_field('price'); ?></h5>
            <p><?php the_field('description'); ?></p>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'specials-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'category',
            'compare' => '=',
            'value' => 'Entrees',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <?php
        $price = get_field('price');
        if ($price):
          $price = ' - $' . $price;
        endif;
        ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <div class="menu-item col-12 col-lg-8 mx-auto text-center">
          <h5><?php the_title(); ?> - $<?php the_field('price'); ?></h5>
            <p><?php the_field('description'); ?></p>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'specials-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'category',
            'compare' => '=',
            'value' => 'Desserts',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <?php
        $price = '';
        if (get_field('price') != ''):
          $price = ' - $' . get_field('price');
        endif;
        ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <div class="menu-item col-12 col-lg-8 mx-auto text-center">
          <h5><?php the_title(); ?> - $<?php the_field('price'); ?></h5>
            <p><?php the_field('description'); ?></p>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </section>


    <!-- Saloon Starters -->
    <section id="starters">

      <h3>Saloon Starters</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Appetizers',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

        <?php if (function_exists('show_text_block')) {
          echo show_text_block('wing-flavors', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Homemade Soups -->
    <section id="soups">

      <h3>Homemade Soups</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Soups',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
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

    <!-- Hand-Tossed Salads -->
    <section id="salads">

      <h3>Hand-Tossed Salads</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Salads',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>
        
        <?php if (function_exists('show_text_block')) {
          echo show_text_block('dressings', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Entrees -->
    <section id="entrees">

      <h3>Entrees</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Entrees',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
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

    <!-- Seafood -->
    <section id="seafood">

      <h3>Seafood</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Seafood',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
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

    <!-- Breakfast -->
    <section id="breakfast">

      <h3>Breakfast</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Breakfast',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

        <?php if (function_exists('show_text_block')) {
          echo show_text_block('sides', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Sandwiches -->
    <section id="sandwiches">

      <h3>Sandwiches</h3>
      <p class="text-center"><em>All sandwiches served with a side of our hand-cut seasoned fries.</em></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Sandwiches',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

        <?php if (function_exists('show_text_block')) {
          echo show_text_block('bread-substititions', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- 10oz. Burgers -->
    <section id="burgers">

      <h3>Ten-Ounce Burgers</h3>
      <p class="text-center"><em>Our delicious seasoned, hand-packed angus patties served with a side of our hand-cut seasoned fries. Substitute any 10oz. angus burger with a 6oz. turkey burger or a 6oz. garden vegetable burger.</em></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Burgers',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

        <?php if (function_exists('show_text_block')) {
          echo show_text_block('burger-patty-substitutions', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Pasta Dishes -->
    <section id="pasta">

      <h3>Pasta Dishes</h3>
    <p class="text-center"><em>All pasta dishes served with a side of garlic bread.</em></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Pasta',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
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

    <!-- 14-Inch Pizzas -->
    <section id="pizzas">

      <h3>14-Inch Pizzas</h3>
      <p class="text-center"><em>Hand-stretched and homemade from scratch!</em></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Pizza',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

        <?php if (function_exists('show_text_block')) {
          echo show_text_block('pizza-crust-substitute', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Calzones -->
    <section id="calzones">

      <h3>Calzones</h3>
      <p class="text-center"><em>All calzones made with our delicious, homemade and hand-stretched dough.</em></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Calzones',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
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

    <!-- Kids Menu -->
    <section id="kids">

      <h3>Buckaroos (Kids Under 12)</h3>
      <p class="text-center"><em>Served with a small drink or apple juice box and a Hoodsie cup for dessert!</em></p>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Kids Menu',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
          </div>

          <?php
          endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>

        <?php if (function_exists('show_text_block')) {
          echo show_text_block('kids-side-substitutions', true);
        } ?>

      <?php else: ?>
        <p class="text-center"><?php _e(
          'Sorry, there was a problem retrieving these menu items. Please try again later.'
        ); ?></p>
      <?php endif; ?>
    </section>

    <!-- Dessert Menu -->
    <section id="kids">

      <h3>Desserts</h3>

      <?php // get all published menu items under this category

$listAllPosts = new WP_Query([
        'post_type' => 'food-menu',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'food_menu_category',
            'compare' => '=',
            'value' => 'Desserts',
          ],
        ],
        'posts_per_page' => -1,
      ]); ?>

      <?php if ($listAllPosts->have_posts()): ?>

        <div class="row">

          <?php while ($listAllPosts->have_posts()):
            $listAllPosts->the_post(); ?>

          <?php
          $attr = '';
          if (get_field('food_attribute') != 'None') {
            $attr = '[' . get_field('food_attribute') . ']';
          }
          ?>

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
                <span class="attr"><?php echo $attr; ?></span>
              </span>
              <span class="">
                $<?php the_field('food_base_price'); ?>
              </span>  
            </h5>
            <p><?php the_field('food_description'); ?></p>
            <p class="extra"><?php the_field('food_options'); ?></p>
            <div class="extra"><?php the_field('food_addons'); ?></div>
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

    <section id="menuFooter" class="text-center">
      <p><em>*Consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness.</em></p>
      <p><em>Before placing your order, please inform your server if you or a person in your party has a food allergy.</em></p>
    </section>

  </article>
</main>

<?php get_footer(); ?>
