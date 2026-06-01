<?php
/**
 * Top: Menu section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

// メニューデータは inc/menu-data.php に集約（下層メニューページと共通）。
$farm67_format_price = 'farm67_format_price';
$farm67_menu_categories = farm67_menu_categories();
$farm67_filter_items = static fn(string $category): array => farm67_menu_items_by_category($category);
$farm67_menu_cat_count = count($farm67_menu_categories);
?>
<section id="menu" class="text-foreground lg:px-gutter-lg-20 relative px-5">
  <div class="flex flex-col gap-y-6 md:gap-y-8">
    <div data-reveal>
      <?php farm67_heading([
        'title' => 'menu',
        'sub_title' => 'メニュー',
        'color' => 'orange',
        'icon' => 'menu',
      ]); ?>
    </div>
  </div>

  <div class="md:px-30 md:pb-30 flex flex-col gap-y-14 rounded-2xl bg-gradient-to-t from-[#F9F3DD] to-[#FFFCF1] px-5 pb-20 pt-5 md:pt-20">
    <?php foreach ($farm67_menu_categories as $farm67_index => $farm67_category):

      $farm67_items = $farm67_filter_items($farm67_category['id']);
      $farm67_main = $farm67_items[0] ?? null;
      $farm67_subs = array_slice($farm67_items, 1, 2);
      ?>
      <div class="flex flex-col gap-y-12">
        <div data-reveal>
          <?php farm67_menu_category_heading([
            'category' => $farm67_category['id'],
            'label' => $farm67_category['label'],
            'label_ja' => $farm67_category['label_ja'],
            'description' => $farm67_category['description'],
          ]); ?>
        </div>

        <?php if ($farm67_category['id'] === 'lunch'): ?>
          <div class="flex flex-col gap-y-10">
            <?php if ($farm67_main): ?>
              <div data-reveal data-reveal-delay="100">
                <div class="flex flex-col gap-y-3">
                  <img src="<?php echo esc_url(
                    farm67_img($farm67_main['image']),
                  ); ?>" alt="<?php echo esc_attr(
  $farm67_main['name'],
); ?>" class="w-full rounded-2xl object-cover" />
                  <div class="flex flex-col gap-y-4">
                    <h2 class="text-22 md:text-24 text-foreground mt-5"><?php echo esc_html(
                      $farm67_main['name'],
                    ); ?></h2>
                    <p class="text-14 leading-normal text-black-base whitespace-pre-line"><?php echo esc_html(
                      $farm67_main['description'] !== ''
                        ? $farm67_main['description']
                        : 'テキストが入ります。',
                    ); ?></p>
                    <?php if (farm67_show_prices()): ?>
                    <p class="text-20 text-black-base"><?php echo esc_html(
                      $farm67_format_price($farm67_main['price']),
                    ); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <?php if (!empty($farm67_subs)): ?>
            <div class="flex flex-col rounded-2xl bg-white px-5 py-5 md:px-10 md:py-10">
              <?php foreach ($farm67_subs as $farm67_si => $farm67_item): ?>
                <div data-reveal data-reveal-delay="<?php echo (int) (200 + $farm67_si * 100); ?>">
                  <div class="flex flex-col gap-6 md:flex-row">
                    <img src="<?php echo esc_url(
                      farm67_img($farm67_item['image']),
                    ); ?>" alt="<?php echo esc_attr(
  $farm67_item['name'],
); ?>" class="rounded-2xl object-cover w-full md:w-70" />
                    <div class="flex flex-col gap-y-3 md:gap-y-2">
                      <p class="text-20 text-foreground"><?php echo esc_html(
                        $farm67_item['name'],
                      ); ?></p>
                      <p class="text-14 leading-normal text-black-base whitespace-pre-line"><?php echo esc_html(
                        $farm67_item['description'] !== ''
                          ? $farm67_item['description']
                          : 'テキストが入ります。',
                      ); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        <?php elseif (count($farm67_items) === 1):
          $farm67_only = $farm67_items[0]; ?>
          <div data-reveal data-reveal-delay="100">
            <div class="flex flex-col gap-6 overflow-hidden rounded-2xl bg-white p-5 md:flex-row md:items-center md:gap-10 md:p-8">
              <div class="overflow-hidden rounded-2xl md:w-1/2">
                <img src="<?php echo esc_url(
                  farm67_img($farm67_only['image']),
                ); ?>" alt="<?php echo esc_attr(
  $farm67_only['name'],
); ?>" class="aspect-[4/3] w-full object-cover" />
              </div>
              <div class="flex flex-col gap-y-3 md:w-1/2">
                <p class="text-20 md:text-24 text-foreground"><?php echo esc_html(
                  $farm67_only['name'],
                ); ?></p>
                <p class="text-14 leading-normal text-black-base whitespace-pre-line"><?php echo esc_html(
                  $farm67_only['description'] !== ''
                    ? $farm67_only['description']
                    : 'テキストが入ります。',
                ); ?></p>
                <?php if (farm67_show_prices()): ?>
                <p class="text-20 text-black-base"><?php echo esc_html(
                  $farm67_format_price($farm67_only['price']),
                ); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php else: ?>
          <div class="grid grid-cols-1 gap-y-8 md:grid-cols-[2fr_1fr] md:gap-x-16 md:gap-y-0">
            <?php if ($farm67_main): ?>
              <div data-reveal data-reveal-delay="100">
                <div class="flex flex-col gap-y-4">
                  <img src="<?php echo esc_url(
                    farm67_img($farm67_main['image']),
                  ); ?>" alt="<?php echo esc_attr(
  $farm67_main['name'],
); ?>" class="h-auto w-full rounded-2xl object-cover" />
                  <div class="relative flex flex-col gap-y-2">
                    <p class="text-20 md:text-24 text-foreground mt-1.5"><?php echo esc_html(
                      $farm67_main['name'],
                    ); ?></p>
                    <p class="text-14 leading-normal text-black-base whitespace-pre-line"><?php echo esc_html(
                      $farm67_main['description'] !== ''
                        ? $farm67_main['description']
                        : 'テキストが入ります。',
                    ); ?></p>
                    <?php if (farm67_show_prices()): ?>
                    <p class="text-20 text-black-base"><?php echo esc_html(
                      $farm67_format_price($farm67_main['price']),
                    ); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <div class="flex flex-col gap-y-8">
              <?php foreach ($farm67_subs as $farm67_si => $farm67_item): ?>
                <div data-reveal data-reveal-delay="<?php echo (int) (200 + $farm67_si * 100); ?>">
                  <div class="flex flex-col gap-y-1">
                    <img src="<?php echo esc_url(
                      farm67_img($farm67_item['image']),
                    ); ?>" alt="<?php echo esc_attr(
  $farm67_item['name'],
); ?>" class="h-auto w-full rounded-2xl object-cover" />
                    <p class="text-22 md:text-16 text-foreground mt-1.5"><?php echo esc_html(
                      $farm67_item['name'],
                    ); ?></p>
                    <p class="text-14 leading-normal text-black-base whitespace-pre-line"><?php echo esc_html(
                      $farm67_item['description'] !== ''
                        ? $farm67_item['description']
                        : 'テキストが入ります。',
                    ); ?></p>
                    <?php if (farm67_show_prices()): ?>
                    <p class="text-20 text-black-base"><?php echo esc_html(
                      $farm67_format_price($farm67_item['price']),
                    ); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <?php if ($farm67_category['id'] === 'sweets'): ?>
            <div data-reveal data-reveal-delay="300">
              <div class="flex justify-center">
                <?php farm67_pill_button([
                  'href' => home_url('/menu/#sweets'),
                  'label' => 'View more',
                  'font_class' => 'font-en',
                  'variant_classes' => 'text-foreground hover:bg-foreground hover:text-white',
                  'circle_classes' => 'bg-foreground text-white',
                ]); ?>
              </div>
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($farm67_index !== $farm67_menu_cat_count - 1): ?>
          <div class="flex justify-center">
            <span class="block h-px w-full bg-black/10"></span>
          </div>
        <?php endif; ?>
      </div>
    <?php
    endforeach; ?>

    <div class="flex justify-center">
      <?php farm67_pill_button([
        'href' => home_url('/menu/'),
        'label' => 'View more',
        'font_class' => 'font-en',
        'variant_classes' => 'text-foreground hover:bg-foreground hover:text-white',
        'circle_classes' => 'bg-foreground text-white',
      ]); ?>
    </div>
  </div>
</section>
