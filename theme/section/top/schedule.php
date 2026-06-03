<?php
/**
 * Top: Schedule swiper section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_schedule_cards = [
  [
    'image' => 'top-spring.png',
    'alt' => 'Spring',
    'title' => '冬〜春',
    'description' => "どデカいちごパフェ＆うさぎちゃんパフェが名物♡いちご狩りは最大7品種を40分間食べ放題♪",
    'color' => '#d94a30',
  ],
  [
    'image' => 'top-summer-1.png',
    'alt' => 'Summer',
    'title' => '夏',
    'description' => "夏季限定！夢街道farm67オリジナルかき氷♡ゆめさき苺100%のかき氷やトウモロコシかき氷、ふわふわピンスなどが味わえます。",
    'color' => '#4ccebe',
  ],
  [
    'image' => 'top-summer-2.png',
    'alt' => 'Summer',
    'title' => '夏',
    'description' => "夢工房が育てたあま～い\nゆめさきトウモロコシ。\n期間中は朝採れ超新鮮な\nトウモロコシを販売します！\nイエロー、バイカラー、ホワイトの３品種を\n育てています",
    'color' => '#eda22f',
  ],
  [
    'image' => 'top-autumn-1.png',
    'alt' => 'Autumn',
    'title' => '秋',
    'description' => "朝採れ枝付き黒枝豆は濃厚な甘さが毎年人気旬が短いのでお見逃しなく！",
    'color' => '#1b7652',
  ],
  [
    'image' => 'top-autumn-2.png',
    'alt' => 'Autumn',
    'title' => '秋',
    'description' => "毎年人気のさつまいも掘り体験♪王道の紅はるかやむらさき芋など数品種を植えています",
    'color' => '#7a4f86',
  ],
  [
    'image' => 'top-autumn-3.png',
    'alt' => 'Autumn',
    'title' => '秋',
    'description' => "地元夢前町で夢工房が大切に育てた美味しいお米をぜひご賞味ください♪",
    'color' => '#c8a00e',
  ],
];
$farm67_schedule_display = array_merge($farm67_schedule_cards, $farm67_schedule_cards);
?>
<section id="Schedule" class="relative w-full bg-[#FFFCF1] text-[#C9553A]">
  <div class="flex w-full flex-col gap-y-8 md:gap-y-12">
    <div data-reveal>
      <div class="px-gutter-sm-5 lg:px-gutter-lg-20 flex justify-center">
        <img src="<?php echo esc_url(
          farm67_img('pc-schedule-title.svg'),
        ); ?>" alt="スケジュールタイトル" width="853" height="45" class="hidden md:block" loading="lazy" />
        <img src="<?php echo esc_url(
          farm67_img('mb-schedule-title.svg'),
        ); ?>" alt="スケジュールタイトル" width="289" height="46" class="block md:hidden w-100" loading="lazy" />
      </div>
    </div>

    <div class="relative w-full max-w-full">
      <div class="relative w-full overflow-hidden">
        <div class="swiper schedule-swiper">
          <div class="swiper-wrapper">
            <?php foreach ($farm67_schedule_display as $farm67_i => $farm67_card): ?>
              <div class="swiper-slide">
                <div
                  class="card-flip aspect-[426.75/640] w-full touch-manipulation min-[768px]:hidden"
                  role="button"
                  tabindex="0"
                  aria-label="<?php echo esc_attr($farm67_card['title'] . 'の詳細を開く'); ?>"
                >
                  <div class="card-flip-inner">
                    <div class="card-flip-front h-full w-full">
                      <img
                        src="<?php echo esc_url(farm67_img($farm67_card['image'])); ?>"
                        alt="<?php echo esc_attr($farm67_card['alt']); ?>"
                        class="h-full w-full rounded-full object-contain"
                        loading="lazy"
                      />
                    </div>
                    <div class="card-flip-back p-6" style="background-color: <?php echo esc_attr(
                      $farm67_card['color'],
                    ); ?>;">
                      <div class="text-center text-white">
                        <p class="text-30 mb-4 font-bold"><?php echo esc_html(
                          $farm67_card['title'],
                        ); ?></p>
                        <p class="text-20 font-ja whitespace-pre-wrap font-medium leading-loose"><?php echo esc_html(
                          $farm67_card['description'],
                        ); ?></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="group relative isolate hidden overflow-hidden rounded-full min-[768px]:block">
                  <img
                    src="<?php echo esc_url(farm67_img($farm67_card['image'])); ?>"
                    alt="<?php echo esc_attr($farm67_card['alt']); ?>"
                    class="relative z-0 h-full w-full rounded-full object-contain"
                    loading="lazy"
                  />
                  <div
                    style="background-color: <?php echo esc_attr($farm67_card['color']); ?>F0;"
                    class="pointer-events-none absolute inset-0 z-[1] flex items-center justify-center overflow-hidden rounded-full p-8 opacity-0 transition-opacity duration-300 min-[768px]:group-hover:pointer-events-auto min-[768px]:group-hover:opacity-100"
                  >
                    <div class="text-center text-white">
                      <p class="text-30 mb-4 font-bold"><?php echo esc_html(
                        $farm67_card['title'],
                      ); ?></p>
                      <p class="text-20 font-ja whitespace-pre-wrap font-medium leading-loose"><?php echo esc_html(
                        $farm67_card['description'],
                      ); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
