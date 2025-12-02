<?php
/**
 * Template Name: City Page - Sacramento
 */

get_header();

// --- Sacramento Specific Data ---
$city_name = 'Sacramento';
$hero_image_url = 'https://images.unsplash.com/photo-1606188476311-f943475a7e1f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "As California's state capital, {$city_name} is a center for policy, culture, and family life. Reflect Neuro provides accessible virtual ADHD assessments for government professionals, students, and residents throughout the Sacramento Valley.";
$info_box_text = "Juggling a career in public service, academics at Sac State, or family life can be demanding. If you're struggling with focus and organization, our telehealth ADHD testing offers a convenient way to get answers. We provide expert diagnosis for adults and teens, helping you navigate the complexities of life in {$city_name}.";
$locations = [
    'Downtown',
    'Midtown',
    'East Sacramento',
    'Davis',
    'Roseville',
    'Folsom'
];
// --- End of Sacramento Specific Data ---

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
