<?php
/**
 * Generic page template
 *
 * @package Farm67_Theme
 */

get_header(); ?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <div class="mx-auto max-w-4xl px-gutter-sm-5 lg:px-gutter-lg-20">
    <?php while (have_posts()):
      the_post(); ?>
      <article <?php post_class('flex flex-col gap-y-8'); ?>>
        <h1 class="text-24 md:text-32 lg:text-36 font-bold text-[#D84830]"><?php the_title(); ?></h1>
        <div class="prose prose-lg text-16 md:text-18 max-w-none text-black-base">
          <?php the_content(); ?>
        </div>
      </article>
    <?php
    endwhile; ?>
  </div>
</main>

<?php get_footer();
