<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adhd-testing-california
 */

get_header();
?>

<main id="primary" class="site-main py-12">
    <div class="container mx-auto px-4">

        <?php if (have_posts()) : ?>

            <header class="page-header mb-8 pb-4 border-b border-gray-200">
                <?php
                the_archive_title('<h1 class="page-title text-4xl font-bold text-gray-800">', '</h1>');
                the_archive_description('<div class="archive-description mt-2 text-lg text-gray-600">', '</div>');
                ?>
            </header><!-- .page-header -->

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-1 transition-transform duration-300'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-48 object-cover']); ?>
                            </a>
                        <?php endif; ?>
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
                <?php endwhile; ?>
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

        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>

    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
?>
