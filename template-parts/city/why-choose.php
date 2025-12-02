<?php
$city_name = $args['city_name'] ?? 'Our City';
$info_box_text = $args['info_box_text'] ?? "Whether you're dealing with attention challenges at work in downtown {$city_name}, struggling with focus during online classes, or concerned about ADHD symptoms in your teenager, our virtual ADHD assessments provide the clarity you need. As clinical neuropsychologists with specialized training in brain-behavior relationships, we're uniquely qualified to distinguish true ADHD from other conditions. Many bright individuals, especially women, have been underdiagnosed and struggle with unrecognized Inattentive ADHD. Our telehealth approach eliminates the need to navigate {$city_name} traffic or take time off work for multiple appointments.";
?>
<section class="why-choose-us-section py-16 sm:py-24 bg-white">
    <div class="container mx-auto px-4 max-w-5xl text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Residents of <?php echo esc_html($city_name); ?> Choose Reflect Neuro</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">We make ADHD testing accessible and convenient for busy <?php echo esc_html($city_name); ?> families and professionals.</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Feature Card 1: Convenient -->
            <div class="feature-card text-center bg-white p-8 rounded-xl shadow-md border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="flex justify-center items-center mb-4">
                    <div class="bg-blue-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Convenient From Home</h3>
                <p class="text-gray-600">Complete your ADHD assessment from the comfort of your <?php echo esc_html($city_name); ?> home in 3-4 hours</p>
            </div>

            <!-- Feature Card 2: Expert Diagnosis -->
            <div class="feature-card text-center bg-white p-8 rounded-xl shadow-md border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="flex justify-center items-center mb-4">
                    <div class="bg-orange-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Expert Diagnosis</h3>
                <p class="text-gray-600">Clinical neuropsychologists with Harvard & UCLA training specializing in brain-behavior relationships</p>
            </div>

            <!-- Feature Card 3: Teens & Adults -->
            <div class="feature-card text-center bg-white p-8 rounded-xl shadow-md border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <div class="flex justify-center items-center mb-4">
                    <div class="bg-blue-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Teens & Adults (16+)</h3>
                <p class="text-gray-600">Comprehensive ADHD testing for teenagers and adults</p>
            </div>
        </div>

        <!-- Info Box -->
        <div class="mt-16 bg-blue-50 border-l-4 border-blue-500 text-blue-900 p-8 rounded-r-lg text-left">
            <p class="text-lg leading-relaxed">
                <?php echo esc_html($info_box_text); ?>
            </p>
        </div>
    </div>
</section>
