<?php
/**
 * The main template file (fallback)
 *
 * @package PMedium_Theme
 */

get_header(); ?>

<main class="mx-auto max-w-5xl px-6 py-12">
  <?php if (have_posts()): ?>
    <ul class="flex flex-col gap-6">
      <?php while (have_posts()):
        the_post(); ?>
        <li class="border-b border-gray-200 pb-6">
          <time class="text-sm text-gray-500"><?php echo esc_html(get_the_date()); ?></time>
          <h2 class="mt-1 text-xl font-semibold">
            <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a>
          </h2>
        </li>
      <?php
      endwhile; ?>
    </ul>

    <div class="mt-10">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else: ?>
    <p><?php esc_html_e('No posts found.', 'p-medium'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer();
