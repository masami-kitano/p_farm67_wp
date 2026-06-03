<?php
/**
 * The footer template
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_footer_nav = [
  ['url' => home_url('/'), 'label' => 'top'],
  ['url' => home_url('/#about'), 'label' => 'about'],
  ['url' => home_url('/menu/'), 'label' => 'menu'],
  ['url' => home_url('/#news'), 'label' => 'news'],
  ['url' => home_url('/#access'), 'label' => 'access'],
];
$farm67_instagram_url = apply_filters('farm67_instagram_url', 'https://www.instagram.com/');

$farm67_access_images = [];
for ($i = 1; $i <= 14; $i++) {
  $farm67_access_images[] = sprintf('access-%02d.jpg', $i);
}
$farm67_marquee_images = array_merge($farm67_access_images, $farm67_access_images);
?>

<footer class="relative flex flex-col bg-[#E8E2C7]">
  <div class="relative flex overflow-hidden">
    <div class="marquee flex whitespace-nowrap">
      <?php foreach ($farm67_marquee_images as $farm67_src): ?>
        <?php $farm67_marquee = farm67_marquee_img_attrs($farm67_src); ?>
        <?php if ($farm67_marquee['mobile_src'] !== null): ?>
        <picture>
          <source
            media="(max-width: 640px)"
            srcset="<?php echo esc_url($farm67_marquee['mobile_src']); ?>"
          />
        <?php endif; ?>
          <img
            src="<?php echo esc_url($farm67_marquee['src']); ?>"
            width="<?php echo (int) $farm67_marquee['width']; ?>"
            height="<?php echo (int) $farm67_marquee['height']; ?>"
            alt=""
            class="flex-shrink-0 object-cover"
            loading="lazy"
            decoding="async"
            fetchpriority="low"
          />
        <?php if ($farm67_marquee['mobile_src'] !== null): ?>
        </picture>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="pt-20 px-5 xl:px-35 flex lg:flex-row flex-col lg:items-end items-center justify-between">
    <div class="hidden lg:flex group flex-col items-center justify-center bg-white border rounded-2xl px-7 pt-8.75 pb-4 border-foreground border-2">
      <a
        href="https://www.yumemap.net/"
        target="_blank"
        rel="noopener noreferrer"
        class="inline-block"
        aria-label="夢マップ"
      >
        <img
          src="<?php echo esc_url(farm67_img('logo-yumemap.svg')); ?>"
          alt="夢マップ"
          class="h-auto w-80"
        />
        <p class="pt-3 text-15 text-black-base whitespace-nowrap text-center">
          姫路市夢前町の観光ガイドマップ
      </p>
        <span
          class="flex items-end justify-end rounded-full transition-transform duration-300 group-hover:translate-x-1 <?php echo esc_attr(
            $farm67_b['circle_classes'],
          ); ?>"
        >
          <svg class="-7.5 w-7.5 text-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4H3" />
          </svg>
        </span>
      </a>
    </div>

    <div class="font-en flex flex-wrap items-center justify-center gap-x-10 gap-y-4 md:flex-nowrap md:justify-center md:gap-y-0">
      <?php foreach ($farm67_footer_nav as $farm67_item): ?>
        <a
          href="<?php echo esc_url($farm67_item['url']); ?>"
          class="text-foreground relative z-10 capitalize"
        ><?php echo esc_html($farm67_item['label']); ?></a>
      <?php endforeach; ?>

      <a
        href="<?php echo esc_url($farm67_instagram_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="text-foreground"
        aria-label="Instagram"
      >
        <?php farm67_instagram_icon('w-7 h-7'); ?>
      </a>
    </div>

    <div class="lg:hidden mt-8 flex flex-col items-center justify-center md:mt-10 bg-white border rounded-2xl px-7 pt-8.75 pb-4 border-foreground border-2">
      <a
        href="https://www.yumemap.net/"
        target="_blank"
        rel="noopener noreferrer"
        class="inline-block transition-opacity hover:opacity-70"
        aria-label="夢マップ"
      >
        <img
          src="<?php echo esc_url(farm67_img('logo-yumemap.svg')); ?>"
          alt="夢マップ"
          class="h-auto w-80"
        />
        <p class="pt-3 text-15 text-black-base whitespace-nowrap text-center">
          姫路市夢前町の観光ガイドマップ
        </p>
        <span
          class="flex items-end justify-end rounded-full transition-all duration-300 group-hover:translate-x-1 <?php echo esc_attr(
            $farm67_b['circle_classes'],
          ); ?>"
        >
          <svg class="h-7.5 w-7.5 text-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4H3" />
          </svg>
        </span>
      </a>
    </div>
  </div>

  <div class="pt-19 relative flex justify-center">
    <img
      class="w-full"
      src="<?php echo esc_url(farm67_img('yumekaido-farm67.svg')); ?>"
      alt="Yumekaido farm67"
    />
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
