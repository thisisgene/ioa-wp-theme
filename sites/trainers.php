<div id="content">
  <?php
  $args = array(
    'post_type' => 'trainer',
    'post_status' => 'publish',
    'posts_per_page' => -1
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post();
      $name = get_the_title();
      $bio = get_the_content();
      $phone = get_field('phone');
      $email = get_field('email');
      $location = get_field('location');
      $website = get_field('website');
      $website2 = get_field('website_2');
      $website3 = get_field('website_3');
      $website4 = get_field('website_4');
      $websites = array(
        $website,
        $website2,
        $website3,
        $website4
      );

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
          <div class="trainer-box--text trainer-box--phone">
            <?php echo $phone; ?>
          </div>
          <div class="trainer-box--text trainer-box--email">
            <?php echo $email; ?>
          </div>
          <div class="trainer-box--text trainer-box--website">
            <?php
            foreach ($websites as $website) {
              if ($website !== '' && $website !== null) : ?>
                <a href="<?php
                          echo $website['url'];
                          ?>"><?php echo $website['title'] ?></a>
            <?php
              endif;
            } ?>
          </div>
          <div class="trainer-box--text trainer-box--location">
            <?php echo $location; ?>
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