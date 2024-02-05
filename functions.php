<?php

// De-register default WordPress jQuery version, and reg/enq latest via Google CDN
if (!is_admin()) {
  wp_deregister_script('jquery');
  wp_register_script(
    'jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    false
  );
  wp_enqueue_script('jquery');
}

// Register stylesheets and scripts
add_action('wp_enqueue_scripts', 'registerStylesAndScripts');
function registerStylesAndScripts()
{
  wp_enqueue_style('stylesheet', get_stylesheet_uri());

  wp_enqueue_style('main', get_template_directory_uri() . '/styles/main.css');

  wp_enqueue_style(
    'holiday',
    get_template_directory_uri() . '/styles/holiday.css'
  );

  // Page-Based Stylesheets
  // wp_register_style( 'homepage', get_template_directory_uri() . '/styles/main.css' );

  wp_enqueue_script(
    'main',
    get_template_directory_uri() . '/scripts/main.js',
    '1.0.0.',
    true
  );
  wp_enqueue_script(
    'accordions',
    get_template_directory_uri() . '/scripts/components/accordions.js',
    true
  );
  wp_enqueue_script(
    'dropdownmenus',
    get_template_directory_uri() . '/scripts/components/dropdowns.js',
    true
  );
}

// Customize Login Page
add_action('login_enqueue_scripts', 'brandLoginPage');
function brandLoginPage()
{
  ?>

    <style type="text/css">
      body.login {
        background: #18212b !important;
      }
      body.login div#login h1 a {
        background-image: url(https://www.wilsonfamilychiropracticcenter.net/wp-content/uploads/2018/12/placeholder-logo-2.png);
        background-color: transparent;
        background-size: contain;
        width: 100%;
        height: 100px;
        color: transparent !important;
      }
      body.login .message {
        background-color: transparent;
        color: white;
        border-left: none;
        padding: 0;
        box-shadow: none;
      }
      body.login div#login {
        width: 400px;
      }
      body.login a{
        color: #ffffff !important;
        text-align: right;
      }
      body.login input.button-primary {
        background: #18212b !important;
        border-radius: 5px;
        width: 110px;
        border: none;
        font-weight: bold;
      }
      body.login form {
        border: none;
        box-shadow: 6px 8px 0px #000000;
      }
      body.login #nav {
        text-align: center;
      }
      body.login #backtoblog {
        position: absolute;
        top: 0;
        left: 0;
      }
    </style>

<?php
}

// Add Custom Fields to General Settings Page
add_action('admin_init', 'createGeneralInfoSection');
function createGeneralInfoSection()
{
  // Create General Info Section
  add_settings_section(
    'general_info_section',
    'General Info',
    'generalInfoOptionsCallback',
    'general'
  );

  // Create Business Hours Section
  add_settings_section(
    'business_hours_section',
    'Business Hours',
    'businessHoursCallback',
    'general'
  );

  // Add Phone Field
  add_settings_field(
    'co_phone',
    'Phone',
    'customSettingsCallback',
    'general',
    'general_info_section',
    ['co_phone']
  );

  // Add Sunday Hours Field
  add_settings_field(
    'co_sundayhours',
    'Sunday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_sundayhours']
  );

  // Add Monday Hours Field
  add_settings_field(
    'co_mondayhours',
    'Monday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_mondayhours']
  );

  // Add Tuesday Hours Field
  add_settings_field(
    'co_tuesdayhours',
    'Tuesday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_tuesdayhours']
  );

  // Add Wednesday Hours Field
  add_settings_field(
    'co_wednesdayhours',
    'Wednesday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_wednesdayhours']
  );

  // Add Thursday Hours Field
  add_settings_field(
    'co_thursdayhours',
    'Thursday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_thursdayhours']
  );

  // Add Friday Hours Field
  add_settings_field(
    'co_fridayhours',
    'Friday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_fridayhours']
  );

  // Add Saturday Hours Field
  add_settings_field(
    'co_saturdayhours',
    'Saturday',
    'customSettingsCallback',
    'general',
    'business_hours_section',
    ['co_saturdayhours']
  );

  // General Info Section
  register_setting('general', 'co_phone', 'esc_attr');
  // Business Hours Section
  register_setting('general', 'co_sundayhours', 'esc_attr');
  register_setting('general', 'co_mondayhours', 'esc_attr');
  register_setting('general', 'co_tuesdayhours', 'esc_attr');
  register_setting('general', 'co_wednesdayhours', 'esc_attr');
  register_setting('general', 'co_thursdayhours', 'esc_attr');
  register_setting('general', 'co_fridayhours', 'esc_attr');
  register_setting('general', 'co_saturdayhours', 'esc_attr');
}

function generalInfoOptionsCallback()
{
  // Section Callback
  echo '<p>Basic company details that can be edited in one location and re-used across the website.</p>';
}

function businessHoursCallback()
{
  // Section Callback
  echo '<p>Enter the hours for the business as you wish for them to appear on the front end.</p>';
}

function customSettingsCallback($args)
{
  // Field Callback
  $option = get_option($args[0]);
  echo '<input type="text" id="' .
    $args[0] .
    '" name="' .
    $args[0] .
    '" value="' .
    $option .
    '" />';
}

// Register Menus
add_action('init', 'registerCustomMenus');
function registerCustomMenus()
{
  register_nav_menus([
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
  ]);
}

// Remove admin bar for logged in users
show_admin_bar(false);

// Add Theme Support
add_theme_support('post-thumbnails');

// Remove Junk From Head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
?>
