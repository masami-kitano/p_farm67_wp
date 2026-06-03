<?php
/**
 * Theme functions and definitions
 *
 * @package Farm67_Theme
 */

if (!defined('FARM67_VERSION')) {
  define('FARM67_VERSION', '1.0.1');
}

/**
 * テーマアセット（theme/assets/ 配下）の URL を返す。
 */
function farm67_asset(string $path): string
{
  return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * 画像（theme/assets/images/ 配下）の URL を返す。
 */
function farm67_img(string $path): string
{
  return farm67_asset('images/' . ltrim($path, '/'));
}

/**
 * Theme setup
 */
function farm67_setup(): void
{
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('customize-selective-refresh-widgets');
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');

  register_nav_menus([
    'primary' => esc_html__('Primary Menu', 'farm67'),
    'footer' => esc_html__('Footer Menu', 'farm67'),
  ]);

  add_theme_support('custom-logo', [
    'height' => 250,
    'width' => 250,
    'flex-width' => true,
    'flex-height' => true,
  ]);
}
add_action('after_setup_theme', 'farm67_setup');

/**
 * Set the content width in pixels
 */
function farm67_content_width(): void
{
  $GLOBALS['content_width'] = apply_filters('farm67_content_width', 1200);
}
add_action('after_setup_theme', 'farm67_content_width', 0);

/**
 * Disable WordPress global styles output on frontend.
 */
function farm67_disable_wp_global_styles(): void
{
  remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
  remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
  remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('init', 'farm67_disable_wp_global_styles');

/**
 * Dequeue style handles related to global styles.
 */
function farm67_dequeue_wp_global_style_handles(): void
{
  if (is_admin()) {
    return;
  }

  wp_dequeue_style('global-styles');
  wp_deregister_style('global-styles');

  wp_dequeue_style('classic-theme-styles');
  wp_deregister_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'farm67_dequeue_wp_global_style_handles', 100);

/**
 * トップとお知らせ詳細以外で、固定ヘッダー直下まで詰めるためのボディクラス。
 */
function farm67_body_classes(array $classes): array
{
  if (is_front_page()) {
    $classes[] = 'farm67-has-kv';
  }

  return $classes;
}
add_filter('body_class', 'farm67_body_classes');

/**
 * Output Vite development scripts in head
 */
function farm67_vite_dev_scripts(): void
{
  if (defined('WP_DEBUG') && WP_DEBUG) {
    $dev_server = 'http://localhost:5173'; ?>
    <script>
      var farm67Data = <?php echo wp_json_encode([
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('farm67-nonce'),
        'homeUrl' => home_url(),
      ]); ?>;
    </script>
    <script type="module" src="<?php echo esc_url($dev_server . '/@vite/client'); ?>"></script>
    <script type="module" src="<?php echo esc_url(
      $dev_server . '/src/scripts/main.ts',
    ); ?>"></script>
    <?php
  }
}
add_action('wp_head', 'farm67_vite_dev_scripts', 1);

/**
 * Enqueue scripts and styles (production)
 */
function farm67_scripts(): void
{
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();
  $is_dev = defined('WP_DEBUG') && WP_DEBUG;

  // 本番のみ静的ビルド成果物を読み込む。dev では Vite dev サーバの HMR 注入を
  // CSS の source of truth にするため、dist は読み込まない。
  if (!$is_dev) {
    $dist_style = $theme_dir . '/dist/style.css';
    if (is_readable($dist_style)) {
      wp_enqueue_style(
        'farm67-style',
        $theme_uri . '/dist/style.css',
        [],
        (string) filemtime($dist_style),
      );
    }

    if (file_exists($theme_dir . '/dist/main.js')) {
      wp_enqueue_script('farm67-main', $theme_uri . '/dist/main.js', [], FARM67_VERSION, true);

      wp_localize_script('farm67-main', 'farm67Data', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('farm67-nonce'),
        'homeUrl' => home_url(),
      ]);
    }
  }
}
add_action('wp_enqueue_scripts', 'farm67_scripts');

/**
 * `type="module"` を本番の main.js に付与する。
 */
function farm67_script_module_attr(string $tag, string $handle): string
{
  if ($handle === 'farm67-main') {
    return str_replace('<script ', '<script type="module" ', $tag);
  }

  return $tag;
}
add_filter('script_loader_tag', 'farm67_script_module_attr', 10, 2);

/**
 * SNS リンク（サイト共通）。
 */
function farm67_set_instagram_url(): string
{
  return 'https://www.instagram.com/yumekaidou_farm.67/';
}
add_filter('farm67_instagram_url', 'farm67_set_instagram_url');

require_once get_template_directory() . '/inc/template-helpers.php';
require_once get_template_directory() . '/inc/menu-data.php';
require_once get_template_directory() . '/inc/menu-page-data.php';
