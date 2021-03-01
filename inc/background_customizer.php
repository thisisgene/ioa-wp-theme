<?php

class backgroundCustomizer
{
  public function __construct()
  {
    add_action('customize_register', array($this, 'register_customize_sections'));
  }
  public function register_customize_sections($wp_customize)
  {
    /*
        * Add settings to sections.
        */
    $this->background_section($wp_customize);
  }

  /* Sanitize Inputs */
  public function sanitize_custom_option($input)
  {
    return ($input === "No") ? "No" : "Yes";
  }
  public function sanitize_custom_text($input)
  {
    return filter_var($input, FILTER_SANITIZE_STRING);
  }
  public function sanitize_custom_url($input)
  {
    return filter_var($input, FILTER_SANITIZE_URL);
  }
  public function sanitize_custom_email($input)
  {
    return filter_var($input, FILTER_SANITIZE_EMAIL);
  }
  public function sanitize_hex_color($color)
  {
    if ('' === $color) {
      return '';
    }

    // 3 or 6 hex digits, or the empty string.
    if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color)) {
      return $color;
    }
  }

  /* Author Section */
  private function background_section($wp_customize)
  {
    // New panel for "Layout".
    $wp_customize->add_section('background-section', array(
      'title' => 'Hintergrundbild',
      'priority' => 2,
      'description' => __('', 'ioa-new'),
    ));

    // $wp_customize->add_setting('background-display', array(
    //     'default' => 'No',
    //     'sanitize_callback' => array( $this, 'sanitize_custom_option' )
    // ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'background-display-control', array(
    //     'label' => 'Display this section?',
    //     'section' => 'background-section',
    //     'settings' => 'background-display',
    //     'type' => 'select',
    //     'choices' => array('No' => 'No', 'Yes' => 'Yes')
    // )));

    // $wp_customize->add_setting('background-title', array(
    //   'default' => '',
    //   'sanitize_callback' => array($this, 'sanitize_custom_title')
    // ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'background-control', array(
    //   'label' => 'About Author',
    //   'section' => 'background-section',
    //   'settings' => 'background-title',
    //   'type' => 'input'
    // )));

    $wp_customize->add_setting('background-image', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'background-image-control', array(
      'label' => 'Image',
      'section' => 'background-section',
      'settings' => 'background-image',
      'width' => 1920,
      'height' => 1200
    )));
  }
}
