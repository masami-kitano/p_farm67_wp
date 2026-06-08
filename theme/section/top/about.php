<?php
/**
 * Top About section
 *
 * @package PMedium_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$pm_img = static fn(string $file): string => esc_url(
  get_template_directory_uri() . '/assets/images/' . $file,
);
?>

<section id="about" class="relative overflow-hidden bg-white text-[#2E3445]">
  <div class="relative z-10 flex items-end justify-center gap-4 px-4 pt-6 xl:hidden">
    <p
      class="shrink-0 font-en text-[clamp(3rem,5vw,6rem)] font-regular leading-none tracking-[0.3em] text-[#EAECED] [writing-mode:vertical-rl] rotate-180"
      aria-hidden="true"
    >
      PEARL JEWELRY
    </p>

    <div class="aspect-[388/465] max-h-[465px] w-[min(388px,calc(100vw-8rem))] shrink-0 overflow-hidden rounded-t-[280px]">
      <img
        src="<?php echo $pm_img('about.jpg'); ?>"
        alt="真珠のアクセサリーを手作業で仕上げる様子"
        width="388"
        height="465"
        class="size-full object-cover object-center"
        loading="lazy"
        decoding="async"
      >
    </div>
  </div>

  <div class="relative z-0 mx-auto px-10 max-w-[1120px] items-center">

    <div
        class="pointer-events-none absolute inset-x-[11px] top-15 z-10 hidden @container xl:block"
        aria-hidden="true"
    >
        <p class="w-full text-center font-en text-[max(2.5rem,min(8.125rem,calc(100cqw/11)))] font-regular leading-normal tracking-[0.3em] whitespace-nowrap text-[#EAECED]/80">
        PEARL JEWELRY
        </p>
    </div>

    <div class="grid xl:grid-cols-2 xl:items-center xl:gap-10 xl:px-10 xl:pb-24 xl:pt-40 lg:px-0 mx-auto justify-center">
      <div class="px-4 pt-10 xl:px-0 xl:pt-0">
        <?php get_template_part('template-parts/section-label', null, ['label' => 'About']); ?>

        <h2 class="mt-6 text-24 leading-relaxed tracking-[0.06em] xl:mt-8 xl:text-32">
          “<span class="text-[#5B8E96]">六甲の光</span>”が育んだ輝きを、<br>
          あなたの手で。
        </h2>

        <div class="mt-6 text-14 leading-[2] xl:mt-8 xl:text-18 xl:leading-[1.8]">
          <p>
            神戸が「真珠の街」と呼ばれる理由をご存知ですか？<br>
            それは六甲山から降り注ぐ安定した北向きの光が、<br>
            真珠の繊細な輝きを見極めるのに最適だったから。<br>
            <br>
            130年の歴史を重ねた「KitanoMedium」にて、<br>
            職人と同じ光の中で、<br>
            あなただけの運命の一粒を選び、息を吹き込む。<br>
            神戸の歴史と文化を纏う、<br>
            贅沢なひとときをお届けします。
          </p>
        </div>
      </div>

      <div class="hidden min-w-0 xl:block">
        <div class="mx-auto w-full max-w-[550px] overflow-hidden rounded-t-[280px]">
          <img
            src="<?php echo $pm_img('about.jpg'); ?>"
            alt="真珠のアクセサリーを手作業で仕上げる様子"
            width="550"
            height="660"
            class="aspect-[550/660] w-full object-cover"
            loading="lazy"
            decoding="async"
          >
        </div>
      </div>
    </div>
  </div>
</section>
