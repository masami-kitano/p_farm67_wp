<?php
/**
 * Posts index = News list (slug: news)
 *
 * @package Farm67_Theme
 */

get_header(); ?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <section id="news" class="px-gutter-sm-5 lg:px-gutter-lg-20 bg-[#FFFCF1] text-[#D84830]">
    <div class="flex flex-col gap-y-8 md:gap-y-10">
      <div data-reveal>
        <?php farm67_heading([
          'title' => 'news',
          'sub_title' => 'お知らせ',
          'color' => 'orange',
          'icon' => 'news',
        ]); ?>
      </div>
      <div class="pl-gutter-sm-5 lg:pl-gutter-lg-20 flex items-start gap-4 md:gap-6">
        <ul class="text-15 md:text-16 lg:text-18 flex w-full flex-col gap-4 md:gap-6">
          <?php if (have_posts()): ?>
            <?php $farm67_delay = 0; ?>
            <?php while (have_posts()):
              the_post(); ?>
              <div data-reveal data-reveal-delay="<?php echo (int) $farm67_delay; ?>">
                <li class="relative border-b border-[#D84830]">
                  <div class="py-6 leading-relaxed md:py-8 md:leading-loose">
                    <time class="block md:inline"><?php echo esc_html(
                      get_the_date('Y.n.j'),
                    ); ?></time>
                    <h3>
                      <a href="<?php the_permalink(); ?>" class="before:absolute before:inset-0"><?php the_title(); ?></a>
                    </h3>
                  </div>
                </li>
              </div>
              <?php $farm67_delay += 100; ?>
            <?php
            endwhile; ?>
          <?php else: ?>
            <li class="relative border-b border-[#D84830]">
              <div class="py-6 leading-relaxed md:py-8 md:leading-loose">
                <p><?php esc_html_e('お知らせはまだありません。', 'farm67'); ?></p>
              </div>
            </li>
          <?php endif; ?>
        </ul>
      </div>

      <?php if (have_posts()): ?>
        <div class="pl-gutter-sm-5 lg:pl-gutter-lg-20">
          <?php the_posts_pagination([
            'mid_size' => 1,
            'prev_text' => '&larr;',
            'next_text' => '&rarr;',
          ]); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();
