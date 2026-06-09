<?php
/**
 * Front page template
 *
 * @package PMedium_Theme
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
  <?php get_template_part('section/top/kv'); ?>
  <?php get_template_part('section/top/about'); ?>
  <?php get_template_part('section/top/plan'); ?>
</main>

<?php get_footer();
