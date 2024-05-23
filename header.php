<?php
// This is the header file.
?>

<?php include 'htmlhead.php'; ?>

<body id="fluid-theme" class="container-fluid fixed-header"> <!-- body tag closes in footer.php -->

<a id="skip-to-main" href="#main">skip to main content</a>

  <header class="header container-fluid">
    <div class="header__upper">
      <div class="container">
        <div class="start"></div>
        <div class="end">
          <a href="#todo" class="me-3">CONTACT US</a>
          <a href="tel:508-340-6460" class="me-3">(508) 340-6460</a>
          <!-- TODO: Insert social icons -->
        </div>
      </div>
    </div>
    <div class="header__main">
      <div class="container">
        <a class="logo-container us-anchor" href="<?php echo get_home_url(); ?>" alt="back to home">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="TODO Logo">
        </a>
        <button id="mobile-menu" class="btn btn-text">
          <i class="far fa-bars" aria-hidden="false" title="Menu"></i>
        </button>
        <nav id="primary-nav">
          <?php wp_nav_menu([
            'theme_location' => 'header-menu',
            'menu_id' => 'header-menu',
          ]); ?>
        </nav>
        <button class="btn btn-secondary">Request Callback</button>
      </div>
    </div>
  </header>
  <div id="home"></div>
