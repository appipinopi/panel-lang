# panel-lang — ロケール集 🇬🇧🇹🇼🇨🇳🇷🇺

このリポジトリは Pterodactyl パネル向けのロケール（翻訳ファイル）を集めたものです。以下の言語を用意しています。各言語は**クリックでダウンロード**できます（zip ファイル）。

> ⚠️ 注: 多くの翻訳は機械生成（自動翻訳）です。文体や用語の調整、誤訳の修正など人間によるレビューが必要です。ご協力いただける場合は、該当言語フォルダを修正して PR を送ってください。

---

## 対応言語一覧

| 言語 | コード | 状態 | ダウンロード |
|---|---:|---|---|
| English | `en` | 原本（英語） | N/A |
| 繁體中文（台湾） | `zh-TW` | 初回翻訳（機械→校正済み: 簡易 QA） | [ダウンロード (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/zh-TW.zip) ✅ |
| 简体中文（中国） | `zh-CN` | `zh-TW` を簡体化（自動） — 要レビュー | [ダウンロード (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/zh-CN.zip) ✅ |
| Русский (Russian) | `ru` | 初回翻訳（機械→簡易校正済み） — 要レビュー | [ダウンロード (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/ru.zip) ✅ |

---

## レビュー手順（短い説明）

1. ダウンロードしてローカルで文言・文脈を確認してください。
2. 修正が必要な場合は、`<言語フォルダ>` を編集して PR を送るか、PR 上でコメントしてください。
3. 重大な用語の統一が必要な場合は、このリポジトリに用語集（GLOSSARY.md）を追加する提案をしてください。

---

## 開発者向けメモ 🔧
- プレースホルダ（`:name`, `:id`, HTML タグ 等）は翻訳時にそのまま残してください。
- 変更後は `php -l <file>` で構文チェックを行ってください（このリポジトリでは自動的にチェック済みのファイルが多いです）。

---

ご希望があれば、私が PR 上で指摘箇所を直接修正してコミットすることもできます（翻訳の校正代行）。どの言語を優先してレビューしますか？