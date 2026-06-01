# farm67 / farm67-theme

夢街道farm67 サイト用の WordPress テーマ開発リポジトリです。
`wp-env` でローカル WordPress を立ち上げ、`Vite + TypeScript + Tailwind CSS 4` でアセットを開発・ビルドします。
（旧 Next.js 版 `farm67-web` を WordPress テーマに移植したものです。）

## 構成概要

- テーマ実体: `theme/`
- `wp-env` 上でのテーマ名: `farm67-theme`（`.wp-env.json` の `mappings` 参照）
- フロントのエントリ: `src/scripts/main.ts`
- 出力先: `theme/dist/`（`vite build`）

## 必要環境

- Node.js `>= 22.0.0`
- npm `>= 10.0.0`
- Docker Desktop（`wp-env` 実行に必要）

## セットアップ

```bash
npm install
```

## 開発起動

```bash
npm run dev
```

上記で以下を同時起動します。

- WordPress: [http://localhost:8888](http://localhost:8888)
- Vite: [http://localhost:5173](http://localhost:5173)

## よく使うコマンド

- `npm run dev` : WordPress + Vite を同時起動
- `npm run build` : 本番用ビルド（`theme/dist/` 出力）
- `npm run vite` : Vite のみ起動
- `npm run wp:start` : WordPress コンテナ起動
- `npm run wp:stop` : WordPress コンテナ停止
- `npm run wp:destroy` : `wp-env` 環境を削除
- `npm run format` : Prettier 整形
- `npm run format:check` : Prettier チェック

## WordPress 側の初期設定

移植元のルーティングに合わせて、管理画面で以下を作成・設定してください。

- 固定ページ「メニュー」（スラッグ: `menu`） … `page-menu.php`
- 固定ページ「いちご」（スラッグ: `strawberry`） … `page-strawberry.php`
- 固定ページ「採用情報」（スラッグ: `recruit`） … `page-recruit.php`
- 設定 > 表示設定
  - ホームページの表示: 「固定ページ」→ フロントページに任意のページ、投稿ページに「お知らせ」（スラッグ: `news`）
  - フロントページは `front-page.php` が自動で使われます
- お知らせ（News）は通常の「投稿」を使用します（一覧: `home.php` / 個別: `single.php`）

## 主要ディレクトリ

```text
src/
  scripts/
    main.ts
    modules/
      header-menu.ts        # モバイルメニュー開閉
      reveal.ts             # スクロールフェードイン
      kv-swiper.ts          # トップ KV
      schedule-swiper.ts    # トップ スケジュール
      strawberry-swiper.ts  # いちごアーチスライダー
      menu-sidenav.ts       # メニューページのサイドナビ
  styles/
    main.css                # Tailwind v4 + デザイントークン + カスタム CSS
theme/
  assets/images/            # 画像（旧 public/images）
  inc/template-helpers.php  # 見出し / ボタン等の描画ヘルパー
  section/top/              # トップページの各セクション
  template-parts/           # 見出し・ボタン等の共通パーツ
  functions.php
  header.php / footer.php
  front-page.php            # トップ
  page-menu.php / page-strawberry.php / page-recruit.php
  home.php / single.php     # お知らせ一覧 / 詳細
  dist/                     # build 出力
```

## 備考

- テーマバージョンは `theme/functions.php` の `FARM67_VERSION` を使用しています。
- Tailwind のソーススキャン対象は `src/styles/main.css` 内の `@source` で定義しています。
- フェードインは要素に `data-reveal`（任意で `data-reveal-delay="120"`）を付与すると有効になります。

```

```
