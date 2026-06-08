<?php
/**
 * Theme functions and definitions
 *
 * @package PMedium_Theme
 */

if (!defined('PM_VERSION')) {
  define('PM_VERSION', '1.0.0');
}

/**
 * Theme setup
 */
function pm_setup(): void
{
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  ]);

  register_nav_menus([
    'primary' => esc_html__('Primary Menu', 'p-medium'),
  ]);
}
add_action('after_setup_theme', 'pm_setup');

/**
 * Set the content width in pixels
 */
function pm_content_width(): void
{
  $GLOBALS['content_width'] = apply_filters('pm_content_width', 1200);
}
add_action('after_setup_theme', 'pm_content_width', 0);

/**
 * Disable WordPress global styles output on frontend.
 */
function pm_disable_wp_global_styles(): void
{
  remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
  remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
  remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('init', 'pm_disable_wp_global_styles');

/**
 * Dequeue style handles related to global styles.
 */
function pm_dequeue_wp_global_style_handles(): void
{
  if (is_admin()) {
    return;
  }

  wp_dequeue_style('global-styles');
  wp_deregister_style('global-styles');
  wp_dequeue_style('classic-theme-styles');
  wp_deregister_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'pm_dequeue_wp_global_style_handles', 100);

/**
 * Output Vite development scripts in head
 */
function pm_vite_dev_scripts(): void
{
  if (defined('WP_DEBUG') && WP_DEBUG) {
    $dev_server = 'http://localhost:5173'; ?>
    <script>
      var pmData = <?php echo wp_json_encode([
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('pm-nonce'),
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
add_action('wp_head', 'pm_vite_dev_scripts', 1);

/**
 * Enqueue scripts and styles (production)
 */
function pm_scripts(): void
{
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();
  $is_dev = defined('WP_DEBUG') && WP_DEBUG;

  if (!$is_dev) {
    $dist_style = $theme_dir . '/dist/style.css';
    if (is_readable($dist_style)) {
      wp_enqueue_style('pm-style', $theme_uri . '/dist/style.css', [], (string) filemtime($dist_style));
    }

    if (file_exists($theme_dir . '/dist/main.js')) {
      wp_enqueue_script('pm-main', $theme_uri . '/dist/main.js', [], PM_VERSION, true);

      wp_localize_script('pm-main', 'pmData', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('pm-nonce'),
        'homeUrl' => home_url(),
      ]);
    }
  }
}
add_action('wp_enqueue_scripts', 'pm_scripts');

/**
 * Add type="module" to production main.js
 */
function pm_script_module_attr(string $tag, string $handle): string
{
  if ($handle === 'pm-main') {
    return str_replace('<script ', '<script type="module" ', $tag);
  }

  return $tag;
}
add_filter('script_loader_tag', 'pm_script_module_attr', 10, 2);
