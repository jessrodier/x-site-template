<?php
/**
 *
 * This is the default template file for the static home page.
 *
 * @package WordPress
 * @subpackage x-sited
 * @since x-sited 1.0
 *
 */
?>

<?php get_header(); ?>

<main aria-hidden="false" id="homepage">
  <section id="main" class="container-fluid full" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/hero-background.jpg);">
  <!-- <section id="main" class="container-fluid full"> -->
    <div class="container">
      <div class="hero-announcement-box">
        <div class="content"><?php the_content(); ?></div>
      </div>
      <div class="hero">
        <div class="title-accent secondary-text mb-2">TODO Secondary Text</div>
        <div class="sub-title"><?php echo get_bloginfo('description'); ?></div>
        <div class="description">This is a todo <b>description</b> with more <b>text</b> and a good website!</div>
        <a id="cta" href="/todo-1" class="btn btn-outline-secondary">Todo Page 1 &raquo;</a>
        <a id="cta" href="/todo-2" class="btn btn-outline-secondary">Todo Page 2 &raquo;</a>
      </div>
    </div>
  </section>
  <section id="events" class="container-fluid">
    <div class="container">
      <h2 class="title">Section Header</h2>
      <p class="subtitle">Lorem ipsum dolor sit amet!</p>
      <a href="/events" id="events" class="btn btn-secondary mx-0 mb-3">view all &raquo;</a>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
          <a href="<?php the_permalink(); ?>" class="card no-thumb">
            <div class="card-body centered">
              <h5 class="card-title">Card Title</h5>
              <p class="card-meta mb-0">Jan. 1st, 2099</p>
              <p class="card-meta m-0">4:00pm</p>
              <p class="card-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="about" class="container-fluid full dark-bg">
    <div class="container">
      <h2 class="title">our story.</h2>
      <p>Well you see... it all started...</p>
    </div>
  </section> -->
  <section id="reviews" class="container-fluid dark-bg">
    <div class="container">
      <h2 class="title">reviews</h2>
      <p class="subtitle">Check out what other people are saying...</p>
      <div class="review-container">
        <p>todo: reviews here</p>
      </div>
    </div>
  </section>
  <!-- <section class="container-fluid">
    <div class="container">
      <?php
// the_field('passions_title');
?>
      <?php
// the_field('passions');
?>
    </div>
  </section> -->
  <!-- <section class="container-fluid">
    <div class="container">
      <?php
// the_field('skills_title');
?>
      <?php
// the_field('skills');
?>
    </div>
  </section> -->
</main>

<?php get_footer(); ?>
