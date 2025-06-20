<?php
/**
 * Schema.org markup implementation
 *
 * @package Reflect_Neuro
 */

/**
 * Add LocalBusiness schema markup to the footer
 */
function reflect_neuro_local_business_schema() {
    // Get customizer settings
    $phone = get_theme_mod('phone_number', '(818) 324-3800');
    
    // Build the schema markup
    $schema = array(
        '@context'  => 'https://schema.org',
        '@type'     => 'MedicalBusiness',
        '@id'       => home_url('#organization'),
        'name'      => 'Reflect Neuro',
        'url'       => home_url(),
        'logo'      => get_theme_mod('custom_logo') ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') : '',
        'image'     => get_theme_mod('custom_logo') ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') : '',
        'telephone' => $phone,
        'description' => get_bloginfo('description'),
        'priceRange' => '$$',
        'areaServed' => array(
            '@type' => 'State',
            'name'  => 'California'
        ),
        'medicalSpecialty' => 'ADHD Assessment',
        'availableService' => array(
            '@type' => 'MedicalTest',
            'name'  => 'ADHD Telehealth Testing'
        )
    );
    
    // Output the schema markup
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}
add_action('wp_footer', 'reflect_neuro_local_business_schema');

/**
 * Add FAQ schema markup to FAQ pages
 * 
 * @param array $faq_items Array of FAQ items with 'question' and 'answer' keys
 */
function reflect_neuro_faq_schema($faq_items) {
    if (empty($faq_items) || !is_array($faq_items)) {
        return;
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'FAQPage',
        'mainEntity' => array()
    );
    
    foreach ($faq_items as $item) {
        if (!isset($item['question']) || !isset($item['answer'])) {
            continue;
        }
        
        $schema['mainEntity'][] = array(
            '@type'          => 'Question',
            'name'           => $item['question'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => $item['answer']
            )
        );
    }
    
    // Output the schema markup
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Add breadcrumb schema markup
 * 
 * @param array $breadcrumbs Array of breadcrumb items with 'name' and 'url' keys
 */
function reflect_neuro_breadcrumb_schema($breadcrumbs) {
    if (empty($breadcrumbs) || !is_array($breadcrumbs)) {
        return;
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'BreadcrumbList',
        'itemListElement' => array()
    );
    
    $position = 1;
    foreach ($breadcrumbs as $item) {
        if (!isset($item['name']) || !isset($item['url'])) {
            continue;
        }
        
        $schema['itemListElement'][] = array(
            '@type'    => 'ListItem',
            'position' => $position,
            'name'     => $item['name'],
            'item'     => $item['url']
        );
        
        $position++;
    }
    
    // Output the schema markup
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Add WebPage schema markup
 */
function reflect_neuro_webpage_schema() {
    global $post;
    
    if (!is_singular()) {
        return;
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'WebPage',
        '@id'      => get_permalink() . '#webpage',
        'url'      => get_permalink(),
        'name'     => get_the_title(),
        'isPartOf' => array(
            '@id' => home_url('#organization')
        ),
        'datePublished' => get_the_date('c'),
        'dateModified'  => get_the_modified_date('c')
    );
    
    // Add description if available
    if (has_excerpt()) {
        $schema['description'] = get_the_excerpt();
    }
    
    // Output the schema markup
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}
add_action('wp_head', 'reflect_neuro_webpage_schema');
