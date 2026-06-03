<?php
/**
 * Top: About section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
} ?>
<section id="about" class="text-foreground">
  <div class="lg:px-gutter-lg-20 relative px-5">
    <div class="max-w-280 mx-auto">
      <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:items-center md:gap-x-16">
        <div class="flex flex-col gap-y-8">
          <div data-reveal>
            <?php farm67_heading([
              'title' => 'about',
              'sub_title' => '夢街道farm67について',
              'color' => 'orange',
              'icon' => 'about',
            ]); ?>
          </div>

          <div class="flex flex-col gap-y-10 md:gap-y-12">
            <div class="grid gap-y-6 md:gap-y-12">
              <div data-reveal data-reveal-delay="100">
                <h3 class="text-40 md:text-48 to-foreground w-full bg-gradient-to-r from-[#FF6B35] bg-clip-text leading-[1.3] text-transparent">
                  季節とともに、<br />旬を楽しむ
                </h3>
              </div>

              <div class="relative ml-0 flex w-fit flex-col gap-y-4 md:w-auto">
                <div data-reveal data-reveal-delay="150">
                  <h4 class="text-24 text-black-base md:text-28 flex flex-col leading-[1.4]">
                    <span>農家が営む</span>
                    <span>
                      <span class="text-foreground">旬を味わい、</span><br class="md:hidden" /><span>体験できる夢街道farm67</span>
                    </span>
                  </h4>
                </div>

                <div data-reveal data-reveal-delay="200">
                  <p class="text-16 text-black-base md:text-20 leading-[1.6]">
                    夢街道farm67では、<span class="text-foreground">一年を通して</span><br />
                    旬のスイーツや農業体験を<br />
                    楽しむことができます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-reveal data-reveal-delay="150" class="hidden md:block">
          <div class="relative flex justify-end">
            <?php farm67_picture([
              'src' => 'about-01.jpg',
              'alt' => 'about',
              'class' => 'md:w-120 lg:w-140 rounded-2xl h-auto object-cover',
              'loading' => 'lazy',
            ]); ?>
          </div>
        </div>
      </div>

      <div class="mt-16 grid grid-cols-1 gap-y-6 md:hidden">
        <div data-reveal>
          <?php farm67_picture([
            'src' => 'about-01.jpg',
            'alt' => '',
            'class' => 'rounded-2xl h-auto w-full object-cover',
            'loading' => 'lazy',
          ]); ?>
        </div>
        <div data-reveal>
          <?php farm67_picture([
            'src' => 'about-02.jpg',
            'alt' => '',
            'class' => 'rounded-2xl h-auto w-full object-cover',
            'loading' => 'lazy',
          ]); ?>
        </div>
        <div data-reveal>
          <?php farm67_picture([
            'src' => 'about-03.jpg',
            'alt' => '',
            'class' => 'rounded-2xl h-auto w-full object-cover',
            'loading' => 'lazy',
          ]); ?>
        </div>
      </div>

      <div class="relative mt-20 hidden md:block">
        <div class="absolute inset-0 -z-10 overflow-hidden">
          <div class="h-full w-full"></div>
          <div class="absolute -top-40 left-1/2 h-80 w-[200%] -translate-x-1/2 rounded-t-[100%]"></div>
        </div>

        <div class="md:gap-x-25 grid grid-cols-1 gap-y-12 md:grid-cols-2 md:items-center">
          <div data-reveal data-reveal-delay="100">
            <?php farm67_picture([
              'src' => 'about-02.jpg',
              'alt' => '',
              'class' => 'rounded-2xl h-auto w-full justify-self-end object-cover md:w-auto',
              'loading' => 'lazy',
            ]); ?>
          </div>
          <div data-reveal data-reveal-delay="150">
            <?php farm67_picture([
              'src' => 'about-03.jpg',
              'alt' => '',
              'class' => 'md:w-120 rounded-2xl h-auto w-full justify-self-start object-cover',
              'loading' => 'lazy',
            ]); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
