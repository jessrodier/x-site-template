<?php
// This is the footer file.
?>

  <div id="back-to-top" class="us-anchor">
    <a href="#home"><i class="fal fa-chevron-double-up"></i><span>top</span></a>
  </div>

  <footer class="container-fluid">
    <div class="container">
      <nav class="col-12 py-3">
      <?php wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_id' => 'footer-menu',
      ]); ?>
      </nav>
      <div class="row justify-content-around py-3">
        <div class="col-12 col-md-4 text-center">
          <h5>Follow Us</h5>
          <div class="us-anchor mt-3 mb-4">
            <a href="https://www.facebook.com/" target="_blank" class="social-link" title="Facebook"><i class="fa-brands fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="social-link" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://goo.gl/maps/" target="_blank" class="social-link" title="Google Profile"><i class="fa-brands fa-google"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4 text-center">
          <h5>Contact Us</h5>
          <p><a href="phone:508-461-7216">(508) 461-7216</a></p>
          <p><a href="mailto:hello@todo.lol">hello@todo.lol</a></p>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center">
          <h5>Visit Us</h5>
          <p><strong>TODO Company Name</strong></p>
          <p>999 Todo Lane</p>
          <p>Todo, MA 99999</p>
        </div>
      </div>
      <div class="col-12 justify-content-between text-center py-2">
        <p>&copy;TODO - <?php echo date('Y'); ?>&nbsp;<?php echo get_bloginfo('name'); ?>. All Rights Reserved. | Website handcrafted with <span title="love">❤️</span> by Jess.</p>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

  </footer>
  
</body> <!-- body tag opens in header.php -->

</html>
