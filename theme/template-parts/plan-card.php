<?php
/**
 * Plan card
 *
 * @package PMedium_Theme
 *
 * @var array $args {
 *   @type array  $plan     Plan data from plan-data.php.
 *   @type string $pm_img   Image URL helper.
 * }
 */

if (!defined('ABSPATH')) {
  exit();
}

$plan = $args['plan'] ?? null;
$pm_img = $args['pm_img'] ?? null;

if (!is_array($plan) || !is_callable($pm_img)) {
  return;
}

$description_lines = $plan['description'] ?? [];
if (is_string($description_lines)) {
  $description_lines = preg_split('/\R/u', $description_lines) ?: [];
}
$description_lines = array_values(array_filter(array_map('trim', $description_lines), static fn(string $line): bool => $line !== ''));
?>

<article class="overflow-hidden">
  <div class="overflow-hidden rounded-tl-[100px]">
    <img
      src="<?php echo $pm_img($plan['image']); ?>"
      alt="<?php echo esc_attr($plan['image_alt']); ?>"
      width="<?php echo (int) $plan['image_width']; ?>"
      height="<?php echo (int) $plan['image_height']; ?>"
      class="aspect-[716/558] w-full object-cover"
      loading="lazy"
      decoding="async"
    >
  </div>

  <div class="px-5 pb-8 pt-5 xl:px-4 xl:pb-6 xl:pt-4 bg-white xl:h-154.5">
    <p class="inline-block px-3 py-1 text-12 tracking-[0.04em] xl:text-11 <?php echo esc_attr(
      $plan['tag_bg'],
    ); ?>">
      <?php echo esc_html($plan['tag']); ?>
    </p>

    <h3 class="mt-4 text-22 leading-relaxed tracking-none xl:mt-3 xl:leading-[1.7]">
      <?php echo esc_html($plan['title']); ?>
    </h3>

    <p class="mt-4 text-14 leading-[1.9] tracking-[0.04em] xl:mt-3 xl:text-16 xl:leading-[1.8]">
      <?php foreach ($description_lines as $index => $line) : ?>
        <?php if ($index > 0) : ?><br><?php endif; ?>
        <?php echo esc_html($line); ?>
      <?php endforeach; ?>
    </p>

    <dl class="mt-6 border-t border-[#E8E8E8] pt-5 text-14 leading-[1.9] tracking-[0.04em] xl:mt-5 xl:pt-4 xl:text-16 xl:leading-[1.8]">
      <div class="grid grid-cols-[5.5rem_1fr] gap-x-4 gap-y-1 xl:grid-cols-[4.5rem_1fr]">
        <dt class="shrink-0">体験内容</dt>
        <dd>
          <ul class="space-y-1">
            <?php foreach ($plan['items'] as $item): ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
        </dd>
      </div>

      <div class="mt-4 grid grid-cols-[5.5rem_1fr] gap-x-4 xl:mt-3 xl:grid-cols-[4.5rem_1fr]">
        <dt class="shrink-0">費　用</dt>
        <dd><?php echo esc_html($plan['price']); ?>円（税込）</dd>
      </div>

      <div class="mt-2 grid grid-cols-[5.5rem_1fr] gap-x-4 xl:grid-cols-[4.5rem_1fr]">
        <dt class="shrink-0">体験時間</dt>
        <dd><?php echo esc_html($plan['duration']); ?></dd>
      </div>
    </dl>
  </div>
</article>
