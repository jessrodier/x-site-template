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
  <!-- Hero Section -->
  <section id="main" class="hero container-fluid">
      <div class="container">
        <div class="hero__content">
          <p class="lead secondary">20 Years of Experience</p>
          <h2 class="title">#1 Trusted REAC Specialists</h2>
          <p class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <button class="cta btn btn-secondary">Let's Get Started &raquo;</button>
        </div>
        <div class="hero__graphic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/hero-bg.PNG);"></div>
    </div>
  </section>

  <!-- Services / Band Section -->
  <section id="services" class="band container-fluid">
    <div class="container">
      <div class="band__content">
        <p class="lead tertiary">Our Services</p>
        <h2 class="title">The best of the best.</h2>
      </div>
      <div class="card-row">
          <div class="card">
            <div class="card__body centered">
              <h5 class="card__title">Interior & Exterior Repair</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
          <div class="card">
            <div class="card__body centered">
              <h5 class="card__title">Interior & Exterior Repair</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
          <div class="card">
            <div class="card__body centered">
              <h5 class="card__title">Interior & Exterior Repair</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
          <div class="card">
            <div class="card__body centered">
              <h5 class="card__title">Interior & Exterior Repair</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
    </div>
  </section>

  <!-- Our Company / Padded Section -->
  <section id="our-company" class="padded container-fluid full dark-bg">
    <div class="container">
      <hr class="short">
      <p class="lead primary">Our Company</p>
      <h2 class="title">REAC is what we do.</h2>
      <p class="mt-2">The <em>only</em> choice of the <a href="#TODO">US Housing Consultants</a></p>
      <p class="mt-5">The REAC Company specializes in affordable housing preparation repair work for all HUD REAC and state housing inspections. We can assist with all your manpower needs to alleviate backlogged work orders, fill labor shortages, or assist generally with property physical compliance and stabilization.</p>
      <p class="mt-3">Affordable housing properties can face tremendous challenges preparing for inspections and working out of non-compliance issues, and often, properties do not have the on-hand labor resources required. The REAC Company can assist with mobilizing large or small crews on short notice while providing quality work.</p>
      <p class="mt-3">We have a deep understanding of REAC’s scoring methodology and take our commitment to quality very seriously to ensure that repairs made are meeting industry standard requirements according to REAC’s guidance.</p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/home-section-triangle.svg" alt="section bottom" aria-hidden="true">
  </section>

  <!-- What is NSPIRE? / TODO Section Type?? -->
  <section id="what-is-nspire" class="container-fluid full dark-bg">
    <div class="container">
      <hr class="short">
      <p class="lead primary">Our Company</p>
      <h2 class="title">REAC is what we do.</h2>
      <p class="mt-2">The <em>only</em> choice of the <a href="#TODO">US Housing Consultants</a></p>
      <p class="mt-5">The REAC Company specializes in affordable housing preparation repair work for all HUD REAC and state housing inspections. We can assist with all your manpower needs to alleviate backlogged work orders, fill labor shortages, or assist generally with property physical compliance and stabilization.</p>
      <p class="mt-3">Affordable housing properties can face tremendous challenges preparing for inspections and working out of non-compliance issues, and often, properties do not have the on-hand labor resources required. The REAC Company can assist with mobilizing large or small crews on short notice while providing quality work.</p>
      <p class="mt-3">We have a deep understanding of REAC’s scoring methodology and take our commitment to quality very seriously to ensure that repairs made are meeting industry standard requirements according to REAC’s guidance.</p>
</div>
  </section>

  <!--  -->
  <!-- <section id="reviews" class="container-fluid dark-bg">
    <div class="container">
      <h2 class="title">reviews</h2>
      <p class="subtitle">Check out what other people are saying...</p>
      <div class="review-container">
        <p>todo: reviews here</p>
      </div>
    </div>
  </section> -->
</main>

<?php get_footer(); ?>
