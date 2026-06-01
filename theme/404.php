<?php
/**
 * 404 template
 *
 * @package Farm67_Theme
 */

get_header(); ?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <div class="mx-auto flex max-w-4xl flex-col items-center gap-y-8 px-gutter-sm-5 text-center lg:px-gutter-lg-20">
    <p class="font-title-en text-foreground text-76 leading-none">404</p>
    <p class="text-18 text-foreground">
      <?php esc_html_e('お探しのページは見つかりませんでした。', 'farm67'); ?>
    </p>
    <?php farm67_pill_button([
      'href' => home_url('/'),
      'label' => 'Back to top',
      'variant_classes' => 'border-foreground text-foreground hover:bg-foreground hover:text-white',
      'circle_classes' => 'bg-foreground text-white',
    ]); ?>
  </div>
</main>

<?php get_footer();
