<?php
$city_name = $args['city_name'] ?? 'Our City';
$hero_image_url = $args['hero_image_url'] ?? 'https://images.unsplash.com/photo-1580655653885-65763b2597d0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$hero_description = $args['hero_description'] ?? "In a city as fast paced and sprawling as {$city_name}, getting to an in-person appointment can be a challenge. Reflect Neuro offers a virtual ADHD testing solution that fits your life. Residents of {$city_name} now have access to expert ADHD evaluations without leaving home.";
$phone_number = get_theme_mod('reflect_neuro_phone_number', '(818) 324-3800');
?>
<section class="hero-section bg-neutral-50 py-16 md:py-24">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Content -->
            <div class="text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight">
                    ADHD Assessments<br>
                    in <?php echo esc_html($city_name); ?>
                </h1>
                <p class="mt-4 text-xl font-medium text-gray-600">Telehealth Testing From Home for Teens & Adults (16+)</p>
                <p class="mt-6 text-lg text-gray-700 max-w-xl">
                    <?php echo esc_html($hero_description); ?>
                </p>
                <div class="mt-8 flex flex-wrap gap-4 items-center">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition-colors duration-300">
                        Book Free Consultation
                    </a>
                    <a href="tel:<?php echo esc_attr($phone_number); ?>" class="bg-white border border-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-lg shadow-sm hover:bg-gray-50 flex items-center gap-2 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span>Call <?php echo esc_html($phone_number); ?></span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="flex items-center justify-center mt-10 lg:mt-0">
                <img src="<?php echo esc_url($hero_image_url); ?>" alt="Scenic view of <?php echo esc_attr($city_name); ?>" class="rounded-xl shadow-2xl object-cover w-full h-auto max-h-[500px]">
            </div>

        </div>
    </div>
</section>
