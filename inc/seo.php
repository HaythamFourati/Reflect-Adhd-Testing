<?php
/**
 * SEO functions for Reflect Neuro theme
 *
 * @package Reflect_Neuro
 */

/**
 * Add meta tags to head for SEO
 */
function reflect_neuro_meta_tags() {
    // Default meta values from memory
    $default_title = 'ADHD Telehealth Testing Across California';
    $default_description = 'Professional ADHD assessments for adults & teens (16+). Virtual testing from home with clinical neuropsychologists. Serving all of California with affordable, clear diagnosis.';
    $default_keywords = 'adhd assessment california, online adhd testing, telehealth adhd diagnosis, virtual adhd evaluation';
    
    // Get current page info
    $title = '';
    $description = '';
    $keywords = '';
    
    // Check if we're on a singular post/page
    if (is_singular()) {
        global $post;
        
        // Use post title or custom SEO title if available
        $title = get_the_title($post->ID);
        
        // Use excerpt or custom SEO description if available
        if (has_excerpt($post->ID)) {
            $description = get_the_excerpt($post->ID);
        }
        
        // Get post tags as keywords if available
        if (has_tag()) {
            $tags = get_the_tags($post->ID);
            $tag_names = array();
            
            foreach ($tags as $tag) {
                $tag_names[] = $tag->name;
            }
            
            $keywords = implode(', ', $tag_names);
        }
    } elseif (is_home() || is_front_page()) {
        // Use default values for homepage
        $title = $default_title;
        $description = $default_description;
        $keywords = $default_keywords;
    } elseif (is_category() || is_tag() || is_tax()) {
        // Use term name and description for archives
        $term = get_queried_object();
        $title = $term->name;
        $description = $term->description;
    } elseif (is_post_type_archive()) {
        // Use post type name for archives
        $post_type = get_post_type_object(get_query_var('post_type'));
        $title = $post_type->labels->name;
    }
    
    // Set defaults if empty
    if (empty($title)) {
        $title = $default_title;
    }
    
    if (empty($description)) {
        $description = $default_description;
    }
    
    if (empty($keywords)) {
        $keywords = $default_keywords;
    }
    
    // City-specific SEO for city template pages
    if (is_page_template('template-adhd-city.php')) {
        $city = get_query_var('city') ? get_query_var('city') : get_field('city_name');
        
        if ($city) {
            $title = "ADHD Testing in {$city}, California | Reflect Neuro";
            $description = "Professional ADHD assessments in {$city} for adults & teens (16+). Virtual testing from home with clinical neuropsychologists. Affordable, clear diagnosis.";
            $keywords = "adhd assessment {$city}, adhd testing {$city}, telehealth adhd diagnosis {$city}, virtual adhd evaluation california";
        }
    }
    
    // Output meta tags
    echo '<meta name="description" content="' . esc_attr($description) . '" />' . "\n";
    echo '<meta name="keywords" content="' . esc_attr($keywords) . '" />' . "\n";
    
    // Open Graph tags
    echo '<meta property="og:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '" />' . "\n";
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '" />' . "\n";
    
    // Add featured image if available
    if (is_singular() && has_post_thumbnail()) {
        $img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        echo '<meta property="og:image" content="' . esc_url($img_src[0]) . '" />' . "\n";
    }
    
    // Twitter Card tags
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '" />' . "\n";
    
    // Add featured image for Twitter if available
    if (is_singular() && has_post_thumbnail()) {
        $img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        echo '<meta name="twitter:image" content="' . esc_url($img_src[0]) . '" />' . "\n";
    }
}
add_action('wp_head', 'reflect_neuro_meta_tags', 1);

/**
 * Add custom rewrite rules for city pages
 */
function reflect_neuro_rewrite_rules() {
    add_rewrite_rule(
        'adhd-testing/([^/]+)/?$',
        'index.php?pagename=adhd-testing&city=$matches[1]',
        'top'
    );
}
add_action('init', 'reflect_neuro_rewrite_rules');

/**
 * Add custom query vars
 */
function reflect_neuro_query_vars($vars) {
    $vars[] = 'city';
    return $vars;
}
add_filter('query_vars', 'reflect_neuro_query_vars');

/**
 * Modify page title for SEO
 */
function reflect_neuro_title_separator($sep) {
    return '|';
}
add_filter('document_title_separator', 'reflect_neuro_title_separator');

/**
 * Modify page title parts for SEO
 */
function reflect_neuro_title_parts($title) {
    // City-specific title for city template pages
    if (is_page_template('template-adhd-city.php')) {
        $city = get_query_var('city') ? get_query_var('city') : get_field('city_name');
        
        if ($city) {
            $title['title'] = "ADHD Testing in {$city}, California";
        }
    } elseif (is_front_page()) {
        // Use default title for homepage
        $title['title'] = 'ADHD Telehealth Testing Across California';
    }
    
    return $title;
}
add_filter('document_title_parts', 'reflect_neuro_title_parts');
