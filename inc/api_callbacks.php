<?php
// get_publications

function get_publications($request)
{

  $args = array(
    'slug' => $request['publikationen']
  );

  $pages = get_pages($args);
  if (empty($pages)) {
    return new WP_Error('empty_category', 'there is no post in this category', array('status' => 404));
  }

  $response = new WP_REST_Response($pages);
  $response->set_status(200);

  return $response;
}
