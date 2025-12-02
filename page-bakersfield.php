<?php
/**
 * Template Name: City Page - Bakersfield
 */

get_header();

// --- Bakersfield Specific Data ---
$city_name = 'Bakersfield';
$hero_image_url = 'https://www.reflectneuro.com/wp-content/uploads/2025/06/AdobeStock_507077795.jpg';
$hero_description = "As a key hub for agriculture and energy in the southern Central Valley, {$city_name} is a city of hard workers and strong communities. Reflect Neuro brings modern, virtual ADHD assessments to your doorstep.";
$info_box_text = "Whether you work in the energy sector, study at CSUB, or are raising a family, life in {$city_name} has unique demands. Our telehealth ADHD evaluations provide a convenient and confidential way to get the answers you need to succeed, without the travel time.";
$locations = [
    'Downtown Bakersfield',
    'Seven Oaks',
    'Westchester',
    'Rosedale',
    'Delano',
    'Tehachapi'
];
// --- End of Bakersfield Specific Data ---

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
