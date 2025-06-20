<?php
/**
 * Template Name: City Page - San Francisco
 */

get_header();

// --- San Francisco Specific Data ---
$city_name = 'San Francisco';
$hero_image_url = 'https://images.unsplash.com/photo-1719858403527-e171e237fe59?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "From the iconic Golden Gate to the bustling streets of the Financial District, {$city_name} demands your full attention. Reflect Neuro offers confidential and convenient virtual ADHD assessments to help you thrive in this vibrant city.";
$info_box_text = "Living in {$city_name} often means juggling a demanding career, a rich social life, and a long commute. If you're finding it hard to keep up, our specialized ADHD testing can provide clarity. We help professionals, creatives, and students across the Bay Area understand their cognitive strengths and challenges, all from the privacy of home.";
$locations = [
    'The Mission',
    'SoMa',
    'Haight-Ashbury',
    'The Marina',
    'Pacific Heights',
    'Noe Valley'
];
// --- End of San Francisco Specific Data ---

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
