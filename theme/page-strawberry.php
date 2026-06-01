<?php
/**
 * Template Name: Strawberry Page
 * Strawberry page template (slug: strawberry)
 *
 * @package Farm67_Theme
 */

$farm67_detail =
  '苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。苺についてテキスト記入。';

$farm67_strawberries = [
  ['name' => 'あきひめ', 'description' => 'さっぱりとした甘さ', 'image' => 'akihime.png'],
  ['name' => 'すず', 'description' => 'さっぱりとした甘さ', 'image' => 'suzu.png'],
  ['name' => 'スターナイト', 'description' => 'さっぱりとした甘さ', 'image' => 'starnight.png'],
  ['name' => 'ほしうらら', 'description' => 'さっぱりとした甘さ', 'image' => 'hosiurara.png'],
  ['name' => 'みくのか', 'description' => 'さっぱりとした甘さ', 'image' => 'mikunoka.png'],
  ['name' => 'よつぼし', 'description' => 'さっぱりとした甘さ', 'image' => 'yotsubosi.png'],
  ['name' => '紅ほっぺ', 'description' => 'さっぱりとした甘さ', 'image' => 'benihoppe.png'],
];

get_header();
?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <section id="strawberry" class="px-gutter-sm-5 lg:px-gutter-lg-20 bg-[#FFFCF1] text-[#D84830]">
    <div class="flex flex-col">
      <div data-reveal>
        <?php farm67_heading([
          'title' => 'strawberry',
          'sub_title' => 'いちご',
          'color' => 'orange',
          'icon' => 'strawberry',
        ]); ?>
      </div>

      <div class="px-gutter-sm-5 lg:px-gutter-lg-20">
        <div class="mt-15 flex flex-col gap-y-20 md:mt-20 md:gap-y-24 lg:gap-y-28">
          <?php foreach ($farm67_strawberries as $farm67_i => $farm67_item): ?>
            <div data-reveal data-reveal-delay="<?php echo (int) ($farm67_i * 100); ?>">
              <div class="flex flex-col gap-8 md:flex-row md:gap-12 lg:gap-16">
                <div class="flex-shrink-0">
                  <div class="relative mx-auto h-72 w-full max-w-[280px] rounded-[20px] border-4 border-[#ED2B2C] bg-white md:h-80 md:w-80">
                    <div class="absolute inset-0 flex -translate-y-6 items-center justify-center">
                      <img src="<?php echo esc_url(
                        farm67_img($farm67_item['image']),
                      ); ?>" alt="<?php echo esc_attr(
  $farm67_item['name'],
); ?>" width="240" height="240" class="z-10 object-contain" loading="lazy" />
                    </div>
                    <div class="absolute inset-0 z-20 flex flex-col items-center justify-end pb-6 text-center text-[#ED2B2C]">
                      <h3 class="text-14 md:text-16 mb-2"><?php echo esc_html(
                        $farm67_item['description'],
                      ); ?></h3>
                      <p class="text-20 md:text-22 font-bold"><?php echo esc_html(
                        $farm67_item['name'],
                      ); ?></p>
                    </div>
                  </div>
                </div>

                <div class="flex flex-1 items-center">
                  <p class="text-15 md:text-16 lg:text-18 leading-relaxed text-[#D84830] md:leading-loose">
                    <?php echo esc_html($farm67_detail); ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
