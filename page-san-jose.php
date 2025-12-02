<?php
/**
 * Template Name: City Page - San Jose
 */

get_header();

// --- San Jose Specific Data ---
$city_name = 'San Jose';
$hero_image_url = 'https://images.unsplash.com/photo-1605435010177-8e96475610a4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "As the heart of Silicon Valley, {$city_name} is a hub of innovation and ambition. Reflect Neuro provides streamlined virtual ADHD assessments for the tech professionals, students, and families that power this dynamic city.";
$info_box_text = "In a competitive environment like Silicon Valley, executive functioning skills are critical. If you or your teen are struggling with focus, organization, or follow-through, our expert assessments can provide the answers. We understand the unique pressures of life in {$city_name} and offer a confidential, convenient telehealth service to help you perform at your best.";
$locations = [
    'Downtown San Jose',
    'Willow Glen',
    'Santana Row',
    'Cupertino',
    'Palo Alto',
    'Campbell'
];
// --- End of San Jose Specific Data ---

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
