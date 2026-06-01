<?php
/**
 * Template Name: Recruit Page
 * Recruit page template (slug: recruit)
 *
 * @package Farm67_Theme
 */

get_header(); ?>

<main role="main">
  <section class="text-foreground relative bg-[#FFFCF1]">
    <div class="pointer-events-none absolute inset-0 overflow-x-clip">
      <div class="h-400 w-400 absolute left-1/2 top-0 -translate-x-1/2 rounded-t-full bg-gradient-to-t from-[#FFFCF1] to-[#F8F1D9]"></div>
    </div>

    <div class="max-w-280 relative mx-auto flex-col gap-y-12 px-4 py-20 md:py-40">
      <div data-reveal>
        <div class="flex flex-col gap-y-6">
          <?php farm67_heading([
            'title' => 'recruit',
            'sub_title' => '採用情報',
            'color' => 'orange',
            'icon' => 'about',
          ]); ?>
          <p class="text-18 text-foreground">テキストが入ります。</p>
        </div>
      </div>

      <div data-reveal data-reveal-delay="100">
        <div class="rounded-2xl py-12 md:py-16">
          <div class="relative overflow-hidden rounded-xl">
            <img src="<?php echo esc_url(
              farm67_img('recruit-main.jpg'),
            ); ?>" alt="Recruit" class="w-full object-cover" />
          </div>
        </div>
      </div>

      <div class="rounded-2xl md:bg-[#FFFCF1]">
        <div class="flex flex-col gap-8 px-4 md:gap-7 md:px-20 md:pt-20">
          <div data-reveal>
            <section class="flex flex-col gap-4">
              <h2 class="text-30 font-bold">会社概要</h2>
              <p class="text-16 text-foreground">テキストが入ります。</p>
            </section>
          </div>

          <div class="h-px bg-[#BEB8A0]"></div>

          <div data-reveal>
            <section class="flex flex-col gap-8">
              <div class="flex flex-col gap-4">
                <h2 class="text-30 font-bold">事業内容</h2>
                <p class="text-16 text-foreground">テキストが入ります。</p>
              </div>

              <div class="flex flex-col gap-10 md:flex-row md:gap-16">
                <div class="row-span-2 overflow-hidden rounded-xl">
                  <img src="<?php echo esc_url(
                    farm67_img('recruit-01.jpg'),
                  ); ?>" alt="" class="h-full w-full object-cover" loading="lazy" />
                </div>
                <div class="flex flex-col gap-10">
                  <div class="overflow-hidden rounded-xl">
                    <img src="<?php echo esc_url(
                      farm67_img('recruit-02.jpg'),
                    ); ?>" alt="" class="w-full object-cover" loading="lazy" />
                  </div>
                  <div class="overflow-hidden rounded-xl">
                    <img src="<?php echo esc_url(
                      farm67_img('recruit-03.jpg'),
                    ); ?>" alt="" class="w-full object-cover" loading="lazy" />
                  </div>
                </div>
              </div>
            </section>
          </div>

          <div class="h-px bg-[#BEB8A0]"></div>

          <div data-reveal>
            <section class="flex flex-col gap-8">
              <div class="flex flex-col gap-4">
                <h2 class="text-30 font-bold">募集職種</h2>
                <p class="text-16 text-foreground">テキストが入ります。</p>
              </div>

              <div class="flex flex-col gap-10 md:flex-row md:gap-16">
                <div class="overflow-hidden rounded-xl">
                  <img src="<?php echo esc_url(
                    farm67_img('recruit-04.jpg'),
                  ); ?>" alt="" class="w-full object-cover" loading="lazy" />
                </div>
                <div class="overflow-hidden rounded-xl">
                  <img src="<?php echo esc_url(
                    farm67_img('recruit-05.jpg'),
                  ); ?>" alt="" class="w-full object-cover" loading="lazy" />
                </div>
              </div>
            </section>
          </div>

          <div data-reveal>
            <div class="mt-2 flex justify-center md:mt-9">
              <?php farm67_pill_button([
                'href' => '#',
                'label' => '応募する',
                'font_class' => 'font-ja',
                'variant_classes' =>
                  'border-foreground bg-foreground text-white hover:bg-white hover:text-foreground',
                'circle_classes' => 'bg-white text-foreground',
              ]); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
