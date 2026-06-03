<?php
/**
 * Top: Key Visual swiper
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_kv_images = [
  ['pc' => 'top/kv-01.jpg', 'sp' => 'top/kv-01-sm.jpg'],
  ['pc' => 'top/kv-02.jpg', 'sp' => 'top/kv-02-sm.jpg'],
  ['pc' => 'top/kv-03.jpg', 'sp' => 'top/kv-03-sm.jpg'],
];
?>
<div class="relative h-full w-full overflow-hidden">
  <div class="absolute bottom-0 left-1/2 top-10 w-[120vw] max-w-none -translate-x-1/2 overflow-hidden rounded-t-[100%_52%] md:w-[120%] md:rounded-t-[100%]">
    <div class="swiper kv-swiper h-full w-full">
      <div class="swiper-wrapper">
        <?php foreach ($farm67_kv_images as $farm67_i => $farm67_image): ?>
          <div class="swiper-slide relative h-full w-full">
            <?php farm67_picture([
              'src' => $farm67_image['sp'],
              'alt' => 'Key Visual ' . ((int) $farm67_i + 1),
              'class' => 'absolute inset-0 h-full w-full object-cover object-[center_35%] md:hidden',
              'loading' => $farm67_i === 0 ? '' : 'lazy',
              'fetchpriority' => $farm67_i === 0 ? 'high' : '',
            ]); ?>
            <?php farm67_picture([
              'src' => $farm67_image['pc'],
              'alt' => 'Key Visual ' . ((int) $farm67_i + 1),
              'class' => 'absolute inset-0 hidden h-full w-full object-cover object-center md:block',
              'loading' => $farm67_i === 0 ? '' : 'lazy',
              'fetchpriority' => $farm67_i === 0 ? 'high' : '',
            ]); ?>
            <div class="pointer-events-none absolute inset-x-0 bottom-0 h-[35%] bg-gradient-to-t from-[#FFFCF1] via-[#FFFCF1] to-transparent"></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
