<?php
/**
 * Top: Dogrun section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_dogrun_slides = [
  ['src' => 'dogrun-01.jpg', 'alt' => 'ドッグランで遊ぶワンちゃんと飼い主さん'],
  ['src' => 'dogrun-02.jpg', 'alt' => 'ドッグランの様子2'],
  ['src' => 'dogrun-03.jpg', 'alt' => 'ドッグランの様子3'],
];
?>
<section id="dogrun" class="bg-foreground px-gutter-sm-5 lg:px-gutter-lg-20 relative flex flex-col gap-10 text-white md:gap-20">
  <div class="flex flex-col gap-y-8 md:gap-y-10">
    <div data-reveal>
      <?php farm67_heading([
        'title' => 'dogrun',
        'sub_title' => 'ドッグラン',
        'color' => 'white',
        'icon' => 'news',
      ]); ?>
    </div>
  </div>
  <div class="flex flex-col justify-between gap-x-10 gap-y-8 md:gap-y-10 lg:gap-x-24 xl:grid xl:grid-cols-2">
    <div data-reveal data-reveal-delay="100">
      <div class="relative w-full max-w-[900px]">
        <div class="swiper dogrun-swiper w-full">
          <div class="swiper-wrapper">
            <?php foreach ($farm67_dogrun_slides as $farm67_i => $farm67_slide): ?>
              <div class="swiper-slide">
                <div class="relative aspect-square overflow-hidden rounded-2xl">
                  <img
                    src="<?php echo esc_url(farm67_img($farm67_slide['src'])); ?>"
                    alt="<?php echo esc_attr($farm67_slide['alt']); ?>"
                    class="absolute inset-0 h-full w-full object-cover"
                    <?php echo $farm67_i === 0 ? 'fetchpriority="high"' : 'loading="lazy"'; ?>
                  />
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <button
          type="button"
          class="dogrun-swiper-prev absolute left-4 top-1/2 z-10 flex h-16 w-16 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-[#F5F1E8] transition-opacity hover:opacity-90 md:h-20 md:w-20 xl:left-0"
          aria-label="前のスライド"
        >
          <svg class="text-foreground h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" transform="rotate(180 12 12)" />
          </svg>
        </button>
        <button
          type="button"
          class="dogrun-swiper-next absolute right-4 top-1/2 z-10 flex h-16 w-16 -translate-y-1/2 translate-x-1/2 items-center justify-center rounded-full bg-[#F5F1E8] transition-opacity hover:opacity-90 md:h-20 md:w-20 xl:right-0"
          aria-label="次のスライド"
        >
          <svg class="text-foreground h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </button>
      </div>
    </div>

    <div data-reveal data-reveal-delay="300">
      <div class="flex flex-col gap-y-10">
        <p class="text-16 leading-normal">
          完全貸切ドッグラン/ わんRUNランド<br /><br />
          「犬見知りだから…」「ほかのワンちゃんが苦手で…」<br class="hidden xl:block" />
          そんな理由でドッグランを諦めていたワンちゃんや、<br class="hidden md:block" />
          ご家族・お友達とのんびり過ごしたい飼い主さんのためのドッグランです🐶<br /><br />
          約180㎡のゆったりとした空間で、自然の土の上を思いきり走ったり、のんびり過ごしたり。
          ワンちゃんも飼い主さんも、心地よい時間をお楽しみいただけます。<br /><br />
          併設カフェでご注文いただいたドリンクやフードメニューは、ドッグラン内でもお召し上がりいただけます♪
        </p>
        <div class="text-16 flex flex-col border-y border-white">
          <div class="flex justify-between border-b border-white py-2.5">
            <p class="min-w-30 pl-2 text-start">ご利用時間</p>
            <p class="min-w-80 text-start">10:30-15:30</p>
          </div>
          <div class="flex justify-between border-b border-white py-2.5">
            <p class="min-w-30 pl-2 text-start">ご利用料金</p>
            <p class="min-w-80 text-start">30分¥500/匹<br />60分¥1,000/匹</p>
          </div>
          <div class="flex justify-between py-2.5">
            <p class="min-w-30 pl-2 text-start">ご予約方法</p>
            <p class="min-w-80 text-start">電話、InstagramDM、店頭にて</p>
          </div>
        </div>
        <p>
          ※事前ご予約制（当日空きがあれば飛び込み利用OK）<br />
          ※受付時に、一年以内の狂犬病、5種以上の混合ワクチン接種証明書（コピー可）のご提示をお願いいたします。<br />
          ※お得な回数券もございます
        </p>
      </div>
    </div>
  </div>
</section>
