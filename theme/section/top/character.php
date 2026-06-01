<?php
/**
 * Top: Character section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_characters = [
  [
    'name' => 'いちご大魔王',
    'ruby' => 'いちごだいまおう',
    'image' => 'chara-ichigo-daimao.png',
    'description' =>
      'いちごについて説明とかしてくれるキャラ。あきひめが好きだったが最近はほしうららが推し。',
  ],
  [
    'name' => 'いも乙田いも夫',
    'ruby' => 'いもおだいもお',
    'image' => 'chara-imoodaimoo.png',
    'description' =>
      'さつまいもを育てている腹巻きした青髭のさつまいもの妖精。焼き芋を焼いてくれる。',
  ],
];
?>
<section id="character" class="relative w-full">
  <div class="lg:px-gutter-lg-2 px-gutter-sm-5 relative z-10 flex flex-col gap-y-12 break-all md:gap-y-20">
    <div data-reveal>
      <?php farm67_heading([
        'title' => 'character',
        'sub_title' => 'キャラクター紹介',
        'color' => 'orange',
        'icon' => 'about',
      ]); ?>
    </div>

    <div class="md:px-gutter-sm-5 lg:px-gutter-lg-20 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      <?php foreach ($farm67_characters as $farm67_index => $farm67_character): ?>
        <div data-reveal data-reveal-delay="<?php echo (int) (100 +
          $farm67_index * 100); ?>" class="h-full">
          <div class="rounded-4xl flex h-full flex-col items-center border-2 border-[#D8896B] bg-white px-6 py-10 text-center md:px-5 md:py-12">
            <div class="relative mb-4 aspect-square w-40 md:mb-6 md:w-48">
              <img src="<?php echo esc_url(
                farm67_img($farm67_character['image']),
              ); ?>" alt="<?php echo esc_attr(
  $farm67_character['name'],
); ?>" class="absolute inset-0 h-full w-full object-contain" loading="lazy" />
            </div>

            <h3 class="text-16 text-black-base md:text-18 mb-3 flex items-center gap-1 font-bold">
              <?php echo esc_html($farm67_character['name']); ?>
            </h3>

            <?php if ($farm67_character['ruby'] !== ''): ?>
              <p class="text-13 text-black-base mb-2"><?php echo esc_html(
                $farm67_character['ruby'],
              ); ?></p>
            <?php endif; ?>

            <p class="text-13 text-black-base md:text-14 leading-relaxed"><?php echo esc_html(
              $farm67_character['description'],
            ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
