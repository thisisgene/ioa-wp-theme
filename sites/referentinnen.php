<div id="content">
  <?php
  $args = array(
    'post_type' => 'referent_innen',
    'post_status' => 'publish',
    'posts_per_page' => -1
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post();
      $name = get_the_title();
      $bio = get_the_content();

      $post_image = get_field('profile_image');
      $image_size = 'medium';

  ?>
      <div class="trainer-box">
        <div class="trainer-box--image">
          <?php
          if (!empty($post_image)) : ?>
            <img src="<?php echo esc_url($post_image['url']); ?>" alt="<?php echo esc_attr($post_image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="text-wrapper">
          <div class="trainer-box--text trainer-box--name">
            <?php echo $name; ?>
          </div>
          <div class="trainer-box--text trainer-box--bio">
            <?php echo $bio; ?>
          </div>

        </div>


      </div>
  <?php
    endwhile;
    wp_reset_postdata();
  else :

  endif;
  ?>
</div>