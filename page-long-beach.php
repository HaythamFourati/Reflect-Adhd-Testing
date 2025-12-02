<?php
/**
 * Template Name: City Page - Long Beach
 */

get_header();

// --- Long Beach Specific Data ---
$city_name = 'Long Beach';
$hero_image_url = 'https://images.unsplash.com/photo-1550266679-e12e22602d34?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "With its major port and vibrant, diverse communities, {$city_name} offers a unique blend of coastal living and urban energy. Reflect Neuro delivers accessible virtual ADHD testing to residents from the waterfront to the inland neighborhoods.";
$info_box_text = "Whether you're a student at CSULB, a creative professional in the East Village Arts District, or working in the logistics industry, staying focused is key. Our telehealth assessments provide a clear, confidential path to understanding your cognitive profile, helping you navigate the opportunities in {$city_name}.";
$locations = [
    'Downtown Long Beach',
    'Belmont Shore',
    'Signal Hill',
    'Naples',
    'Lakewood',
    'Seal Beach'
];
// --- End of Long Beach Specific Data ---

?>

<main id="main-content" role="main">

    <?php 
    get_template_part('template-parts/city/hero', null, [
        'city_name' => $city_name,
        'hero_image_url' => $hero_image_url,
        'hero_description' => $hero_description
    ]); 
    ?>

    <?php 
    get_template_part('template-parts/city/why-choose', null, [
        'city_name' => $city_name,
        'info_box_text' => $info_box_text
    ]); 
    ?>

    <?php get_template_part('template-parts/city/meet-doctors'); ?>

    <?php get_template_part('template-parts/city/how-it-works'); ?>

    <?php 
    get_template_part('template-parts/city/serving-areas', null, [
        'city_name' => $city_name,
        'locations' => $locations
    ]); 
    ?>

    <?php get_template_part('template-parts/cta-section'); ?>

</main>

<?php get_footer(); ?>
