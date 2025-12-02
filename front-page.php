<?php
/**
 * The template for displaying the front page.
 *
 * @package Reflect_Neuro
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="hero-section bg-gradient-to-b from-white to-blue-50 py-16 sm:py-24">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                
                <!-- Left Column: Content -->
                <div class="text-center md:text-left">
                    <h1 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 leading-tight mb-4">
                        Expert Virtual Neuropsychological <span class="text-blue-600">Testing Throughout California</span>
                    </h1>
                    <p class="text-lg md:text-xl font-semibold text-gray-700 mb-6">
                        Affordable, Clear, and Virtual ADHD Diagnosis <br/> for Teens & Adults (16+)
                    </p>
                    <p class="text-gray-600 mb-8">
                        Led by Dr. Judith Friedman and Dr. Goldsmith, clinical neuropsychologists with Harvard and UCLA training. Get your comprehensive ADHD assessment from the comfort of your home with experts uniquely qualified to diagnose ADHD and other neurologically-based conditions.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="<?php echo esc_url(get_theme_mod('cta_url', '/contact')); ?>" class="w-full sm:w-auto bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-md transition duration-300 text-center font-semibold">
                            <?php echo esc_html(get_theme_mod('cta_text', 'Book Free Consultation')); ?>
                        </a>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '(818) 324-3800'))); ?>" class="w-full sm:w-auto bg-white border border-gray-300 hover:bg-gray-100 text-gray-700 px-8 py-3 rounded-md transition duration-300 flex items-center justify-center font-semibold">
                             <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                            Call <?php echo esc_html(get_theme_mod('phone_number', '(818) 324-3800')); ?>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Image -->
                <div class="rounded-lg shadow-lg w-full h-[500px] md:h-[600px] overflow-hidden">
                    <img src="<?php echo esc_url(get_theme_mod('front_page_hero_image', 'https://images.unsplash.com/photo-1501594907352-04cda38ebc29?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')); ?>" alt="<?php echo esc_attr(get_theme_mod('front_page_hero_image_alt', 'Golden Gate Bridge at sunset, representing California telehealth services')); ?>" class="w-full h-full object-cover">
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section bg-white py-16 sm:py-24">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Why Choose Reflect Neuro for Your ADHD Assessment?</h2>
                <p class="mt-4 text-lg text-gray-600">We make ADHD testing accessible, affordable, and convenient for all Californians</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1: Quick & Convenient -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Quick & Convenient</h3>
                    <p class="text-gray-600">Complete your ADHD assessment from home in 3-4 hours</p>
                </div>

                <!-- Feature 2: Licensed & Trusted -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.623 0-1.306-.226-2.57-.648-3.748m-1.025-3.748A11.959 11.959 0 0012 2.75c-2.096 0-4.044.59-5.742 1.566" /></svg>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Licensed & Trusted</h3>
                    <p class="text-gray-600">Clinical neuropsychologists with specialized brain-behavior training</p>
                </div>

                <!-- Feature 3: Teens & Adults -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Teens & Adults (16+)</h3>
                    <p class="text-gray-600">Comprehensive ADHD testing for teenagers and adults</p>
                </div>

                <!-- Feature 4: Harvard & UCLA Trained -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Harvard & UCLA Trained</h3>
                    <p class="text-gray-600">Expert neuropsychological assessments with detailed reports</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert Diagnosis Section -->
    <section class="expert-diagnosis-section bg-gray-50 py-16 sm:py-24">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                <!-- Left Column: Content -->
                <div class="text-gray-700">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Expert ADHD Diagnosis, <span class="text-blue-600">From Your Home</span></h2>
                    <p class="mb-6">
                        ADHD is a complex neurodevelopmental disorder that requires specialized expertise to diagnose accurately. As clinical neuropsychologists with advanced training in brain-behavior relationships, we’re uniquely qualified to distinguish true ADHD from other conditions that may appear similar.
                    </p>
                    <p class="mb-6">
                        We use only gold-standard, evidence-based assessment tools to ensure accurate and reliable results. Every evaluation is tailored to the unique needs of each individual – we don’t believe in one-size-fits-all. Our personalized approach helps us understand your specific challenges and strengths, so we can provide clear answers and actionable guidance for your next steps.
                    </p>
                    <p class="mb-8">
                        Many bright individuals, especially women, have been underdiagnosed and have struggled through life with unrecognized Inattentive ADHD. Our comprehensive virtual assessments bring expert evaluation directly to you, eliminating barriers and making professional care accessible.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <!-- Featurette 1: Specialized Training -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600 bg-blue-100 p-2 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" /></svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Specialized Neuropsychological Training</h3>
                                <p class="text-sm text-gray-600">Our clinical neuropsychologists have specialized training in brain-behavior relationships, making us uniquely qualified to diagnose ADHD and other neurologically based conditions.</p>
                            </div>
                        </div>

                        <!-- Featurette 2: Evidence-Based Methods -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-orange-500 bg-orange-100 p-2 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Evidence-Based Methods</h3>
                                <p class="text-sm text-gray-600">Our assessment protocols follow the latest research and clinical guidelines, ensuring accurate diagnosis and personalized recommendations for complex cases.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Image Collage -->
                <div class="image-collage space-y-4 h-full flex flex-col">
                    <img src="https://www.reflectneuro.com/wp-content/uploads/2025/06/AdobeStock_435180115.jpg" alt="Teenager studying at a desk, representing ADHD telehealth services" class="rounded-lg shadow-xl w-full h-full object-cover aspect-[3/2] flex-grow">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="https://images.unsplash.com/photo-1663767117374-538a2a266fe1?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Person using laptop for telehealth consultation" class="rounded-lg shadow-xl w-full h-full object-cover aspect-square">
                        <img src="https://www.reflectneuro.com/wp-content/uploads/2025/06/image.jpg" alt="Telehealth session with a doctor on a laptop screen" class="rounded-lg shadow-xl w-full h-full object-cover aspect-square">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works-section bg-blue-50 py-16 sm:py-24">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">How Our Virtual ADHD Assessment Works</h2>
                <p class="mt-4 text-lg text-gray-600">Comprehensive evaluation conducted entirely online</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 text-center">
                <!-- Step 1 -->
                <div class="step-item">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-600 text-white rounded-full h-16 w-16 flex items-center justify-center text-2xl font-bold">
                            1
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Schedule Consultation</h3>
                    <p class="text-gray-600 text-sm">
                        Book your free 15-minute consultation to discuss your needs and answer any questions
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="step-item">
                    <div class="flex justify-center mb-4">
                        <div class="bg-orange-500 text-white rounded-full h-16 w-16 flex items-center justify-center text-2xl font-bold">
                            2
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Complete Assessment</h3>
                    <p class="text-gray-600 text-sm">
                        Participate in a comprehensive 3-4 hour virtual assessment including 1-hour intake from your home
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="step-item">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-600 text-white rounded-full h-16 w-16 flex items-center justify-center text-2xl font-bold">
                            3
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Receive Results</h3>
                    <p class="text-gray-600 text-sm">
                        Get your detailed report with diagnosis and personalized recommendations
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Serving Major Cities Section -->
    <section class="serving-cities-section bg-white py-16 sm:py-24">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Serving Major Cities Across California</h2>
                <p class="mt-4 text-lg text-gray-600">Virtual ADHD assessments available to residents throughout California</p>
            </div>
            <?php
            $cities = array(
                'Los Angeles', 'San Diego', 'San Jose', 'San Francisco', 'Sacramento',
                'Fresno', 'Long Beach', 'Oakland', 'Bakersfield', 'Anaheim'
            );
            ?>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-6">
                <?php foreach ($cities as $city) : ?>
                    <?php $city_slug = sanitize_title($city); ?>
                    <a href="<?php echo esc_url(home_url($city_slug .'-adhd-testing/')); ?>" class="city-card block bg-slate-50 hover:bg-slate-100 p-8 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 text-center">
                        <span class="text-lg font-semibold text-gray-700 block mb-1"><?php echo esc_html($city); ?></span>
                        <span class="text-sm text-blue-600 block">ADHD Testing</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Trusted by California Families Section -->
    <section class="trusted-families-section bg-gradient-to-b from-white to-blue-50 py-16 sm:py-24">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Trusted by California Families</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Harvard & UCLA Trained -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Harvard & UCLA Trained</h3>
                    <p class="text-gray-600 text-sm">Advanced training from Harvard and UCLA's Semel Institute for Neuroscience & Human Behavior</p>
                </div>

                <!-- Card 2: Licensed in California -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Licensed in California</h3>
                    <p class="text-gray-600 text-sm">Fully licensed clinical neuropsychologists with California state certification</p>
                </div>

                <!-- Card 3: Specialized Expertise -->
                <div class="feature-card text-center bg-white border border-gray-200 rounded-lg p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Specialized Expertise</h3>
                    <p class="text-gray-600 text-sm">Clinical neuropsychologists with specialized training in brain-behavior relationships</p>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/cta-section'); ?>

</main>

<?php
get_footer();
