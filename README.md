# p-medium

WordPress テーマ開発用のスターターリポジトリです。
`wp-env` でローカル WordPress を立ち上げ、`Vite + TypeScript + Tailwind CSS 4` でアセットを開発・ビルドします。

## 構成

- テーマ: `theme/`
- wp-env 上のテーマ名: `p-medium-theme`（`.wp-env.json` の `mappings` 参照）
- フロントエントリ: `src/scripts/main.ts`
- ビルド出力: `theme/dist/`

## 必要環境

- Node.js `>= 22.0.0`
- npm `>= 10.0.0`
- Docker Desktop（`wp-env` 用）

## セットアップ

```bash
npm install
```

## 開発

```bash
npm run dev
```

- WordPress: http://localhost:8888
- Vite: http://localhost:5173

## コマンド

- `npm run dev` — WordPress + Vite を同時起動
- `npm run build` — 本番ビルド（`theme/dist/` に出力）
- `npm run vite` — Vite のみ起動
- `npm run wp:start` / `wp:stop` / `wp:destroy` — wp-env 操作
- `npm run format` — Prettier 整形

## ディレクトリ

```text
src/
  scripts/main.ts
  styles/main.css
theme/
  functions.php
  header.php / footer.php
  index.php / page.php / single.php / 404.php
  assets/images/   # 画像配置用
  dist/            # build 出力
```
