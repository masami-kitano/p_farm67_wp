<?php
/**
 * SEO / OGP メタタグ
 *
 * - <title> の組み立て（トップ・下層で出し分け）
 * - meta description
 * - OGP / Twitter Card
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

/**
 * サイト共通のブランドタイトル。
 */
function farm67_brand_title(): string
{
  return '農家直営カフェ 夢街道farm67';
}

/**
 * サイト共通の説明文（トップ・フォールバック用）。
 */
function farm67_site_description(): string
{
  return '夢街道farm67では、一年を通して旬のスイーツや農業体験を楽しむことができます。';
}

/**
 * OGP 画像 URL。
 */
function farm67_ogp_image_url(): string
{
  return get_template_directory_uri() . '/ogp.png';
}

/**
 * document_title のセパレータを「|」にする。
 */
add_filter('document_title_separator', function (): string {
  return '|';
});

/**
 * <title> を組み立てる。
 * - トップ: 旬を味わい体験できる夢街道farm67
 * - 下層 : タイトル | 旬を味わい体験できる夢街道farm67
 */
function farm67_document_title_parts(array $parts): array
{
  $brand = farm67_brand_title();

  if (is_front_page() || is_home()) {
    return ['title' => $brand];
  }

  $parts['site'] = $brand;
  unset($parts['tagline']);

  return $parts;
}
add_filter('document_title_parts', 'farm67_document_title_parts');

/**
 * 現在ページの説明文を返す。
 */
function farm67_current_description(): string
{
  if (!is_front_page() && !is_home() && is_singular()) {
    $post = get_queried_object();
    if ($post instanceof WP_Post) {
      $text = has_excerpt($post)
        ? get_the_excerpt($post)
        : wp_strip_all_tags(strip_shortcodes($post->post_content ?? ''));
      $text = trim(preg_replace('/\s+/u', ' ', (string) $text));
      if ($text !== '') {
        return mb_substr($text, 0, 120);
      }
    }
  }

  return farm67_site_description();
}

/**
 * 現在ページの正規 URL を返す。
 */
function farm67_current_url(): string
{
  if (is_front_page() || is_home()) {
    return home_url('/');
  }

  if (is_singular()) {
    $permalink = get_permalink();
    if ($permalink) {
      return $permalink;
    }
  }

  global $wp;
  return home_url(add_query_arg([], $wp->request ?? ''));
}

/**
 * meta description / OGP / Twitter Card を出力する。
 */
function farm67_meta_tags(): void
{
  $brand = farm67_brand_title();
  $desc = farm67_current_description();
  $title = wp_get_document_title();
  $url = farm67_current_url();
  $image = farm67_ogp_image_url();
  $type = !is_front_page() && !is_home() && is_singular() ? 'article' : 'website';

  $tags = [
    ['name' => 'description', 'content' => $desc],
    ['property' => 'og:site_name', 'content' => $brand],
    ['property' => 'og:locale', 'content' => 'ja_JP'],
    ['property' => 'og:type', 'content' => $type],
    ['property' => 'og:title', 'content' => $title],
    ['property' => 'og:description', 'content' => $desc],
    ['property' => 'og:url', 'content' => $url],
    ['property' => 'og:image', 'content' => $image],
    ['property' => 'og:image:width', 'content' => '1200'],
    ['property' => 'og:image:height', 'content' => '630'],
    ['property' => 'og:image:type', 'content' => 'image/png'],
    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
    ['name' => 'twitter:title', 'content' => $title],
    ['name' => 'twitter:description', 'content' => $desc],
    ['name' => 'twitter:image', 'content' => $image],
  ];

  foreach ($tags as $tag) {
    $attr = isset($tag['property']) ? 'property' : 'name';
    $key = $tag[$attr];
    printf(
      "<meta %s=\"%s\" content=\"%s\">\n",
      esc_attr($attr),
      esc_attr($key),
      esc_attr($tag['content']),
    );
  }
}
add_action('wp_head', 'farm67_meta_tags', 5);
