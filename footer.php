<?php
// This is the footer file.
?>

  <div id="back-to-top" class="us-anchor">
    <a href="#home"><i class="fal fa-chevron-double-up"></i><span>top</span></a>
  </div>

  <img class="footer-topper" src="<?php echo get_template_directory_uri(); ?>/assets/footer-topper.svg" alt="footer topper" aria-hidden="true">
  <footer class="container-fluid">
    <div class="container">
      <div class="row justify-content-around py-3">
        <div class="col-12 col-md-3 text-center">
        <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-white.svg" alt="TRC Logo" aria-hidden="false">
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
          <h5>Contact Info</h5>
          <p><strong>Main Office:</strong></p>
          <p>Worcester, MA</p>
          <p class="mt-4"><strong>Phone:</strong></p>
          <p><a href="phone:508-340-6460">(508) 340-6460</a></p>
          <p class="mt-4"><strong>Email:</strong></p>
          <p><a href="mailto:hello@thereaccompany.com">hello@theREACcompany.com</a></p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
          <h5>Quick Links</h5>
          <?php wp_nav_menu([
            'theme_location' => 'footer-menu',
            'menu_id' => 'footer-menu',
          ]); ?>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-right">
          <h5>The REAC Company</h5>
          <p>We have a deep understanding of REAC's scoring methodology and take our commitment to quality very seriously to ensure that repairs made are meeting industry standard requirements.</p>
        </div>
      </div>
      <div class="col-12 justify-content-between text-center py-2">
        <p>&copy;Copyright <?php echo date(
          'Y'
        ); ?>&nbsp;<?php echo get_bloginfo(
  'name'
); ?>. All Rights Reserved. | Website handcrafted with <span title="love">❤️</span> by Jess.</p>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

  </footer>
  
</body> <!-- body tag opens in header.php -->

</html>
