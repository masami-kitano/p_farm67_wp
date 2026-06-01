<?php
/**
 * The header template
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_nav = [
  ['url' => home_url('/#top'), 'label' => 'Top'],
  ['url' => home_url('/#about'), 'label' => 'About'],
  ['url' => home_url('/menu/'), 'label' => 'Menu'],
  ['url' => home_url('/#news'), 'label' => 'News'],
  ['url' => home_url('/#access'), 'label' => 'Access'],
];
$farm67_instagram_url = apply_filters('farm67_instagram_url', 'https://www.instagram.com/');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-pt-15 scroll-smooth bg-[#FFFCF1]">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Notable&family=Rubik:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen overflow-x-hidden antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="font-en fixed left-0 right-0 top-0 z-50 overflow-x-clip">
  <div class="relative mx-auto flex items-center justify-between px-6 py-4">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="relative z-10 flex h-16 w-16 items-center justify-center rounded-full bg-white">
      <img
        src="<?php echo esc_url(farm67_img('farm-logo.svg')); ?>"
        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        class="h-12 w-11 object-contain"
      />
    </a>

    <nav class="bg-foreground relative z-10 hidden items-center rounded-full px-10 py-4 md:flex">
      <ul class="relative flex items-center gap-6 lg:gap-10">
        <?php foreach ($farm67_nav as $farm67_item): ?>
          <li>
            <a
              href="<?php echo esc_url($farm67_item['url']); ?>"
              class="font-en text-16 lg:text-18 relative z-10 capitalize text-white transition-opacity hover:opacity-70"
            ><?php echo esc_html($farm67_item['label']); ?></a>
          </li>
        <?php endforeach; ?>
        <li>
          <a
            href="<?php echo esc_url($farm67_instagram_url); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="relative z-10 text-[#FFFCF1]"
            aria-label="Instagram"
          >
            <?php farm67_instagram_icon('h-5 w-5'); ?>
          </a>
        </li>
      </ul>
    </nav>

    <button
      type="button"
      class="w-18 relative z-50 flex h-11 flex-col items-center justify-center gap-2 md:hidden"
      aria-label="<?php echo esc_attr__('Open menu', 'farm67'); ?>"
      data-menu-open
    >
      <span class="absolute inset-0 rounded-[60px] bg-[#D84830]"></span>
      <span class="relative h-0.5 w-8 bg-white"></span>
      <span class="relative h-0.5 w-8 bg-white"></span>
    </button>
  </div>
</header>

<div class="fixed inset-0 z-[60] hidden bg-black/40 md:hidden" data-menu-backdrop></div>

<div
  class="fixed inset-y-0 left-0 z-[70] w-72 max-w-[80%] bg-[#D84830] transition-transform duration-300 ease-out md:hidden"
  style="transform: translateX(-100%);"
  data-mobile-menu
>
  <button
    type="button"
    class="absolute right-4 top-4 flex h-10 w-10 items-center justify-center"
    aria-label="<?php echo esc_attr__('Close menu', 'farm67'); ?>"
    data-menu-close
  >
    <span class="absolute h-0.5 w-6 rotate-45 bg-white"></span>
    <span class="absolute h-0.5 w-6 -rotate-45 bg-white"></span>
  </button>

  <nav class="flex h-full flex-col items-center justify-center gap-8">
    <?php foreach ($farm67_nav as $farm67_item): ?>
      <a
        href="<?php echo esc_url($farm67_item['url']); ?>"
        class="text-24 font-en text-white"
      ><?php echo esc_html($farm67_item['label']); ?></a>
    <?php endforeach; ?>

    <a
      href="<?php echo esc_url($farm67_instagram_url); ?>"
      target="_blank"
      rel="noopener noreferrer"
      class="mt-2 text-white"
      aria-label="Instagram"
    >
      <?php farm67_instagram_icon('h-10 w-10'); ?>
    </a>
  </nav>
</div>
