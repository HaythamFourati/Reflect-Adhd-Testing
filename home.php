<?php
/**
 * The template for displaying the blog posts index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adhd-testing-california
 */

get_header();
?>

<!-- Blog Hero Section -->
<div class="bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-4 py-20 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800">
            The Reflect Neuro Blog
        </h1>
        <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
            Insights, research, and information on ADHD testing, diagnosis, and treatment.
        </p>
        <div class="mt-8 bg-white p-6 rounded-lg shadow-lg max-w-3xl mx-auto text-left">
            <p class="text-gray-700">
                Our telehealth ADHD assessments maintain the same rigorous standards as in-person evaluations while offering the convenience and comfort of testing from your own home.
            </p>
        </div>
    </div>
</div>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if (have_posts()) {
                // Start the Loop
                while (have_posts()) {
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-1 transition-transform duration-300'); ?>>
                        <?php
                        if (has_post_thumbnail()) {
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-48 object-cover']); ?>
                            </a>
                            <?php
                        }
                        ?>
                        <div class="p-6">
                            <header class="entry-header mb-4">
                                <?php the_title(sprintf('<h2 class="entry-title text-2xl font-bold leading-tight"><a href="%s" rel="bookmark" class="text-gray-800 hover:text-blue-600">', esc_url(get_permalink())), '</a></h2>'); ?>
                            </header><!-- .entry-header -->

                            <div class="entry-summary text-gray-700">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->

                            <footer class="entry-footer mt-4">
                                <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-700 font-semibold">Read More &rarr;</a>
                            </footer><!-- .entry-footer -->
                        </div>
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                } // End of the while loop
            } else {
                get_template_part('template-parts/content', 'none');
            } // End of the if statement
            ?>
        </div>

        <?php
        // Pagination
        the_posts_pagination([
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;',
            'screen_reader_text' => 'Posts navigation',
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'textdomain') . ' </span>',
        ]);
        ?>

    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
?>
