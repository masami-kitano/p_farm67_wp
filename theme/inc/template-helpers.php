<?php
/**
 * テンプレート用の描画ヘルパー群。
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

/**
 * セクション見出し（英語の大きいタイトル + 日本語サブ + アイコン丸）。
 *
 * @param array $args {
 *   @type string $title     英語タイトル（例: about）。
 *   @type string $sub_title 日本語サブタイトル。
 *   @type string $color     'orange' | 'white'。
 *   @type string $icon      'about' | 'menu' | 'product' | 'strawberry' | 'news' | 'access'。
 * }
 */
function farm67_heading(array $args = []): void
{
  $a = wp_parse_args($args, [
    'title' => '',
    'sub_title' => '',
    'color' => 'orange',
    'icon' => 'about',
  ]);

  if ($a['title'] === '') {
    return;
  }

  set_query_var('farm67_heading', $a);
  get_template_part('template-parts/heading');
}

/**
 * セクション見出し用アイコンのインライン SVG を出力する。
 */
function farm67_heading_icon(string $icon, string $color): void
{
  // 円アイコンの塗り分け（white バリアントの news / access は明色丸）。
  $fill = $color === 'white' ? '#FFFCF1' : '#D84830';

  if ($icon === 'strawberry') { ?>
    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="h-10 w-auto md:h-12" aria-hidden="true">
      <path d="M12 2c-1.1 0-2 .9-2 2 0 .74.4 1.38 1 1.72V7c-2.21 0-4 1.79-4 4v8c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2v-8c0-2.21-1.79-4-4-4V5.72c.6-.34 1-.98 1-1.72 0-1.1-.9-2-2-2z" />
      <circle cx="9" cy="13" r="1" />
      <circle cx="9" cy="16" r="1" />
      <circle cx="12" cy="14" r="1" />
      <circle cx="12" cy="17" r="1" />
      <circle cx="15" cy="13" r="1" />
      <circle cx="15" cy="16" r="1" />
    </svg>
    <?php return;}
  ?>
  <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-10 w-auto md:h-12" aria-hidden="true">
    <circle cx="24" cy="24" r="24" fill="<?php echo esc_attr($fill); ?>" />
  </svg>
  <?php
}

/**
 * メニューカテゴリー見出し（アイコン + 英語ラベル + 日本語ピル + 説明）。
 *
 * @param array $args {
 *   @type string $category    'lunch' | 'sweets' | 'drink'。
 *   @type string $label       英語ラベル。
 *   @type string $label_ja    日本語ラベル。
 *   @type string $description 説明文（任意）。
 * }
 */
function farm67_menu_category_heading(array $args = []): void
{
  $a = wp_parse_args($args, [
    'category' => 'lunch',
    'label' => '',
    'label_ja' => '',
    'description' => '',
  ]);

  set_query_var('farm67_menu_category', $a);
  get_template_part('template-parts/menu-category-heading');
}

/**
 * メニューカテゴリーアイコンのインライン SVG を出力する。
 */
function farm67_menu_category_icon(string $category): void
{
  if ($category === 'lunch') { ?>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" aria-hidden="true">
      <path d="M4 11c0-1 1-2 2-2h12c1 0 2 1 2 2v4c0 3-3 6-8 6s-8-3-8-6v-4z" />
      <path d="M6 9c0-2 2-4 6-4s6 2 6 4" />
      <path d="M7 8c0-1.5 1.5-3 5-3s5 1.5 5 3" />
    </svg>
    <?php return;}

  if ($category === 'sweets') { ?>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" aria-hidden="true">
      <path d="M8 21V13c0-2 1-4 4-4s4 2 4 4v8" />
      <line x1="6" y1="21" x2="18" y2="21" />
      <path d="M8 17c1-1 2-1 4 0s3 1 4 0" />
      <path d="M8 13c1-1 2-1 4 0s3 1 4 0" />
      <path d="M9 9c.5-1 1.5-2 3-2s2.5 1 3 2" />
      <path d="M10 7c.5-.5 1-1 2-1s1.5.5 2 1" />
      <circle cx="12" cy="4.5" r="1" />
      <line x1="12" y1="5.5" x2="12" y2="7" />
    </svg>
    <?php return;}

  if ($category === 'softcream') { ?>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" aria-hidden="true">
      <path d="M10.5 4.2a1.6 1.6 0 0 1 3 0" />
      <path d="M9 7a3 3 0 0 1 6 0" />
      <path d="M7.5 10.2a4.5 4.5 0 0 1 9 0" />
      <path d="M6.6 12.4h10.8" />
      <path d="M7.8 12.4 12 21l4.2-8.6" />
    </svg>
    <?php return;}// drink
  ?>
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" aria-hidden="true">
    <path d="M17 8h1a4 4 0 1 1 0 8h-1" />
    <path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z" />
    <line x1="6" x2="6" y1="2" y2="4" />
    <line x1="10" x2="10" y1="2" y2="4" />
    <line x1="14" x2="14" y1="2" y2="4" />
  </svg>
  <?php
}

/**
 * Instagram アイコン（色は currentColor で制御）。
 */
function farm67_instagram_icon(string $class = 'w-6 h-6'): void
{
  ?>
  <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="<?php echo esc_attr(
    $class,
  ); ?>" aria-hidden="true">
    <path d="M23.6156 4.25625C29.925 4.25625 30.6656 4.28438 33.1594 4.39688C35.4656 4.5 36.7125 4.88438 37.5469 5.2125C38.6531 5.64375 39.4406 6.15 40.2656 6.975C41.0906 7.8 41.6062 8.5875 42.0281 9.69375C42.3469 10.5281 42.7406 11.775 42.8438 14.0813C42.9562 16.575 42.9844 17.3156 42.9844 23.625C42.9844 29.9344 42.9562 30.675 42.8438 33.1688C42.7406 35.475 42.3562 36.7219 42.0281 37.5563C41.5969 38.6625 41.0906 39.45 40.2656 40.275C39.4406 41.1 38.6531 41.6156 37.5469 42.0375C36.7125 42.3563 35.4656 42.75 33.1594 42.8531C30.6656 42.9656 29.925 42.9938 23.6156 42.9938C17.3062 42.9938 16.5656 42.9656 14.0719 42.8531C11.7656 42.75 10.5188 42.3656 9.68438 42.0375C8.57812 41.6063 7.79063 41.1 6.96563 40.275C6.14063 39.45 5.625 38.6625 5.20312 37.5563C4.88438 36.7219 4.49063 35.475 4.3875 33.1688C4.275 30.675 4.24688 29.9344 4.24688 23.625C4.24688 17.3156 4.275 16.575 4.3875 14.0813C4.49063 11.775 4.875 10.5281 5.20312 9.69375C5.63438 8.5875 6.14063 7.8 6.96563 6.975C7.79063 6.15 8.57812 5.63438 9.68438 5.2125C10.5188 4.89375 11.7656 4.5 14.0719 4.39688C16.5656 4.275 17.3062 4.25625 23.6156 4.25625ZM23.6156 0C17.2031 0 16.3969 0.028125 13.875 0.140625C11.3625 0.253125 9.64688 0.65625 8.14688 1.2375C6.59063 1.8375 5.27813 2.65313 3.96563 3.96563C2.65313 5.27813 1.84687 6.6 1.2375 8.14688C0.65625 9.64688 0.253125 11.3625 0.140625 13.8844C0.028125 16.3969 0 17.2031 0 23.6156C0 30.0281 0.028125 30.8344 0.140625 33.3563C0.253125 35.8688 0.65625 37.5844 1.2375 39.0938C1.8375 40.65 2.65313 41.9625 3.96563 43.275C5.27813 44.5875 6.6 45.3938 8.14688 46.0031C9.64688 46.5844 11.3625 46.9875 13.8844 47.1C16.4062 47.2125 17.2031 47.2406 23.625 47.2406C30.0469 47.2406 30.8438 47.2125 33.3656 47.1C35.8781 46.9875 37.5938 46.5844 39.1031 46.0031C40.6594 45.4031 41.9719 44.5875 43.2844 43.275C44.5969 41.9625 45.4031 40.6406 46.0125 39.0938C46.5938 37.5938 46.9969 35.8781 47.1094 33.3563C47.2219 30.8344 47.25 30.0375 47.25 23.6156C47.25 17.1938 47.2219 16.3969 47.1094 13.875C46.9969 11.3625 46.5938 9.64688 46.0125 8.1375C45.4125 6.58125 44.5969 5.26875 43.2844 3.95625C41.9719 2.64375 40.65 1.8375 39.1031 1.22813C37.6031 0.646875 35.8875 0.24375 33.3656 0.13125C30.8344 0.028125 30.0281 0 23.6156 0Z" />
    <path d="M23.6156 11.4844C16.9219 11.4844 11.4844 16.9125 11.4844 23.6156C11.4844 30.3188 16.9219 35.7469 23.6156 35.7469C30.3094 35.7469 35.7469 30.3094 35.7469 23.6156C35.7469 16.9219 30.3094 11.4844 23.6156 11.4844ZM23.6156 31.4906C19.2656 31.4906 15.7406 27.9656 15.7406 23.6156C15.7406 19.2656 19.2656 15.7406 23.6156 15.7406C27.9656 15.7406 31.4906 19.2656 31.4906 23.6156C31.4906 27.9656 27.9656 31.4906 23.6156 31.4906Z" />
    <path d="M36.2253 13.8363C37.789 13.8363 39.0565 12.5687 39.0565 11.0051C39.0565 9.44142 37.789 8.17383 36.2253 8.17383C34.6616 8.17383 33.394 9.44142 33.394 11.0051C33.394 12.5687 34.6616 13.8363 36.2253 13.8363Z" />
  </svg>
  <?php
}

/**
 * 矢印付きのピルボタン（View more / 応募する / 予約 などの共通形）。
 *
 * 元の React コンポーネントは個別に配色が異なるため、配色は呼び出し側から
 * クラス文字列で渡す。
 *
 * @param array $args {
 *   @type string $href            リンク先。
 *   @type string $label           ラベルテキスト。
 *   @type string $width_class     幅クラス（例: 'w-[266px]'）。
 *   @type string $font_class      フォントクラス（'font-ja' | 'font-en'）。
 *   @type string $variant_classes アンカーの配色クラス。
 *   @type string $circle_classes  右の丸の配色クラス。
 *   @type bool   $new_tab         別タブで開くか。
 *   @type string $label_class     ラベルの追加クラス（text-nowrap など）。
 * }
 */
function farm67_pill_button(array $args = []): void
{
  $a = wp_parse_args($args, [
    'href' => '#',
    'label' => 'View more',
    'width_class' => 'w-[266px]',
    'font_class' => 'font-en',
    'variant_classes' => 'text-foreground hover:bg-foreground hover:text-white',
    'circle_classes' => 'bg-foreground text-white',
    'new_tab' => false,
    'label_class' => '',
  ]);

  set_query_var('farm67_pill_button', $a);
  get_template_part('template-parts/pill-button');
}
