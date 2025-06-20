<?php
/**
 * Template Name: FAQ
 *
 * Template for displaying the FAQ page
 */

get_header();

$faq_items = [
  [
    'question' => "How accurate are virtual ADHD assessments?",
    'answer' => "Virtual ADHD assessments conducted by Dr. Friedman maintain the same rigorous standards as in-person evaluations. Research shows that telehealth neuropsychological assessments can be just as accurate and reliable when conducted by experienced professionals using validated tools and protocols."
  ],
  [
    'question' => "What ages do you assess for ADHD?",
    'answer' => "We provide comprehensive ADHD assessments for children (ages 6+), teenagers, and adults. Dr. Friedman uses age-appropriate assessment batteries and tailors the evaluation process to each individual's developmental stage and needs."
  ],
  [
    'question' => "How long does the assessment take?",
    'answer' => "The virtual assessment typically takes 2-3 hours and can be completed in one session or split into multiple shorter sessions based on your needs and attention span. We also factor in time for breaks, especially for younger clients."
  ],
  [
    'question' => "What happens after the assessment?",
    'answer' => "Within 1-2 weeks after your assessment, you'll receive a comprehensive written report with detailed findings, diagnosis (if applicable), and personalized recommendations for treatment, accommodations, and next steps."
  ],
  [
    'question' => "Do you accept insurance?",
    'answer' => "We are currently a private-pay practice. However, we provide detailed receipts and documentation that many clients successfully submit to their insurance for potential reimbursement. We recommend checking with your insurance provider about out-of-network benefits for neuropsychological services."
  ],
  [
    'question' => "What if I don't have ADHD?",
    'answer' => "If the assessment doesn't support an ADHD diagnosis, Dr. Friedman will explore other possible explanations for your symptoms, such as anxiety, depression, learning differences, or other conditions. You'll receive recommendations regardless of the diagnostic outcome."
  ],
  [
    'question' => "Can you diagnose ADHD in one session?",
    'answer' => "Yes, Dr. Friedman's comprehensive virtual assessment is designed to gather all necessary information in one thorough session. This includes cognitive testing, clinical interviews, behavioral rating scales, and review of background information."
  ],
  [
    'question' => "What do I need for the virtual assessment?",
    'answer' => "You'll need a computer or tablet with a webcam, stable internet connection, and a quiet, private space. We'll provide detailed technical instructions and test your setup beforehand to ensure everything works smoothly."
  ],
  [
    'question' => "Is Dr. Friedman licensed in my area of California?",
    'answer' => "Yes, Dr. Friedman is licensed to practice psychology throughout the state of California. Her telehealth services are available to residents anywhere in California, from Los Angeles to San Francisco and everywhere in between."
  ],
  [
    'question' => "What makes your ADHD assessment different?",
    'answer' => "Dr. Friedman brings over 25 years of experience and Harvard/UCLA training to each assessment. She uses a comprehensive approach that goes beyond simple questionnaires, incorporating cognitive testing, clinical expertise, and personalized evaluation tailored to your unique situation."
  ],
  [
    'question' => "Can you assess for other conditions besides ADHD?",
    'answer' => "Yes, Dr. Friedman can assess for various conditions that may co-occur with or mimic ADHD, including learning disabilities, anxiety, depression, and other neurodevelopmental conditions. The assessment process is designed to identify the most accurate diagnosis."
  ],
  [
    'question' => "How much does the assessment cost?",
    'answer' => "Assessment fees vary based on the complexity and length of evaluation needed. During your free consultation, Dr. Friedman will discuss the specific cost based on your individual needs. Payment plans may be available."
  ]
];

?>

<main id="main-content" role="main">
    <!-- Hero Section for FAQ -->
    <section class="faq-hero-section bg-gradient-to-b from-blue-50 to-white py-12 sm:py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Find answers to common questions about our ADHD assessment process, services, and Dr. Friedman's approach.</p>
            <p class="text-md text-gray-700 mt-6 mb-2">For more info, call Dr. Judith.</p>
            <a href="tel:<?php echo esc_attr(get_theme_mod('reflect_neuro_phone_number', '(818) 324-3800')); ?>" class="inline-block bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-colors duration-150 text-base">
                Call (818) 324-3800 Now
            </a>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="faq-accordion-section py-12 sm:py-16 bg-white">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="space-y-4">
                <?php foreach ($faq_items as $index => $item) : ?>
                    <div class="faq-item bg-neutral-50 border border-neutral-200 rounded-lg shadow-sm overflow-hidden">
                        <button class="faq-question w-full text-left flex justify-between items-center p-5 sm:p-6 focus:outline-none hover:bg-neutral-100 transition-colors duration-150" aria-expanded="false" aria-controls="faq-answer-<?php echo $index; ?>">
                            <h2 class="text-md sm:text-lg font-semibold text-gray-800"><?php echo esc_html($item['question']); ?></h2>
                            <svg class="faq-icon w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq-answer-<?php echo $index; ?>" class="faq-answer hidden p-5 sm:p-6 border-t border-neutral-200 bg-white">
                            <p class="text-gray-700 leading-relaxed text-sm sm:text-base"><?php echo nl2br(esc_html($item['answer'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/cta-section'); ?>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const button = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            
            button.setAttribute('aria-expanded', !isExpanded);
            answer.classList.toggle('hidden');
            if (icon) {
                icon.classList.toggle('rotate-180');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
