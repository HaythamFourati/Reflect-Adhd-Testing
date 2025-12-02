<?php
/**
 * Template part for displaying the reusable Call to Action section.
 *
 * @package Reflect_Neuro
 */
?>
<section class="cta-section bg-blue-600 text-white py-16 sm:py-24">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Ready to Get Your ADHD Assessment?
        </h2>
        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            Take the first step towards understanding your ADHD with a comprehensive virtual assessment.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="<?php echo esc_url(get_theme_mod('cta_url', home_url('/contact'))); ?>" class="w-full sm:w-auto bg-white hover:bg-gray-100 text-blue-600 px-8 py-3 rounded-md transition duration-300 text-center font-semibold shadow-md">
                Schedule Free Consultation
            </a>
            <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="w-full sm:w-auto border-2 border-white hover:bg-white hover:text-blue-600 text-white px-8 py-3 rounded-md transition duration-300 text-center font-semibold">
                Learn More About Our Process
            </a>
        </div>
    </div>
</section>
