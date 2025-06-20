<?php
/**
 * Template Name: City Page - Fresno
 */

get_header();

// --- Fresno Specific Data ---
$city_name = 'Fresno';
$hero_image_url = 'https://images.unsplash.com/photo-1519867850-74775a87e783?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "At the heart of the Central Valley, {$city_name} is a vital hub for agriculture and community. Reflect Neuro offers convenient virtual ADHD assessments for families, students at Fresno State, and professionals across the region.";
$info_box_text = "Managing the demands of work, school, and family life in a growing city like {$city_name} requires focus. Our telehealth ADHD testing provides the clarity needed to thrive, offering expert evaluations for teens and adults without the need for long drives to a specialist's office.";
$locations = [
    'Tower District',
    'Clovis',
    'Fig Garden',
    'Sunnyside',
    'Madera',
    'Visalia'
];
// --- End of Fresno Specific Data ---

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
