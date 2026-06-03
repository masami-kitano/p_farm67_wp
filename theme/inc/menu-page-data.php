<?php
/**
 * メニューページ専用データ（下層 /menu/ ページ用）
 *
 * トップページのメニュー（section/top/menu.php・inc/menu-data.php）とは
 * 独立して管理する。ここを編集してもトップページには影響しない。
 *
 * 価格の表示可否（farm67_show_prices）と価格フォーマット
 * （farm67_format_price）は inc/menu-data.php の共通関数を利用する。
 *
 * @package Farm67_Theme
 */

if (!defined('ABSPATH')) {
  exit();
}

/**
 * メニューページの商品一覧を返す。
 *
 * @return array<int, array<string, mixed>>
 */
function farm67_menu_page_items(): array
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
      'name' => 'ゆめさき苺ミルクかき氷',
      'image' => 'menus/yumesaki-ichigo-milk.jpg',
      'category' => 'sweets',
      'description' =>
        "",
      'price' => 1780,
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
      'name' => 'ゆめさきトウモロコシかき氷',
      'image' => 'menus/sweet-06.jpg',
      'category' => 'sweets',
      'description' =>
        '',
      'price' => 1380,
    ],
    [
      'name' => 'おシャインピンス',
      'image' => 'menus/sweet-02.jpg',
      'category' => 'sweets',
      'description' =>
        '',
      'price' => 1680,
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
      'name' => '珈琲ピンスに恋をして',
      'image' => 'menus/sweet-05.jpg',
      'category' => 'sweets',
      'description' =>
        '',
      'price' => 1680,
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
 * メニューページのカテゴリ一覧を返す。
 *
 * @return array<int, array<string, string>>
 */
function farm67_menu_page_categories(): array
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
