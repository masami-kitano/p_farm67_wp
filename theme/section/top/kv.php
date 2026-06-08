<?php
/**
 * Top KV section
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

<section class="relative min-h-svh overflow-hidden px-5">
  <picture class="pointer-events-none absolute inset-0">
    <source media="(min-width: 768px)" srcset="<?php echo $pm_img('kv-pc-bg.jpg'); ?>">
    <img
      src="<?php echo $pm_img('kv-sp-bg.jpg'); ?>"
      alt=""
      class="h-full w-full object-cover object-center"
      decoding="async"
    >
  </picture>

  <div class="relative z-10">
    <div class="pt-8 md:pt-6.5">
      <img
        src="<?php echo $pm_img('logo.png'); ?>"
        alt="Kitano Medium"
        width="284"
        height="40"
        class="mx-auto aspect-[284/40] w-full max-w-[180px] md:max-w-[240px]"
        decoding="async"
      >
    </div>

    <div class="mx-auto max-w-[390px] px-4 pt-10 pb-15 xl:hidden">
      <div class="flex flex-col gap-[4px] overflow-hidden">
        <div class="grid grid-cols-[416fr_300fr] items-end gap-[4px]">
          <img
            src="<?php echo $pm_img('kv-sp-01.jpg'); ?>"
            alt=""
            width="416"
            height="260"
            class="aspect-[416/260] w-full rounded-tl-[200px] object-cover"
            loading="eager"
            decoding="async"
          >
          <img
            src="<?php echo $pm_img('kv-sp-03.jpg'); ?>"
            alt=""
            width="300"
            height="220"
            class="aspect-[300/220] w-full object-cover"
            loading="eager"
            decoding="async"
          >
        </div>

        <img
          src="<?php echo $pm_img('kv-sp-02.jpg'); ?>"
          alt=""
          width="724"
          height="474"
          class="aspect-[724/474] w-full object-cover"
          loading="eager"
          decoding="async"
        >

        <div class="grid grid-cols-[300fr_416fr] gap-[4px]">
          <img
            src="<?php echo $pm_img('kv-sp-05.jpg'); ?>"
            alt=""
            width="300"
            height="220"
            class="aspect-[300/220] w-full object-cover"
            loading="lazy"
            decoding="async"
          >
          <img
            src="<?php echo $pm_img('kv-sp-04.jpg'); ?>"
            alt=""
            width="416"
            height="248"
            class="aspect-[416/248] w-full rounded-br-[200px] object-cover"
            loading="lazy"
            decoding="async"
          >
        </div>
      </div>

      <h2 class="mt-12 text-center text-18 leading-[1.8] tracking-[0.04em] text-[#2E3445]">
        北野最古の異人館で紡ぐ、
        <br>
        世界にひとつの真珠体験。
      </h2>

      <a
        href="#reserve"
        class="mt-10 flex aspect-[390/72] w-full items-center justify-center border border-[#5E6673] bg-white/40 text-18 tracking-[0.08em] text-[#2E3445] transition-colors hover:bg-white/70"
      >
        ご予約はこちら
      </a>
    </div>

    <div class="mx-auto hidden max-w-[1350px] px-10 pt-7.5 pb-16.25 xl:block lg:px-0">
      <div class="grid w-full grid-cols-[420fr_420fr_420fr] items-stretch gap-2">
        <div class="flex min-w-0 flex-col">
          <img
            src="<?php echo $pm_img('kv-pc-01.jpg'); ?>"
            alt=""
            width="420"
            height="310"
            class="aspect-[420/310] w-full object-cover rounded-tl-[200px]"
            loading="eager"
            decoding="async"
          >
          <div class="pt-14">
            <h2 class="text-32 leading-[1.7] tracking-[0.04em] text-[#2E3445]">
              北野最古の異人館で紡ぐ、
              <br>
              世界にひとつの真珠体験。
            </h2>
            <a
              href="#reserve"
              class="mt-12 inline-flex aspect-[270/56] w-full max-w-[270px] items-center justify-center border border-[#5E6673] bg-white/40 text-14 tracking-[0.08em] text-[#2E3445] transition-colors hover:bg-white/70"
            >
              ご予約はこちら
            </a>
          </div>
        </div>

        <img
          src="<?php echo $pm_img('kv-pc-02.jpg'); ?>"
          alt=""
          width="420"
          height="610"
          class="aspect-[420/610] min-w-0 w-full object-cover"
          loading="eager"
          decoding="async"
        >

        <div class="flex h-full min-h-0 min-w-0 flex-col justify-between gap-2">
          <img
            src="<?php echo $pm_img('kv-pc-03.jpg'); ?>"
            alt=""
            width="320"
            height="292"
            class="aspect-[320/292] w-[76.19%] max-w-full self-start object-cover"
            loading="eager"
            decoding="async"
          >
          <img
            src="<?php echo $pm_img('kv-pc-04.jpg'); ?>"
            alt=""
            width="420"
            height="310"
            class="aspect-[420/310] w-full rounded-br-[200px] object-cover"
            loading="lazy"
            decoding="async"
          >
        </div>
      </div>
    </div>
  </div>

  <span id="reserve" class="sr-only" tabindex="-1"></span>
</section>
