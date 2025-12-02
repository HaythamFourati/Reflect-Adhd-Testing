<?php
/**
 * Template Name: City Page - Anaheim
 */

get_header();

// --- Anaheim Specific Data ---
$city_name = 'Anaheim';
$hero_image_url = 'https://images.unsplash.com/photo-1721921566176-d3c8adb9ab87?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "Known for world-famous attractions and vibrant communities, {$city_name} is a place of excitement and activity. Reflect Neuro offers convenient virtual ADHD assessments for families, students, and professionals in the heart of Orange County.";
$info_box_text = "Keeping up with the pace of life in a major tourist destination like {$city_name} can be challenging. Whether you're a student, a professional in the hospitality industry, or managing a busy household, our telehealth ADHD testing provides a clear path to understanding your focus and executive function. Get expert answers from the comfort of your home.";
$locations = [
    'Anaheim Hills',
    'Fullerton',
    'Orange',
    'Garden Grove',
    'Irvine',
    'Santa Ana'
];
// --- End of Anaheim Specific Data ---

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
