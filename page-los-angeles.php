<?php
/**
 * Template Name: City Page - Los Angeles
 */

get_header();

// --- Los Angeles Specific Data ---
$phone_number = get_theme_mod('phone_number', '(818) 324-3800');
$city_name = 'Los Angeles';
$hero_image_url = 'https://images.unsplash.com/photo-1580655653885-65763b2597d0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = "In a city as fast paced and sprawling as {$city_name}, getting to an in-person appointment can be a challenge. Reflect Neuro offers a virtual ADHD testing solution that fits your life. Residents of {$city_name} now have access to expert ADHD evaluations without leaving home.";
$info_box_text = "Whether you're dealing with attention challenges at work in downtown {$city_name}, struggling with focus during online classes, or concerned about ADHD symptoms in your teenager, our virtual ADHD assessments provide the clarity you need. As clinical neuropsychologists with specialized training in brain-behavior relationships, we're uniquely qualified to distinguish true ADHD from other conditions. Many bright individuals, especially women, have been underdiagnosed and struggle with unrecognized Inattentive ADHD. Our telehealth approach eliminates the need to navigate {$city_name} traffic or take time off work for multiple appointments.";
$locations = [
    'Hollywood',
    'Beverly Hills',
    'Santa Monica',
    'Westwood',
    'Downtown LA',
    'Pasadena'
];
// --- End of Los Angeles Specific Data ---

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
