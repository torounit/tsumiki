# Tsumiki

A WordPress block theme. Requires WordPress 7.2+ and PHP 8.2+.

## Requirements

- Node.js 24 or later, as set in `engines` in `package.json`
- PHP and Composer, for PHPCS

## Setup

```sh
npm install
composer install
```

`npm install` registers the husky pre-commit hook, which runs lint-staged on the staged files.

## Local environment

```sh
npm start
```

This starts WordPress at <http://127.0.0.1:9400> with the [WordPress Playground CLI](https://developer.wordpress.org/playground/), no Docker needed. The repository is mounted as the `tsumiki` theme on the WordPress beta, you are logged in, and `WP_DEVELOPMENT_MODE` is `theme`. The setup lives in [.playground/blueprint.json](.playground/blueprint.json), which also installs the Theme Check plugin and imports the theme unit test data.

The Playground site is reset every time it starts.

## Linting

```sh
npm run lint          # All of the below.
npm run lint:css      # Stylelint (WordPress CSS Coding Standards).
npm run lint:php      # PHPCS (WordPress Coding Standards, PHPCompatibilityWP).
npm run lint:php:fix  # Fix what PHPCBF can.
npm run lint:theme    # theme.json schema, pattern headers and block markup.
```

`lint:theme` runs [bin/validate-theme.mjs](bin/validate-theme.mjs), adapted from [Ipsum](https://github.com/WordPress/ipsum). It validates `theme.json` against the schema for the `Requires at least` version in `style.css`.

## GitHub Actions

- [lint.yml](.github/workflows/lint.yml) runs PHPCS, Stylelint and the theme validator on pull requests and pushes to `main`.
- [playground-preview.yml](.github/workflows/playground-preview.yml) posts a Playground preview link on pull requests, using [.github/blueprint.json](.github/blueprint.json).

## Distribution

The theme is released on GitHub and updates through [Git Updater](https://git-updater.com/). A WordPress.org release is under consideration. Development files are marked `export-ignore` in `.gitattributes`, so `git archive` exports only the theme:

```sh
git archive --format=zip --prefix=tsumiki/ -o tsumiki.zip HEAD
```

Run Theme Check (Appearance > Theme Check in `npm start`) before a release.
