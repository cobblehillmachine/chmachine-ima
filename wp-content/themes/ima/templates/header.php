<header class="banner">
  <div class="container">
    <div class="logo">
      <a href="/">
        <img src="/wp-content/themes/ima/assets/images/logo.png">
      </a>
    </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
