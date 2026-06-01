<?php
/**
 * メニューデータ（トップ／下層メニューページ共通）
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

/**
 * メニュー商品一覧を返す。
 *
 * @return array<int, array<string, mixed>>
 */
function farm67_menu_items(): array
{
  return [
    [
      'name' => '夢王のたまごかけご飯セット',
      'image' => 'menus/lunch-01.jpg',
      'category' => 'lunch',
      'description' =>
        "シンプルだけど素材にこだわったたまごかけご飯。卵は「たまごかけごはん祭り」で3連覇＆初代殿堂入りを果たした日本一のたまご「夢王」。\nお米は夢工房がここ夢前町で大切に育てた「ぴかまる」または「こしひかり」。\nお味噌汁にはまるみそと夢工房が育てた季節のお野菜が入っています。夢王専用醤油をかけてお楽しみください♪\nCostaコーヒー付き",
      'price' => 650,
    ],
    [
      'name' => 'まるっぽかき氷',
      'image' => 'menus/sweet-01.jpg',
      'category' => 'sweets',
      'description' =>
        "いちごをまるごと氷にした、ゆめさき苺100%の“まるっぽかき氷”♡\n氷そのものがいちごだから、最後までずーっと濃厚いちご♪\n中に隠れた濃厚バニラソフトと混ぜれば、贅沢いちごミルクに味変できちゃう♥",
      'price' => 1780,
    ],
    [
      'name' => '抹茶沼パラダイス',
      'image' => 'menus/sweet-04.jpg',
      'category' => 'sweets',
      'description' =>
        '抹茶好きさんにぜひ食べてほしい！超濃厚抹茶ピンス。姫路の老舗お茶屋さん「こばやし茶店」さんのこだわりのお抹茶を贅沢に使用しています。',
      'price' => 1680,
    ],
    [
      'name' => '夢みるきなこのかき氷',
      'image' => 'menus/sweet-03.jpg',
      'category' => 'sweets',
      'description' =>
        '低温でじっくり焙煎した夢みるきなこをたっぷり乗せたふわっふわかき氷。大豆の風味が口の中に広がってミルク氷との相性も抜群！みたらしソースか黒蜜ソースが選べます♪',
      'price' => 1380,
    ],
    [
      'name' => 'COSTAコーヒー',
      'image' => 'menus/cafe-02.jpg',
      'category' => 'drink',
      'description' => 'ヨーロッパで50年以上愛されるカフェブランド「コスタコーヒー」を夢前町で味わえます。',
      'price' => '¥350〜',
    ],
    [
      'name' => 'ご当地ソフトクリーム',
      'image' => 'menus/cafe-03.jpg',
      'category' => 'softcream',
      'description' =>
        '全9種のソフトクリームは一年中味わえます♡ゆめさき苺、夢きなこが人気。たつの醤油もろみやごぼうも意外とクセになっちゃうかも',
      'price' => 330,
    ],
  ];
}

/**
 * メニューカテゴリ一覧を返す。
 *
 * @return array<int, array<string, string>>
 */
function farm67_menu_categories(): array
{
  return [
    [
      'id' => 'lunch',
      'label' => 'Lunch',
      'label_ja' => 'ランチ',
      'description' =>
        '日本一の卵「夢王」を使った、シンプルながらも贅沢な卵かけご飯をご提供しています。',
    ],
    [
      'id' => 'sweets',
      'label' => 'Sweets',
      'label_ja' => 'スイーツ',
      'description' => '季節限定のスイーツをご用意。6〜8月はかき氷、12月〜5月はいちごパフェ。',
    ],
    [
      'id' => 'softcream',
      'label' => 'Soft Serve',
      'label_ja' => 'ソフトクリーム',
      'description' => '全9種のソフトクリームを一年中ご用意。定番から変わり種まで楽しめます。',
    ],
    [
      'id' => 'drink',
      'label' => 'Drink',
      'label_ja' => 'ドリンク',
      'description' => 'お仕事の合間やティータイムにほっとひと息いかがですか？',
    ],
  ];
}

/**
 * 指定カテゴリの商品のみを返す。
 *
 * @return array<int, array<string, mixed>>
 */
function farm67_menu_items_by_category(string $category): array
{
  return array_values(
    array_filter(
      farm67_menu_items(),
      static fn($item) => $item['category'] === $category,
    ),
  );
}

/**
 * 価格を表示するかどうか。
 *
 * 金額改定中は false にして全ての価格を非表示にする。
 * 再表示する際は true に戻すだけでよい。
 */
function farm67_show_prices(): bool
{
  return false;
}

/**
 * 価格フォーマット（数値・文字列・未設定に対応。先頭に「¥」を付与）。
 *
 * - int / 数字のみの文字列: number_format して「¥1,000」
 * - 「¥350〜」等の文字列  : そのまま表示（「¥」が無ければ付与）
 * - null / 空文字         : 「¥0000」
 *
 * @param int|string|null $price
 */
function farm67_format_price($price): string
{
  if ($price === null || $price === '') {
    return '¥0000';
  }
  if (is_int($price) || ctype_digit((string) $price)) {
    return '¥' . number_format((int) $price);
  }
  $price = trim((string) $price);
  return strpos($price, '¥') !== false ? $price : '¥' . $price;
}
