<?php
$city_name = $args['city_name'] ?? 'Our City';
$locations = $args['locations'] ?? [
    'Hollywood',
    'Beverly Hills',
    'Santa Monica',
    'Westwood',
    'Downtown LA',
    'Pasadena'
];
?>
<section class="serving-areas-section bg-neutral-50 py-16 sm:py-24">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Serving All Areas of <?php echo esc_html($city_name); ?> and Nearby Communities</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">Our telehealth services are available to residents throughout the greater <?php echo esc_html($city_name); ?> area.</p>

        <?php if (!empty($locations)) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <?php foreach ($locations as $location) : ?>
            <div class="bg-white p-4 rounded-lg shadow-md flex items-center justify-center border border-gray-200 hover:shadow-lg transition-shadow duration-300">
                <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                <span class="text-gray-700 font-medium"><?php echo esc_html($location); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <p class="text-gray-600 max-w-3xl mx-auto text-base md:text-lg">
            No matter where you are in the <?php echo esc_html($city_name); ?> area, our virtual ADHD assessments bring professional neuropsychological testing directly to your home.
        </p>
    </div>
</section>
