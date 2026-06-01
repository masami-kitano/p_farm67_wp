<?php
/**
 * セクション見出し（farm67_heading から呼び出し）。
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_h = get_query_var('farm67_heading');
if (!is_array($farm67_h)) {
  return;
}

$farm67_text_color = $farm67_h['color'] === 'white' ? 'text-white' : 'text-foreground';
?>
<div class="flex items-start gap-x-4 md:gap-x-5">
  <div class="relative mt-1.5 md:mt-2.5 <?php echo esc_attr($farm67_text_color); ?>">
    <?php farm67_heading_icon($farm67_h['icon'], $farm67_h['color']); ?>
  </div>
  <hgroup class="flex flex-col gap-y-2 <?php echo esc_attr($farm67_text_color); ?>">
    <h2 class="font-title-en text-36 md:text-48 lg:text-56 relative uppercase leading-none">
      <?php echo esc_html($farm67_h['title']); ?>
    </h2>
    <p class="font-ja text-14 md:text-16"><?php echo esc_html($farm67_h['sub_title']); ?></p>
  </hgroup>
</div>
