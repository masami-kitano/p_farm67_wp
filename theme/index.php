<?php
/**
 * The main template file (fallback)
 *
 * @package Farm67_Theme
 */

get_header(); ?>

<main role="main" class="bg-[#FFFCF1] py-24 md:py-28 lg:py-32">
  <div class="mx-auto max-w-4xl px-gutter-sm-5 lg:px-gutter-lg-20">
    <?php if (have_posts()): ?>
      <ul class="text-15 md:text-16 lg:text-18 flex w-full flex-col gap-4 md:gap-6">
        <?php while (have_posts()):
          the_post(); ?>
          <li class="relative border-b border-[#D84830]">
            <div class="py-6 leading-relaxed md:py-8 md:leading-loose">
              <time class="block md:inline text-[#D84830]"><?php echo esc_html(
                get_the_date('Y.n.j'),
              ); ?></time>
              <h2 class="text-[#D84830]">
                <a href="<?php the_permalink(); ?>" class="before:absolute before:inset-0"><?php the_title(); ?></a>
              </h2>
            </div>
          </li>
        <?php
        endwhile; ?>
      </ul>

      <div class="mt-10 md:mt-12">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else: ?>
      <p class="text-[#D84830]"><?php esc_html_e('No posts found.', 'farm67'); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer();
