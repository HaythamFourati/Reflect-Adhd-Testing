<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

  <!-- example react component -->
  <div id="render-react-example-here"></div>
  <!-- end example react component -->

  <main id="primary" class="site-main">
    <div class="prose max-w-full">
      <?php if (have_posts()) {
        while(have_posts()) {
          the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
            <header class="entry-header">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_content(); ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer mt-4">
              <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:underline">Read More &rarr;</a>
            </footer><!-- .entry-footer -->
          </article><!-- #post-<?php the_ID(); ?> -->
        <?php }
      } ?>
    </div>
  </main>
</div>

<?php get_footer(); ?>