<div id="frontpage-content">
  <?php
  $args = array(
    'post_type' => 'start-element',
    'post_status' => 'publish',
    'posts_per_page' => -1
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post();
      $title = get_the_title();
      $content = get_the_content();
      $post_link = get_field('custom_link');
      $post_link_text = get_field('custom_link_text');
      $post_image = get_field('custom_image');
      $image_size = 'full';
  ?>
      <div class="start-box">
        <div class="text-wrapper">
          <div class="start-box--title">
            <?php echo $title; ?>
          </div>
          <div class="start-box--content">
            <?php echo $content; ?>
          </div>
          <div class="start-box--link">
            <a href="<?php
                      echo $post_link;
                      ?>"><?php echo $post_link_text != '' ? $post_link_text : 'Weiterlesen' ?></a>
          </div>
        </div>
        <div class="start-box--image">
          <?php
          if (!empty($post_image)) : ?>
            <img src="<?php echo esc_url($post_image['url']); ?>" alt="<?php echo esc_attr($post_image['alt']); ?>" />
          <?php endif; ?>
        </div>

      </div>
  <?php
    endwhile;
    wp_reset_postdata();
  else :

  endif;
  ?>
</div>