# panel-lang — Locales Collection 🇬🇧🇹🇼🇨🇳🇷🇺

This repository contains locale (translation) files for the Pterodactyl panel. The following languages are available. Each language can be downloaded as a zip file from the Links below.

> ⚠️ NOTE: Many translations in this repository were machine-generated. They may require human proofreading for tone, terminology, and context. If you can help, please edit the relevant language folder and open a PR.

---

## Supported languages

| Language | Code | Status | Download |
|---|---:|---|---|
| English | `en` | Source (English) | [Download (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/en.zip) ✅ |
| Japanese | `ja` | Original Japanese files | [Download (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/ja.zip) ✅ |
| Traditional Chinese (Taiwan) | `zh-TW` | Initial translation (machine) — Quick QA done | [Download (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/zh-TW.zip) ✅ |
| Simplified Chinese (China) | `zh-CN` | Converted from `zh-TW` (automated) — Needs review | [Download (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/zh-CN.zip) ✅ |
| Russian | `ru` | Initial translation (machine) — Quick QA done | [Download (ZIP)](https://raw.githubusercontent.com/appipinopi/panel-lang/add-locales-zh-tw-zh-cn-ru/dist/ru.zip) ✅ |

---

## How to review

1. Download the zip and inspect strings in a code editor or test within a running Panel instance.  
2. If corrections are needed, edit the files in the language folder and open a PR, or comment on the PR with suggestions.  
3. For broad terminology changes, consider proposing a `GLOSSARY.md` to standardize translations across languages.

---

## Developer notes 🔧
- Keep placeholders (`:name`, `:id`) and HTML tags untouched in translations.  
- Run `php -l <file>` after changes to ensure valid PHP syntax.

---

If you prefer, I can perform the proofreading and apply fixes directly — tell me which language to prioritize.