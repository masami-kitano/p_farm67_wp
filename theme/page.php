<?php
/**
 * Generic page template
 *
 * @package PMedium_Theme
 */

get_header(); ?>

<main class="mx-auto max-w-5xl px-6 py-12">
  <?php while (have_posts()):
    the_post(); ?>
    <article <?php post_class(); ?>>
      <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
      <div class="prose mt-8 max-w-none">
        <?php the_content(); ?>
      </div>
    </article>
  <?php
  endwhile; ?>
</main>

<?php get_footer();
