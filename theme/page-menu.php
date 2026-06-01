<?php
/**
 * Template Name: Menu Page
 * Menu page template (slug: menu)
 *
 * @package Farm67_Theme
 */

// メニューデータは inc/menu-data.php に集約（トップのメニューと共通）。
$farm67_menu_items = farm67_menu_items();
$farm67_menu_categories = farm67_menu_categories();

get_header();
?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <section id="menu" class="relative bg-[#FFFCF1] text-[#D84830]">
    <div class="pointer-events-none absolute inset-0 overflow-x-clip">
      <div class="absolute left-1/2 top-0 h-[1840px] w-[1840px] -translate-x-1/2 rounded-t-[100%] bg-gradient-to-t from-[#FFFCF1] to-[#F8F1D9]"></div>
    </div>
    <div class="mx-4 md:mx-12">
      <div class="relative mx-auto max-w-[1200px] py-24 lg:flex lg:gap-20">
        <aside class="lg:w-45.5 hidden lg:block">
          <div class="top-51.25 sticky">
            <div class="rounded-3xl bg-[#D84830] px-12 py-10 text-white">
              <ul class="text-18 flex flex-col gap-4 font-semibold">
                <?php foreach ($farm67_menu_categories as $farm67_category): ?>
                  <li>
                    <a
                      href="#<?php echo esc_attr($farm67_category['id']); ?>"
                      class="flex items-center gap-3 transition-all opacity-70"
                      data-menu-nav-link
                      data-target="<?php echo esc_attr($farm67_category['id']); ?>"
                    >
                      <span class="h-3 w-3 rounded-full bg-white opacity-0 transition-opacity duration-300" data-menu-nav-dot></span>
                      <?php echo esc_html($farm67_category['label']); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </aside>

        <div class="flex flex-col">
          <div data-reveal>
            <?php farm67_heading([
              'title' => 'menu',
              'sub_title' => 'メニュー',
              'color' => 'orange',
              'icon' => 'menu',
            ]); ?>
          </div>

          <div data-reveal data-reveal-delay="100">
            <p class="text-14 text-foreground md:text-16 lg:text-18 mt-8 md:mt-10">
            </p>
          </div>

          <div class="mt-15 gap-y-15 flex flex-col md:mt-20 md:gap-y-24 lg:gap-y-20">
            <?php foreach ($farm67_menu_categories as $farm67_category):
              $farm67_items = array_values(
                array_filter(
                  $farm67_menu_items,
                  static fn($item) => $item['category'] === $farm67_category['id'],
                ),
              ); ?>
              <div id="<?php echo esc_attr(
                $farm67_category['id'],
              ); ?>" class="scroll-mt-28 md:scroll-mt-32 flex flex-col gap-y-8 md:gap-y-10 lg:gap-y-12">
                <div data-reveal>
                  <div class="flex flex-col gap-y-8">
                    <div class="h-px w-full bg-[#BEB8A0]"></div>
                    <?php farm67_menu_category_heading([
                      'category' => $farm67_category['id'],
                      'label' => $farm67_category['label'],
                      'label_ja' => $farm67_category['label_ja'],
                      'description' => $farm67_category['description'],
                    ]); ?>
                  </div>
                </div>

<?php if (count($farm67_items) === 1):
                  $farm67_item = $farm67_items[0]; ?>
                  <div data-reveal data-reveal-delay="100">
                    <div class="flex flex-col gap-y-6 overflow-hidden rounded-3xl bg-white p-5 md:flex-row md:items-center md:gap-x-10 md:p-8 lg:p-10">
                      <div class="overflow-hidden rounded-2xl md:w-1/2 lg:w-[55%]">
                        <img src="<?php echo esc_url(
                          farm67_img($farm67_item['image']),
                        ); ?>" alt="<?php echo esc_attr(
  $farm67_item['name'],
); ?>" class="aspect-[4/3] w-full object-cover" loading="lazy" />
                      </div>
                      <div class="flex flex-col gap-y-4 md:w-1/2 lg:w-[45%]">
                        <h2 class="text-20 text-foreground md:text-24 lg:text-28"><?php echo esc_html(
                          $farm67_item['name'],
                        ); ?></h2>
                        <p class="text-16 text-black-base whitespace-pre-line leading-relaxed"><?php echo esc_html(
                          ($farm67_item['description'] ?? '') !== ''
                            ? $farm67_item['description']
                            : 'テキストが入ります。',
                        ); ?></p>
                        <?php if (farm67_show_prices()): ?>
                        <p class="text-20 text-black-base"><?php echo esc_html(
                          farm67_format_price($farm67_item['price'] ?? null),
                        ); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php else: ?>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3 lg:gap-x-10 lg:gap-y-14">
                  <?php foreach ($farm67_items as $farm67_i => $farm67_item): ?>
                    <div data-reveal data-reveal-delay="<?php echo (int) ($farm67_i * 100); ?>">
                      <div class="flex flex-col gap-y-3">
                        <div class="overflow-hidden rounded-2xl">
                          <img src="<?php echo esc_url(
                            farm67_img($farm67_item['image']),
                          ); ?>" alt="<?php echo esc_attr(
  $farm67_item['name'],
); ?>" class="aspect-square w-full object-cover" loading="lazy" />
                        </div>
                        <h2 class="text-16 text-foreground md:text-22 mt-5"><?php echo esc_html(
                          $farm67_item['name'],
                        ); ?></h2>
                        <p class="text-16 text-black-base whitespace-pre-line"><?php echo esc_html(
                          ($farm67_item['description'] ?? '') !== ''
                            ? $farm67_item['description']
                            : 'テキストが入ります。',
                        ); ?></p>
                        <?php if (farm67_show_prices()): ?>
                        <p class="text-20 text-black-base"><?php echo esc_html(
                          farm67_format_price($farm67_item['price'] ?? null),
                        ); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
            <?php
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
