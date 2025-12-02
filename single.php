<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package adhd-testing-california
 */

get_header();
?>

<?php
// Start the WordPress Loop.
while (have_posts()) {
    the_post();
?>

    <!-- Hero Section -->
    <div class="bg-gradient-to-b from-blue-50 to-white">
        <div class="container max-w-6xl mx-auto px-4 pt-16 pb-12 text-center">
            <header class="entry-header mb-8">
                <?php the_title('<h1 class="entry-title text-4xl md:text-6xl font-bold text-gray-900">', '</h1>'); ?>
                <div class="entry-meta mt-4 text-sm text-gray-500">
                    <span>Posted on <?php echo get_the_date(); ?></span>
                    <span class="mx-2">•</span>
                    <span>By <?php the_author_posts_link(); ?></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <?php
            if (has_post_thumbnail()) {
            ?>
                <div class="post-thumbnail mt-12 mb-8 rounded-lg overflow-hidden shadow-xl">
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                </div><!-- .post-thumbnail -->
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Main Content -->
    <main id="primary" class="site-main bg-white">
        <article id="post-<?php the_ID(); ?>" <?php post_class('container max-w-6xl mx-auto px-8 py-12'); ?>>
            
            <div class="entry-content prose lg:prose-xl max-w-full mx-auto">
                <?php
                the_content();

                wp_link_pages([
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'adhd-testing-california'),
                    'after'  => '</div>',
                ]);
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer mt-12 pt-8 border-t border-gray-200">
                <div class="flex justify-between items-center">
                    <div class="previous-post text-left">
                        <?php previous_post_link('%link', '&larr; %title'); ?>
                    </div>
                    <div class="next-post text-right">
                        <?php next_post_link('%link', '%title &rarr;'); ?>
                    </div>
                </div>
            </footer><!-- .entry-footer -->

        </article><!-- #post-<?php the_ID(); ?> -->
    </main><!-- #main -->

    <?php get_template_part('template-parts/cta-section'); ?>

<?php
} // End of the loop.
?>

<?php
get_footer();
?>