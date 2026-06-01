<?php
/**
 * Top: Product section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
} ?>
<section class="lg:px-gutter-lg-20 bg-[#FFFCF1] px-5">
  <div class="flex flex-col gap-y-10">
    <div data-reveal>
      <div class="flex flex-col gap-y-4">
        <?php farm67_heading([
          'title' => 'Product',
          'sub_title' => '製品紹介',
          'color' => 'orange',
          'icon' => 'about',
        ]); ?>
        <p class="text-18 text-foreground leading-relaxed"></p>
      </div>
    </div>

    <div data-reveal data-reveal-delay="150">
      <div class="overflow-hidden rounded-2xl">
        <img src="<?php echo esc_url(
          farm67_img('product-main.jpg'),
        ); ?>" alt="商品一覧" class="h-auto w-full object-cover" />
      </div>
    </div>
  </div>
</section>
