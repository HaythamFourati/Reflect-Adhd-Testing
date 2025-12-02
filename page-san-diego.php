<?php
/**
 * Template Name: City Page - San Diego
 */

get_header();

// --- San Diego Specific Data ---
$city_name = 'San Diego';
$hero_image_url = 'https://images.unsplash.com/photo-1519954352454-2d5a7353e277?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "With its beautiful beaches and vibrant tech scene, life in {$city_name} is active and demanding. Reflect Neuro brings expert ADHD testing to you, offering a convenient virtual solution for residents from North County to the South Bay.";
$info_box_text = "Whether you're a student at UCSD, a professional in the biotech industry, or a parent in a busy family, unrecognized ADHD can pose significant challenges. Our telehealth assessments are designed to provide clarity and support without requiring you to commute to an office. We specialize in identifying ADHD in adults, ensuring you get an accurate diagnosis and a clear path forward.";
$locations = [
    'La Jolla',
    'Gaslamp Quarter',
    'North Park',
    'Coronado',
    'Carlsbad',
    'Chula Vista'
];
// --- End of San Diego Specific Data ---

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
