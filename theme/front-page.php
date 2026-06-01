<?php
/**
 * The front page template
 *
 * @package Farm67_Theme
 */

get_header(); ?>

<main role="main">
  <section id="kv" class="relative grid h-svh place-items-center bg-[#FFFFFF]">
    <?php get_template_part('section/top/kv'); ?>
    <div class="absolute inset-0 z-10 flex place-items-end justify-center px-5 pb-20">
      <img src="<?php echo esc_url(
        farm67_img('top.svg'),
      ); ?>" alt="夢街道 farm67" width="838" height="113" />
    </div>
  </section>

  <div class="pt-15 pb-25 gap-y-25 grid grid-cols-1 bg-[#FFFCF1] md:gap-y-40 md:py-40">
    <?php get_template_part('section/top/schedule'); ?>

    <div class="relative overflow-hidden">
      <div class="relative z-10">
        <?php get_template_part('section/top/about'); ?>
      </div>

      <div class="relative grid grid-cols-1 gap-y-20 pt-20 md:pt-40 lg:gap-y-40">
        <div class="pointer-events-none absolute inset-0 z-0 flex justify-center">
          <span class="-top-50 absolute aspect-square w-[calc(1840/1440*100%)] rounded-t-[100%] bg-gradient-to-b from-[#F8F1D9] via-[#FFFCF1] to-[#FFFCF1]"></span>
        </div>
        <?php get_template_part('section/top/menu'); ?>
      </div>
    </div>

    <?php get_template_part('section/top/product'); ?>

    <div class="relative grid grid-cols-1 gap-y-20 overflow-hidden pb-20 md:gap-y-40 md:pb-32">
      <?php get_template_part('section/top/strawberry'); ?>
      <?php get_template_part('section/top/dogrun'); ?>
      <?php get_template_part('section/top/news'); ?>
      <?php get_template_part('section/top/access'); ?>
    </div>

    <?php get_template_part('section/top/character'); ?>
  </div>
</main>

<?php get_footer();
