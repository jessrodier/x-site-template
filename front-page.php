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
              <img class="card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon-gear-wrench.svg" alt="interior and exterior repairs icon">
              <h5 class="card__title">Interior & Exterior Repair</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
          <div class="card">
            <div class="card__body centered">
              <img class="card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon-magnifier-x.svg" alt="failed inspection icon">
              <h5 class="card__title">Failed Inspection Response & Bulk Repairs</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
          <div class="card">
            <div class="card__body centered">
              <img class="card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon-bucket-mop.svg" alt="property manpower icon">
              <h5 class="card__title">Temporary & Permanent Property Manpower</h5>
            </div>
            <div class="card__footer">
              <a class="card__link" href="// TODO">Learn More &raquo;</a>
            </div>
          </div>
          <div class="card">
            <div class="card__body centered">
              <img class="card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/icon-gear-hardhat.svg" alt="unit turns icon">
              <h5 class="card__title">On-Demand Unit Turns</h5>
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
      <p>Affordable housing properties can face tremendous challenges preparing for inspections and working out of non-compliance issues, and often, properties do not have the on-hand labor resources required. The REAC Company can assist with mobilizing large or small crews on short notice while providing quality work.</p>
      <p>We have a deep understanding of REAC’s scoring methodology and take our commitment to quality very seriously to ensure that repairs made are meeting industry standard requirements according to REAC’s guidance.</p>
    </div>
  </section>

  <img class="bottom-tri" src="<?php echo get_template_directory_uri(); ?>/assets/home-section-triangle.svg" alt="section bottom" aria-hidden="true">

  <!-- What is NSPIRE? / TODO Section Type?? -->
  <section id="what-is-reac" class="container-fluid full dark-bg">
    <div class="container row">
      <div class="col-6">
        <p class="lead primary">REAC</p>
        <h2 class="title">What is REAC?</h2>
        <p class="mt-3">Real Estate Assessment Center (REAC), a division of HUD with the mission to provide customers with independent, actionable assessments that advance risk-informed decisions about the condition of the nation’s affordable housing portfolio.</p>
      </div>
      <div class="col-6">
        <img class="graphic ms-auto" src="<?php echo get_template_directory_uri(); ?>/assets/hero-bg.PNG" alt="REAC Photo" aria-hidden="true">
      </div>
    </div>
  </section>

  <!-- Something Else / TODO Section Type?? -->
  <section id="what-is-nspire" class="container-fluid full dark-bg">
    <div class="container row">
      <div class="col-6">
        <img class="graphic me-auto" src="<?php echo get_template_directory_uri(); ?>/assets/hero-bg.PNG" alt="NSPIRE Photo" aria-hidden="true">
      </div>
      <div class="col-6">
        <p class="lead primary">NSPIRE</p>
        <h2 class="title">What is NSPIRE?</h2>
        <p class="mt-3">National Standards for the Physical Inspection of Real Estate (NSPIRE), the new inspection model implemented for most properties on 10/1/23, prioritizes health, safety, and functional defects over appearance. It implements inspections that better reflect the true physical conditions of the property. The NSPIRE model supports the adoption of sound, year-round maintenance practices.</p>
      </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section id="contact-us" class="padded container-fluid" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/buildings.png);">>
    <div class="container">
      <div class="contact-form-container">
        <p class="lead primary">Contact Us</p>
        <h2 class="title">Don't wait, reach out today.</h2>
        <p>Have questions or need an estimate? We're here for you!</p>
        <p><em>Insert form here.</em></p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
