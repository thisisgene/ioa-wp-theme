<?php

get_header();
?>
<div class="main-container">
  <?php
  get_sidebar();

  include get_template_directory() . '/mobilemenu.php';

  include get_template_directory() . '/sites/frontpage.php';
  ?>
</div>

<?php
get_footer();
