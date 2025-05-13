<?php wp_head();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container nav-container">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center m-0 p-0" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/logo.png" alt="Logo" width="48" height="22px"/>
      </a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler border-0 ms-auto d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Center Nav (Desktop only) -->
      <div class="mx-auto nav-pill-wrapper d-none d-lg-block">
        <!-- <ul class="navbar-nav gap-2 rounded-pill nav-menu">
          <li class="nav-item">
            <a class="nav-link nav-link-custom active" href="#"> <p>Home</p> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="#"> <p>Features</p> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="#"> <p>About Us</p> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="#"> <p>Contact Us</p></a>
          </li>
        </ul> -->
        <?php  wp_nav_menu(array('theme_location'=> 'primary-menu', 
                                                    'menu_class'=>'custom-nav' )) ?>
      </div>

      <!-- Right Actions (Desktop only) -->
      <div class="d-none d-lg-flex align-items-center gap-2">
        <div class="d-flex align-items-center gap-1 nav-lang-switch">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/Language.svg" alt="Logo" width="48" height="2px"/>
        </div>
        <a href="#" class="nav-btn-outline">Sign Up</a>
        <a href="#" class="nav-btn-primary">Log In</a>
      </div>
      
    </div>
  </nav>

  <!-- Offcanvas for mobile -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileNavLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column gap-4">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link nav-link-custom active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#">Features</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#">Contact Us</a></li>
      </ul>
      <div class="d-flex flex-column gap-2">
        <div class="d-flex align-items-center gap-1 nav-lang-switch">
          <i class="bi bi-globe"></i>
          <span>EN</span>
        </div>
        <a href="#" class="nav-btn-outline text-center">Sign Up</a>
        <a href="#" class="nav-btn-primary text-center">Log In</a>
      </div>
    </div>
  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
