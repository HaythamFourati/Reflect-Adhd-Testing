</main>

<footer class="bg-gray-900 text-gray-300 pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Column 1: About -->
            <div class="mb-8 md:mb-0">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-600 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold text-xl mr-3">
                        R
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white">Reflect Neuro</h3>
                        <p class="text-sm text-gray-400">ADHD Telehealth Testing</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm">
                    Affordable, clear, and virtual ADHD diagnosis for all Californians. Led by Dr. Judith Friedman with over 25 years of experience.
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="mb-8 md:mb-0">
                <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'space-y-2',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker' => new Footer_Nav_Walker()
                    ));
                } else {
                    echo '<ul class="space-y-2">';
                    echo '<li><a href="' . esc_url(home_url('/')) . '" class="hover:text-white">Home</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/about-dr-friedman/')) . '" class="hover:text-white">About Dr. Friedman</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/how-it-works/')) . '" class="hover:text-white">How It Works</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/faqs/')) . '" class="hover:text-white">FAQs</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/contact-us/')) . '" class="hover:text-white">Contact Us</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>

            <!-- Column 3 & 4: Locations -->
            <?php
            $cities = array(
                'Los Angeles', 'San Diego', 'San Jose', 'San Francisco', 'Sacramento',
                'Fresno', 'Long Beach', 'Oakland', 'Bakersfield', 'Anaheim'
            );
            $city_chunks = array_chunk($cities, 5);
            $headings = ["ADHD Testing Locations", "More Locations"];
            $i = 0;

            foreach ($city_chunks as $chunk) {
                echo '<div class="mb-8 md:mb-0">';
                echo '<h3 class="text-lg font-semibold text-white mb-4">' . $headings[$i++] . '</h3>';
                echo '<ul class="space-y-2">';
                foreach ($chunk as $city) {
                    $city_slug = sanitize_title($city);
                    echo '<li><a href="' . esc_url(home_url('/' . $city_slug . '-adhd-testing/')) . '" class="hover:text-white">ADHD Testing in ' . esc_html($city) . '</a></li>';
                }
                echo '</ul>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700 mt-12 pt-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 mb-4 md:mb-0">
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '(818) 324-3800'))); ?>" class="flex items-center hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    <?php echo esc_html(get_theme_mod('phone_number', '(818) 324-3800')); ?>
                </a>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    Telehealth Services Statewide
                </span>
            </div>
            <p>&copy; <?php echo date('Y'); ?> Reflect Neuropsychology. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php
// Custom Nav Walker for styling footer menu items
if (!class_exists('Footer_Nav_Walker')) {
    class Footer_Nav_Walker extends Walker_Nav_Menu {
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $output .= '<li>';
            
            $atts = array();
            $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
            $atts['target'] = !empty($item->target) ? $item->target : '';
            $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
            $atts['href']   = !empty($item->url) ? $item->url : '';
            $atts['class']  = 'hover:text-white';
            
            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (!empty($value)) {
                    $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }
            
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
        
        function end_el(&$output, $item, $depth = 0, $args = null) {
            $output .= '</li>';
        }
    }
}
?>

<?php wp_footer(); ?>
</body>
</html>
