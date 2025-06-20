<?php
/**
 * Template Name: City Page - Oakland
 */

get_header();

// --- Oakland Specific Data ---
$city_name = 'Oakland';
$hero_image_url = 'https://images.unsplash.com/photo-1737514032821-4b7349986134?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "From the shores of Lake Merritt to the bustling Port of Oakland, {$city_name} is a city of rich culture and resilience. Reflect Neuro offers accessible virtual ADHD assessments for the artists, activists, and professionals who call The Town home.";
$info_box_text = "Life in {$city_name} is dynamic and fast-paced. If you're struggling to keep up with work, creative projects, or family responsibilities, our telehealth ADHD testing can provide valuable insights. We offer a confidential and convenient way to understand your cognitive health, empowering you to thrive in the East Bay.";
$locations = [
    'Jack London Square',
    'Rockridge',
    'Piedmont Avenue',
    'Grand Lake',
    'Berkeley',
    'Alameda'
];
// --- End of Oakland Specific Data ---

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
