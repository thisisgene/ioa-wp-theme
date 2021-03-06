<?php

require get_template_directory() . '/inc/background_customizer.php';
require get_template_directory() . '/inc/api_callbacks.php';

new backgroundCustomizer();

add_action('rest_api_init', function () {
  register_rest_route('ioa-new/v1', 'pages?slug=publikationen', array(
    'methods'  => 'GET',
    'callback' => 'get_publications'
  ));
  register_rest_route('ioa-new/v1', 'pages?slug=universitaetslehrgang', array(
    'methods'  => 'GET',
    'callback' => 'get_universitaetslehrgang'
  ));
});

// function get_background_image()
// {
//   $page = get_page_by_path('hintergrundbild');
// }

// Remove margin-top: 32px from html
function remove_admin_login_header()
{
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


// Get Background Image
function get_background_custom()
{
  return wp_get_attachment_url(get_theme_mod('background-image'));
}

// Load script
function load_my_scripts()
{

  wp_enqueue_script('aio-new-script', get_template_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'load_my_scripts');
