<?php
/**
 * 矢印付きピルボタン（farm67_pill_button から呼び出し）。
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_b = get_query_var('farm67_pill_button');
if (!is_array($farm67_b)) {
  return;
}

$farm67_target = !empty($farm67_b['new_tab']) ? ' target="_blank" rel="noopener noreferrer"' : '';
?>
<a
  href="<?php echo esc_url($farm67_b['href']); ?>"<?php echo $farm67_target; ?>
  class="<?php echo esc_attr(
    $farm67_b['font_class'],
  ); ?> group inline-flex h-[72px] <?php echo esc_attr(
   $farm67_b['width_class'],
 ); ?> items-center justify-between rounded-full border-2 px-8 transition-colors duration-300 <?php echo esc_attr(
   $farm67_b['variant_classes'],
 ); ?>"
>
  <span class="text-[18px] md:text-[20px] <?php echo esc_attr($farm67_b['label_class']); ?>">
    <?php echo esc_html($farm67_b['label']); ?>
  </span>

  <span
    class="flex h-[40px] w-[40px] items-center justify-center rounded-full transition-all duration-300 group-hover:translate-x-1 <?php echo esc_attr(
      $farm67_b['circle_classes'],
    ); ?>"
  >
    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
    </svg>
  </span>
</a>
