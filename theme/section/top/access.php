<?php
/**
 * Top: Access section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
} ?>
<section id="access" class="relative w-full text-white">
  <div class="lg:px-gutter-lg-2 px-gutter-sm-5 relative z-10 flex flex-col gap-y-12 md:gap-y-20">
    <div data-reveal>
      <?php farm67_heading([
        'title' => 'access',
        'sub_title' => 'アクセス',
        'color' => 'white',
        'icon' => 'access',
      ]); ?>
    </div>

    <div class="pl-gutter-sm-5 lg:pl-gutter-lg-20 flex flex-col gap-y-8 md:gap-y-10 lg:grid lg:grid-cols-2 lg:gap-x-10">
      <div class="flex flex-col gap-y-6 md:gap-y-8">
        <div data-reveal data-reveal-delay="100">
          <div class="text-16 md:text-18 lg:text-20 leading-relaxed">
            <p>夢街道farm67（ユメカイドウファームロクジュウナナ）</p>
            <p>〒671-2121 兵庫県姫路市夢前町宮置437-1</p>
            <p>電話番号：079-337-2100</p>
            <p>営業時間：10：00～16：00</p>
            <p>定休日：月曜日（祝日の場合翌日休）</p>
          </div>
        </div>

        <div data-reveal data-reveal-delay="200">
          <div class="aspect-[3/2] w-full overflow-hidden rounded-2xl">
            <iframe
              title="farm67の地図"
              class="h-full w-full"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.6415875835837!2d134.6730896760071!3d34.91544297165997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35551f31a0fd9c77%3A0xd9bfeec80117c8b7!2z5aSi6KGX6YGTIGZhcm02Nw!5e0!3m2!1sja!2sjp!4v1761125703081!5m2!1sja!2sjp"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>

      <div data-reveal data-reveal-delay="300">
        <div class="w-full">
          <div class="relative aspect-[5/4] w-full overflow-hidden rounded-2xl">
            <img src="<?php echo esc_url(
              farm67_img('access-main.jpg'),
            ); ?>" alt="夢街道 Farm67の店舗外観" class="absolute inset-0 h-full w-full object-cover" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
