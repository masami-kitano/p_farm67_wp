<?php
/**
 * Top: Strawberry section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_strawberries = [
  ['name' => 'あきひめ', 'image' => 'akihime.png'],
  ['name' => 'すず', 'image' => 'suzu.png'],
  ['name' => 'スターナイト', 'image' => 'starnight.png'],
  ['name' => '紅ほっぺ', 'image' => 'benihoppe.png'],
  ['name' => 'よつぼし', 'image' => 'yotsubosi.png'],
  ['name' => 'みくのか', 'image' => 'mikunoka.png'],
  ['name' => 'ほしうらら', 'image' => 'hosiurara.png'],
];

// Swiper の loop 用に最低 14 枚になるまで繰り返す。
$farm67_strawberry_display = [];
while (count($farm67_strawberry_display) < 14) {
  $farm67_strawberry_display = array_merge($farm67_strawberry_display, $farm67_strawberries);
}
?>
<section id="strawberry" class="w-full text-white">
  <div aria-hidden="true" class="bg-foreground absolute inset-0 [clip-path:ellipse(160%_45%_at_50%_55%)] md:[clip-path:ellipse(115%_45%_at_50%_55%)] lg:[clip-path:ellipse(95%_45%_at_50%_55%)]"></div>
  <div class="px-gutter-sm-5 lg:px-gutter-lg-20 relative flex flex-col">
    <div class="flex flex-col">
      <div class="flex justify-center">
        <img src="<?php echo esc_url(
          farm67_img('strawberry-title.svg'),
        ); ?>" alt="いちごタイトル" width="280" height="124" loading="lazy" />
      </div>

      <div class="strawberry-swiper-container">
        <div class="swiper strawberry-swiper">
          <div class="swiper-wrapper">
            <?php foreach ($farm67_strawberry_display as $farm67_item): ?>
              <div class="swiper-slide strawberry-slide">
                <div class="strawberry-card-wrapper">
                  <div class="strawberry-card">
                    <div class="strawberry-card-image">
                      <?php farm67_picture([
                        'src' => $farm67_item['image'],
                        'alt' => $farm67_item['name'],
                        'loading' => 'lazy',
                      ]); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div data-reveal>
        <h2 class="text-16 md:text-18 lg:text-20 text-center leading-relaxed text-white">
          自然豊かな兵庫県姫路市夢前町で<br class="md:hidden" />
          水素水100%でのびのび育った「ゆめさき苺」<br class="hidden sm:block" />
          一粒一粒に太陽の恵みがぎゅっと<br class="md:hidden" />
          詰まっており、<br class="hidden md:block lg:hidden" />
          品種によって<br class="md:hidden" />
          味や香りの違いをお楽しみいただけます<br />
          （販売期間：毎年12月～6月初旬頃）
        </h2>
      </div>
    </div>

    <div class="mt-10 flex justify-center">
      <?php farm67_pill_button([
        'href' => 'https://www.jalan.net/kankou/spt_guide000000191950/activity_plan/',
        'label' => 'じゃらん予約ページへ',
        'font_class' => 'font-ja',
        'width_class' => 'w-[378px]',
        'label_class' => 'text-nowrap',
        'variant_classes' =>
          'border-white bg-white text-foreground hover:bg-foreground hover:text-white',
        'circle_classes' => 'bg-foreground text-white',
        'new_tab' => true,
      ]); ?>
    </div>
  </div>
</section>
