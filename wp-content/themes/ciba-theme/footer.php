
<footer class="footer">
  <div class="container footer-container">
  <div class="footer-inner">
    <!-- Divider Section -->
    <div class="custom-divider-container">
      <div class="custom-divider-wrapper">
        <hr class="custom-divider-line hr-1" />
        <div class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/footer-Icon.svg" alt="Logo" />
        </div>
        <hr class="custom-divider-line hr-2" />
      </div>
    </div>

    <!-- Footer Content Section -->
    <div class=" d-flex justify-content-between align-items-center w-100 mb-4">
      <!-- Left: Logo -->
      <div class="d-flex align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/logo.png" alt="Logo" width="60" height="28px"/>
      </div>

      <!-- Center: Text -->
      <div class="text-center text-muted small">
        <p><span class="text-primary">© 2024</span> Ciba. All Rights Reserved.</p> 
      </div>

      <!-- Right: Social Icons -->
      <div class="d-flex footer-icon">
        <a href="#" class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/fb.svg" alt="Logo" /></a>
        <a href="#" class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/in.svg" alt="Logo" /></a>
        <a href="#" class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/x.svg" alt="Logo" /></a>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
</footer>
<?php wp_footer();  ?>