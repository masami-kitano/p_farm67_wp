<?php
/**
 * Top: News section
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

$farm67_posts_page = (int) get_option('page_for_posts');
$farm67_news_url = $farm67_posts_page ? get_permalink($farm67_posts_page) : home_url('/news/');

$farm67_news_query = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 5,
  'ignore_sticky_posts' => true,
  'no_found_rows' => true,
]);
?>
<section id="news" class="bg-foreground px-gutter-sm-5 lg:px-gutter-lg-20 relative text-white">
  <div class="flex flex-col gap-y-8 md:gap-y-10">
    <div data-reveal>
      <?php farm67_heading([
        'title' => 'news',
        'sub_title' => 'お知らせ',
        'color' => 'white',
        'icon' => 'news',
      ]); ?>
    </div>
    <div class="px-gutter-sm-5 lg:px-gutter-lg-20">
      <div class="flex items-start gap-4 md:gap-6">
        <ul class="text-15 md:text-16 lg:text-18 flex w-full flex-col gap-4 md:gap-6">
          <?php if ($farm67_news_query->have_posts()): ?>
            <?php $farm67_delay = 0; ?>
            <?php while ($farm67_news_query->have_posts()):
              $farm67_news_query->the_post(); ?>
              <div data-reveal data-reveal-delay="<?php echo (int) $farm67_delay; ?>">
                <li class="relative border-b border-white">
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
            <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <div data-reveal>
              <li class="relative border-b border-white">
                <div class="py-6 leading-relaxed md:py-8 md:leading-loose">
                  <time class="block md:inline"><?php echo esc_html(date_i18n('Y.n.j')); ?></time>
                  <h3>ホームページをリニューアルしました。</h3>
                </div>
              </li>
            </div>
          <?php endif; ?>
        </ul>
      </div>

      <div class="lg:mt-30 mt-10 flex justify-center md:mt-12">
        <?php farm67_pill_button([
          'href' => $farm67_news_url,
          'label' => 'View more',
          'font_class' => 'font-en',
          'variant_classes' => 'border-white text-white hover:bg-white hover:text-foreground',
          'circle_classes' => 'bg-white text-foreground',
        ]); ?>
      </div>
    </div>
  </div>
</section>
