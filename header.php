<?php
// Custom Nav Walker for styling menu items
if (!class_exists('Custom_Nav_Walker')) {
    class Custom_Nav_Walker extends Walker_Nav_Menu {
        // Runs when the sub-menu (ul) starts
        function start_lvl(&$output, $depth = 0, $args = null) {
            $indent = str_repeat("\t", $depth);
            // These classes use group-hover to appear when the parent li is hovered
            $output .= "\n$indent<ul class=\"sub-menu absolute z-50 mt-1 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 hidden group-hover:block\">\n";
        }

        // Runs when a menu item (li) starts
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $li_classes = ['nav-item'];
            // Add 'relative' and 'group' to parent menu items to enable group-hover
            if ($args->has_children) {
                $li_classes[] = 'relative';
                $li_classes[] = 'group';
            }
            $output .= '<li class="' . implode(' ', $li_classes) . '">';

            $atts = [
                'title'  => !empty($item->attr_title) ? $item->attr_title : '',
                'target' => !empty($item->target)     ? $item->target     : '',
                'rel'    => !empty($item->xfn)        ? $item->xfn        : '',
                'href'   => !empty($item->url)        ? $item->url        : '#',
                'class'  => 'text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200'
            ];

            // If it's a parent menu item, add classes for the dropdown arrow
            if ($args->has_children) {
                $atts['class'] .= ' inline-flex items-center';
            }
            
            $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (!empty($value)) {
                    $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $title = apply_filters('the_title', $item->title, $item->ID);
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            // Add the dropdown arrow icon
            if ($args->has_children) {
                $item_output .= '<svg class="ml-2 -mr-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>';
            }
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }

        // Runs when a menu item (li) ends
        function end_el(&$output, $item, $depth = 0, $args = null) {
            $output .= "</li>\n";
        }

        // Runs when a sub-menu (ul) ends
        function end_lvl(&$output, $depth = 0, $args = null) {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</ul>\n";
        }
    }
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <?php
                // Display the logo (custom or fallback)
                if (has_custom_logo()) {
                    the_custom_logo(); // This will output the logo, styled by our filter in functions.php
                } else {
                    // Fallback if no custom logo is set
                    echo '<a href="' . esc_url(home_url('/')) . '" class="inline-block">'; 
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/logo.png') . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="h-16 w-auto">'; // Matched height to custom logo
                    echo '</a>';
                }
                ?>

                <!-- Site Title and Tagline - Always displayed -->
                <div class="ml-3">
                    <?php if (get_bloginfo('name')) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-lg font-semibold text-blue-600 hover:text-blue-700 leading-tight">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php endif; ?>
                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) : 
                    ?>
                        <p class="text-xs text-gray-500 leading-tight"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex space-x-6">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex space-x-6',
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'          => 1,
                    'walker'         => new Custom_Nav_Walker(),
                ));
                ?>
                
                <?php if (!has_nav_menu('primary')): ?>
                    <!-- Default menu items if no menu is assigned -->
                    <ul class="flex space-x-6">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-600 hover:text-blue-600">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about-dr-friedman')); ?>" class="text-gray-600 hover:text-blue-600">About Dr. Friedman</a></li>
                        <li><a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="text-gray-600 hover:text-blue-600">How It Works</a></li>
                        <li><a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="text-gray-600 hover:text-blue-600">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/faqs')); ?>" class="text-gray-600 hover:text-blue-600">FAQs</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="text-gray-600 hover:text-blue-600">Contact Us</a></li>
                        <li class="relative group">
                            <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center">City Locations <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg></a>
                            <div class="absolute left-0 w-96 bg-white rounded-md shadow-lg p-2 hidden group-hover:block">
                                <div class="flex space-x-2">
                                    <?php
                                    $cities = array(
                                        'Los Angeles', 'San Diego', 'San Jose', 'San Francisco', 'Sacramento',
                                        'Fresno', 'Long Beach', 'Oakland', 'Bakersfield', 'Anaheim'
                                    );
                                    $city_chunks = array_chunk($cities, 5);

                                    foreach ($city_chunks as $chunk) {
                                        echo '<div class="flex-1">';
                                        foreach ($chunk as $city) {
                                            $city_slug = sanitize_title($city);
                                            echo '<a href="' . esc_url(home_url('/' . $city_slug . '-adhd-testing/')) . '" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">' . esc_html($city) . '</a>';
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </nav>
            
            <!-- Phone and CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '(818) 324-3800'))); ?>" class="text-blue-600 hover:text-blue-800">
                    <?php echo esc_html(get_theme_mod('phone_number', '(818) 324-3800')); ?>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('cta_url', '/contact')); ?>" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md transition duration-300">
                    <?php echo esc_html(get_theme_mod('cta_text', 'Book Consultation')); ?>
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button text-gray-500 hover:text-gray-600 focus:outline-none" aria-label="Toggle menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="mobile-menu hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <?php if (has_nav_menu('primary')): ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'mobile-menu-items',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ));
                ?>
            <?php else: ?>
                <!-- Default mobile menu items -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Home</a>
                <a href="<?php echo esc_url(home_url('/about-dr-friedman')); ?>" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">About Dr. Friedman</a>
                <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">How It Works</a>
                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Blog</a>
                <a href="<?php echo esc_url(home_url('/faqs')); ?>" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">FAQs</a>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Contact Us</a>
                
                <!-- City Locations Dropdown -->
                <div class="relative city-dropdown">
                    <button class="city-dropdown-button w-full text-left px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100 flex justify-between items-center">
                        City Locations
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="city-dropdown-menu hidden px-2">
                        <div class="flex -mx-2">
                            <?php
                                $cities_mobile = array(
                                    'Los Angeles', 'San Diego', 'San Jose', 'San Francisco', 'Sacramento',
                                    'Fresno', 'Long Beach', 'Oakland', 'Bakersfield', 'Anaheim'
                                );
                                $city_chunks_mobile = array_chunk($cities_mobile, 5);

                                foreach ($city_chunks_mobile as $chunk) {
                                    echo '<div class="w-1/2 px-2">';
                                    foreach ($chunk as $city) {
                                        $city_slug = sanitize_title($city);
                                        echo '<a href="' . esc_url(home_url('/' . $city_slug . '-adhd-testing/')) . '" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100 rounded-md">' . esc_html($city) . '</a>';
                                    }
                                    echo '</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Mobile CTA and Phone -->
            <div class="mt-4 flex flex-col space-y-2 px-3">
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '(818) 324-3800'))); ?>" class="text-blue-600 hover:text-blue-800 text-center py-2">
                    <?php echo esc_html(get_theme_mod('phone_number', '(818) 324-3800')); ?>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('cta_url', '/contact')); ?>" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md transition duration-300 text-center">
                    <?php echo esc_html(get_theme_mod('cta_text', 'Book Consultation')); ?>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // City dropdown toggle in mobile menu
        const cityDropdownButton = document.querySelector('.city-dropdown-button');
        const cityDropdownMenu = document.querySelector('.city-dropdown-menu');
        
        if (cityDropdownButton && cityDropdownMenu) {
            cityDropdownButton.addEventListener('click', function() {
                cityDropdownMenu.classList.toggle('hidden');
            });
        }
    });
</script>