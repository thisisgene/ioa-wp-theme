<div class="mobile-container">
  <div class="sidebar mobile">
    <div class="sidebar--title">
      <a href="/">
        <div class="sidebar--title__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ioa-at-logo.png" alt="IOA Logo">
        </div>
      </a>
      <div class="sidebar--title__burger" id="nav-burger">
        <span class="burger-span"></span>

      </div>
    </div>
    <div id="navigation-mobile" class="sidebar--navigation collapsed">

      <?php wp_nav_menu(array(
        'menu' => 'side-menu'
      )); ?>

      <div class="small-menu">
        <?php wp_nav_menu(array(
          'menu' => 'side-sub-menu'
        )); ?>
      </div>

    </div>
  </div>
</div>