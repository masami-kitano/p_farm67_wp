<?php
/**
 * メニューカテゴリー見出し（farm67_menu_category_heading から呼び出し）。
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_c = get_query_var('farm67_menu_category');
if (!is_array($farm67_c)) {
  return;
}

// テイクアウト可のときのみチップを表示（スイーツ・ドリンクは可、ランチは不可で非表示）。
$farm67_takeout_ok = in_array($farm67_c['category'], ['sweets', 'softcream', 'drink'], true);
?>
<div class="flex flex-col gap-y-4">
  <div class="text-foreground">
    <?php farm67_menu_category_icon($farm67_c['category']); ?>
  </div>
  <h3 class="font-en text-28 md:text-32 lg:text-36 text-foreground uppercase leading-none">
    <?php echo esc_html($farm67_c['label']); ?>
  </h3>

  <div class="flex flex-wrap items-center gap-2">
    <div class="text-14 md:text-16 bg-foreground inline-flex w-fit items-center rounded-full px-4 py-1.5 font-medium text-white">
      <?php echo esc_html($farm67_c['label_ja']); ?>
    </div>

    <?php if ($farm67_takeout_ok): ?>
      <span class="text-13 md:text-14 border-foreground text-foreground inline-flex w-fit items-center gap-1.5 rounded-full border px-3 py-1.5 font-medium">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" aria-hidden="true">
          <path d="M6 7h12l-1 12.5a1 1 0 0 1-1 .9H8a1 1 0 0 1-1-.9L6 7Z" />
          <path d="M9 7a3 3 0 0 1 6 0" />
        </svg>
        <span>テイクアウト</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5" aria-hidden="true">
          <path d="M20 6 9 17l-5-5" />
        </svg>
      </span>
    <?php endif; ?>
  </div>

  <?php if ($farm67_c['description'] !== ''): ?>
    <p class="text-14 md:text-16 text-black-base leading-relaxed">
      <?php echo esc_html($farm67_c['description']); ?>
    </p>
  <?php endif; ?>
</div>
