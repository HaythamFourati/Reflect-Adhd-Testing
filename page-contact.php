<?php
/**
 * Template Name: Contact Us
 *
 * Template for displaying the Contact Us page
 */

get_header();

$phone_number = get_theme_mod('reflect_neuro_phone_number', '(818) 324-3800');
// $contact_email = get_theme_mod('reflect_neuro_contact_email', 'info@reflectneuro.com'); // You might want to add this to customizer

?>

<main id="main-content" role="main">
  

    <!-- Main Contact Section -->
    <section class="contact-content-section pb-16 sm:pb-24 bg-gradient-to-b from-blue-50 to-white pt-12">
        <div class="container mx-auto px-4 text-center">
            <!-- You can add a general title here if needed, or remove this hero section -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Get Started with Your Free Consultation</h1>
            <p class="text-lg text-gray-800 font-bold max-w-2xl mx-auto mb-2">Schedule your complimentary 15-minute consultation <br/> to discuss your ADHD assessment needs</p>

<p class="text-lg text-gray-600 max-w-2xl mx-auto mb-12"> Dr. Friedman offers a free initial consultation to answer your questions, discuss your concerns, and determine if our virtual ADHD assessment is right for you.</p>
        </div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid lg:grid-cols-5 gap-10 lg:gap-12 items-start">
                
                <!-- Left Column: Contact Form -->
                <div class="lg:col-span-3 bg-white p-8 rounded-lg shadow-lg border border-neutral-200">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Schedule Your Consultation</h2>
                    
                    <?php 
                    // Replace '[your-contact-form-7-shortcode]' with the actual shortcode from Contact Form 7 plugin
                    // Example: echo do_shortcode('[contact-form-7 id="your-id" title="Contact form 1"]'); 
                    echo do_shortcode('[contact-form-7 id="34b1f16" title="adhd contact"]');;
                    ?>
                </div>

                <!-- Right Column: Contact Information -->
                <div class="lg:col-span-2 space-y-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2 lg:mb-8">Contact Information</h2>
                    
                    <div class="contact-info-block bg-white p-6 rounded-lg shadow-md border border-neutral-200">
                        <div class="flex items-start">
                            <svg class="w-8 h-8 text-blue-600 mr-4 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-1">Phone</h3>
                                <a href="tel:<?php echo esc_attr($phone_number); ?>" class="text-gray-700 hover:text-blue-600 text-lg"><?php echo esc_html($phone_number); ?></a>
                                <p class="text-sm text-gray-500 mt-1">Available Monday - Friday, 9 AM - 5 PM PST</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-block bg-white p-6 rounded-lg shadow-md border border-neutral-200">
                        <div class="flex items-start">
                             <svg class="w-8 h-8 text-blue-600 mr-4 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-1">Service Area</h3>
                                <p class="text-gray-700">Telehealth Services Statewide</p>
                                <p class="text-sm text-gray-500 mt-1">Available to all California residents via secure video platform</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-block bg-white p-6 rounded-lg shadow-md border border-neutral-200">
                        <div class="flex items-start">
                            <svg class="w-8 h-8 text-blue-600 mr-4 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-1">Response Time</h3>
                                <p class="text-gray-700">Within 24 hours</p>
                                <p class="text-sm text-gray-500 mt-1">We'll contact you promptly to schedule your free consultation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/cta-section'); ?>
</main>

<?php get_footer(); ?>
