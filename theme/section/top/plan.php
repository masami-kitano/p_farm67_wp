<?php
/**
 * Top Plan section
 *
 * @package PMedium_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$pm_img = static fn(string $file): string => esc_url(
  get_template_directory_uri() . '/assets/images/' . $file,
);

$plan_data = require get_template_directory() . '/inc/plan-data.php';
$pm_plans = $plan_data['plans'];
$pm_plan_options = $plan_data['options'];
?>

<section id="plan" class="relative overflow-hidden text-[#2E3445]">
  <picture class="pointer-events-none absolute inset-0">
    <source media="(min-width: 1280px)" srcset="<?php echo $pm_img('plan-pc-bg.jpg'); ?>">
    <img
      src="<?php echo $pm_img('plan-sp-bg.jpg'); ?>"
      alt=""
      class="size-full object-cover object-top"
      decoding="async"
    >
  </picture>

  <div class="relative z-10 mx-auto max-w-[1120px] px-4 pb-16 pt-12 xl:px-10 xl:pb-24 xl:pt-20">
    <div class="text-center">
      <?php get_template_part('template-parts/section-label', null, ['label' => 'Plan']); ?>

      <h2 class="mt-6 text-24 leading-relaxed tracking-[0.06em] xl:mt-8 xl:text-32">
        ご予算やご要望に合わせて<br class="xl:hidden">選べる体験プラン
      </h2>
    </div>

    <div class="mx-auto mt-10 max-w-[716px] space-y-8 xl:mt-16 xl:grid xl:max-w-none xl:grid-cols-3 xl:gap-6 xl:space-y-0">
      <?php foreach ($pm_plans as $plan) : ?>
        <?php get_template_part('template-parts/plan-card', null, [
          'plan' => $plan,
          'pm_img' => $pm_img,
        ]); ?>
      <?php endforeach; ?>
    </div>

    <div class="mx-auto mt-10 max-w-[716px] bg-white shadow-[0_0_20px_rgba(0,0,0,0.06)] xl:mt-12 xl:max-w-none">
      <div class="flex flex-col items-center gap-6 px-6 py-8 text-center xl:grid xl:grid-cols-[140px_1fr_1fr] xl:items-stretch xl:gap-0 xl:px-0 xl:py-0 xl:text-left">
        <div class="flex items-center justify-center border-[#E8E8E8] xl:border-r xl:px-6 xl:py-8">
          <p class="font-en text-24 tracking-[0.1em] xl:text-20">Option</p>
        </div>

        <?php foreach ($pm_plan_options as $index => $option) : ?>
          <div class="w-full space-y-1 text-14 leading-[1.8] tracking-[0.04em] xl:flex xl:flex-col xl:justify-center xl:px-8 xl:py-8 xl:text-13 <?php echo $index === 0 ? 'xl:border-r xl:border-[#E8E8E8]' : ''; ?>">
            <p><?php echo esc_html($option['label']); ?></p>
            <p><?php echo esc_html($option['price']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
