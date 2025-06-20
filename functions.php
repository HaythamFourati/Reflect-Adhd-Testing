<?php
/**
 * Reflect Neuro Theme functions and definitions
 *
 * @package Reflect_Neuro
 */

// Define theme version for caching
define('REFLECT_NEURO_VERSION', '1.0.0');

/**
 * Enqueue scripts and styles
 */
function reflect_neuro_load_assets() {
  // Main stylesheet
  wp_enqueue_style('reflect-neuro-style', get_theme_file_uri('/build/index.css'), array(), REFLECT_NEURO_VERSION);
  
  // Main JavaScript
  wp_enqueue_script('reflect-neuro-script', get_theme_file_uri('/build/index.js'), array('wp-element'), REFLECT_NEURO_VERSION, true);
  
  // Google Fonts - Nunito Sans
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap', array(), null);
  
  // Contact Form fixes
  wp_enqueue_style('contact-form-fixes', get_theme_file_uri('/assets/css/contact-form-fixes.css'), array(), REFLECT_NEURO_VERSION);
  
  // Localize script with site data
  wp_localize_script('reflect-neuro-script', 'reflectNeuroData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
    'home_url' => home_url(),
    'site_title' => get_bloginfo('name'),
  ));
}
add_action('wp_enqueue_scripts', 'reflect_neuro_load_assets');

/**
 * Theme setup
 */
function reflect_neuro_theme_setup() {
  // Add default posts and comments RSS feed links to head
  add_theme_support('automatic-feed-links');
  
  // Let WordPress manage the document title
  add_theme_support('title-tag');
  
  // Enable support for Post Thumbnails on posts and pages
  add_theme_support('post-thumbnails');
  
  // Add support for responsive embeds
  add_theme_support('responsive-embeds');
  
  // Add support for custom logo
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 300,
    'flex-height' => true,
    'flex-width' => true,
  ));
  
  // Register navigation menus
  register_nav_menus(array(
    'primary' => esc_html__('Primary Menu', 'reflect-neuro'),
    'footer' => esc_html__('Footer Menu', 'reflect-neuro'),
  ));
}
add_action('after_setup_theme', 'reflect_neuro_theme_setup');

/**
 * Register widget areas
 */
function reflect_neuro_widgets_init() {
  register_sidebar(array(
    'name' => esc_html__('Sidebar', 'reflect-neuro'),
    'id' => 'sidebar-1',
    'description' => esc_html__('Add widgets here.', 'reflect-neuro'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ));
  
  register_sidebar(array(
    'name' => esc_html__('Footer Widgets', 'reflect-neuro'),
    'id' => 'footer-1',
    'description' => esc_html__('Add footer widgets here.', 'reflect-neuro'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'reflect_neuro_widgets_init');

/**
 * Include additional files
 */
// Load Customizer settings
require get_template_directory() . '/inc/customizer.php';

// Load Schema markup functions
require get_template_directory() . '/inc/schema.php';

// Load SEO functions
require get_template_directory() . '/inc/seo.php';

/**
 * Add custom image sizes
 */
add_image_size('reflect-hero', 1200, 600, true);
add_image_size('reflect-thumbnail', 400, 300, true);

/**
 * Add custom body class
 */
function reflect_neuro_body_classes($classes) {
  // Add a class for the city-specific pages
  if (is_page_template('template-adhd-city.php')) {
    $classes[] = 'city-page';
  }
  
  return $classes;
}
add_filter('body_class', 'reflect_neuro_body_classes');

/**
 * Customize excerpt length
 */
function reflect_neuro_excerpt_length($length) {
  return 20;
}
add_filter('excerpt_length', 'reflect_neuro_excerpt_length');

/**
 * Customize excerpt more
 */
function reflect_neuro_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'reflect_neuro_excerpt_more');

/**
 * Add Tailwind classes to the custom logo img tag.
 */
function reflect_neuro_custom_logo_class($html) {
    $html = str_replace('class="custom-logo"', 'class="custom-logo h-16 w-auto"', $html);
    $html = str_replace('class="custom-logo-link"', 'class="custom-logo-link inline-block"', $html); // Ensure the link doesn't add extra space
    return $html;
}
add_filter('get_custom_logo', 'reflect_neuro_custom_logo_class');