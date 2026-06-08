<?php
/**
 * 404 template
 *
 * @package PMedium_Theme
 */

get_header(); ?>

<main class="mx-auto max-w-5xl px-6 py-12 text-center">
  <h1 class="text-6xl font-bold">404</h1>
  <p class="mt-4 text-gray-600"><?php esc_html_e('Page not found.', 'p-medium'); ?></p>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="mt-8 inline-block text-sm underline">
    <?php esc_html_e('Back to home', 'p-medium'); ?>
  </a>
</main>

<?php get_footer();
