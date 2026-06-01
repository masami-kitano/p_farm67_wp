<?php
/**
 * Single post = News detail
 *
 * @package Farm67_Theme
 */

$farm67_posts_page = (int) get_option('page_for_posts');
$farm67_news_url = $farm67_posts_page ? get_permalink($farm67_posts_page) : home_url('/news/');

get_header();
?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <?php while (have_posts()):
    the_post(); ?>
    <article class="px-gutter-sm-5 lg:px-gutter-lg-20 mx-auto max-w-4xl">
      <div data-reveal>
        <div class="mb-8 md:mb-10">
          <time class="text-14 md:text-16 block text-[#D84830]"><?php echo esc_html(
            get_the_date('Y.m.d'),
          ); ?></time>
          <h1 class="text-24 md:text-32 lg:text-36 mt-4 font-bold text-[#D84830]"><?php the_title(); ?></h1>
        </div>
      </div>

      <div data-reveal data-reveal-delay="100">
        <div class="text-16 md:text-18 prose prose-lg max-w-none text-[#333]">
          <?php the_content(); ?>
        </div>
      </div>

      <div data-reveal data-reveal-delay="200">
        <div class="mt-12 md:mt-16">
          <a href="<?php echo esc_url(
            $farm67_news_url,
          ); ?>" class="text-16 md:text-18 inline-flex items-center text-[#D84830] transition-opacity hover:opacity-70">
            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            ニュース一覧に戻る
          </a>
        </div>
      </div>
    </article>
  <?php
  endwhile; ?>
</main>

<?php get_footer();
