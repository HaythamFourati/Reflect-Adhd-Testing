<?php
/**
 * Reflect Neuro Theme Customizer
 *
 * @package Reflect_Neuro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function reflect_neuro_customize_register($wp_customize) {
    // Site Identity section is already registered by WordPress
    
    // Add Theme Colors Section
    $wp_customize->add_section('reflect_neuro_colors', array(
        'title'    => __('Theme Colors', 'reflect-neuro'),
        'priority' => 30,
    ));
    
    // Primary Color
    $wp_customize->add_setting('primary_color', array(
        'default'           => '#0066CC',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Primary Color', 'reflect-neuro'),
        'section'  => 'reflect_neuro_colors',
        'settings' => 'primary_color',
    )));
    
    // Secondary Color
    $wp_customize->add_setting('secondary_color', array(
        'default'           => '#4CAF50',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __('Secondary Color', 'reflect-neuro'),
        'section'  => 'reflect_neuro_colors',
        'settings' => 'secondary_color',
    )));
    
    // Contact Information Section
    $wp_customize->add_section('reflect_neuro_contact', array(
        'title'    => __('Contact Information', 'reflect-neuro'),
        'priority' => 40,
    ));
    
    // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default'           => '(818) 324-3800',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label'    => __('Phone Number', 'reflect-neuro'),
        'section'  => 'reflect_neuro_contact',
        'type'     => 'text',
    ));
    
    // CTA Button Section
    $wp_customize->add_section('reflect_neuro_cta', array(
        'title'    => __('Call to Action', 'reflect-neuro'),
        'priority' => 50,
    ));
    
    // CTA Button Text
    $wp_customize->add_setting('cta_text', array(
        'default'           => 'Book Consultation',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('cta_text', array(
        'label'    => __('CTA Button Text', 'reflect-neuro'),
        'section'  => 'reflect_neuro_cta',
        'type'     => 'text',
    ));
    
    // CTA Button URL
    $wp_customize->add_setting('cta_url', array(
        'default'           => '/contact',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('cta_url', array(
        'label'    => __('CTA Button URL', 'reflect-neuro'),
        'section'  => 'reflect_neuro_cta',
        'type'     => 'url',
    ));
    
    // Floating Button
    $wp_customize->add_setting('show_floating_button', array(
        'default'           => true,
        'sanitize_callback' => 'reflect_neuro_sanitize_checkbox',
    ));
    
    $wp_customize->add_control('show_floating_button', array(
        'label'    => __('Show Floating CTA Button', 'reflect-neuro'),
        'section'  => 'reflect_neuro_cta',
        'type'     => 'checkbox',
    ));
}
add_action('customize_register', 'reflect_neuro_customize_register');

/**
 * Sanitize checkbox values
 */
function reflect_neuro_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}

/**
 * Generate custom CSS based on customizer settings
 */
function reflect_neuro_customizer_css() {
    $primary_color = get_theme_mod('primary_color', '#0066CC');
    $secondary_color = get_theme_mod('secondary_color', '#4CAF50');
    
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_attr($primary_color); ?>;
            --secondary-color: <?php echo esc_attr($secondary_color); ?>;
        }
        
        .primary-color {
            color: var(--primary-color);
        }
        
        .primary-bg {
            background-color: var(--primary-color);
        }
        
        .secondary-color {
            color: var(--secondary-color);
        }
        
        .secondary-bg {
            background-color: var(--secondary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-color);
            filter: brightness(90%);
        }
        
        .btn-secondary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-secondary:hover {
            background-color: var(--secondary-color);
            filter: brightness(90%);
        }
    </style>
    <?php
}
add_action('wp_head', 'reflect_neuro_customizer_css');
