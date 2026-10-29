# AGENTS.md

How coding agents should work in this repository. `README.md` covers setup and commands. This file covers what is specific to this tree and easy to get wrong.

## Dev environment tips

```bash
npm install             # Node version from "engines" in package.json.
composer install
npm start               # WordPress Playground at http://127.0.0.1:9400, logged in.
npm run lint            # Stylelint, PHPCS and the theme validator.
```

The repository is mounted as the `tsumiki` theme on the WordPress beta, with `WP_DEVELOPMENT_MODE` set to `theme`, so `theme.json` is not cached. The Playground site is reset on every start; its setup lives in `.playground/blueprint.json`. Theme Check is installed there: run it from Appearance > Theme Check before a release.

There is no build step. Templates, parts, patterns, `theme.json` and CSS are served as they are in the tree; reload to see an edit.

### Key directories

-   `templates/*.html` - Block templates. Each is a one-line delegate to a pattern.
-   `parts/*.html` - Template parts. Each is a one-line delegate to a pattern.
-   `patterns/*.php` - The markup of every template and part, plus the insertable patterns. The slug is `tsumiki/<file name>`.
-   `functions.php` - All theme PHP.
-   `theme.json` - Global settings and styles.
-   `style.css` - The theme header plus the CSS that `theme.json` cannot express. It loads on the front end and, through `add_editor_style()`, in the editors.
-   `readme.txt` - The WordPress.org readme.
-   `bin/validate-theme.mjs` - Validates `theme.json`, pattern headers and block markup (`npm run lint:theme`).
-   `.github/`, `.husky/`, `.playground/`, `bin/`, `package.json`, `composer.json` and the lint configs - Repository tooling, not part of the theme. They are `export-ignore`d in `.gitattributes`.

## Distribution

The theme is released on GitHub, and updates through [Git Updater](https://git-updater.com/) via the `GitHub Theme URI` header in `style.css`. A WordPress.org release is under consideration, so keep the theme ready for it: build the release zip with `git archive`, so the `export-ignore`d tooling stays out of it, and keep Theme Check passing. WordPress.org would also require a `screenshot.png`.

## Architectural decisions

-   **The pattern is the source of truth.** `templates/index.html` is `<!-- wp:pattern {"slug":"tsumiki/hidden-index"} /-->` and nothing else. Editing a delegate template or part changes nothing at render time; edit the pattern it names. HTML files cannot run PHP, so text, block names, ARIA labels and theme asset URLs could not be translated or resolved there. A pattern that only fills a template or part is hidden from the inserter with `Inserter: no`, and its file and slug take the `hidden-` prefix; template patterns also carry `Template Types:`. Insertable patterns use `Categories`, `Block Types` and `Description`.
-   **Text domain and prefix are `tsumiki`.** Every user-visible string goes through an i18n function, including block names in `metadata` and ARIA labels.
-   **PHP follows the WordPress Coding Standards**, in tabs. Functions in `functions.php` are wrapped in `if ( ! function_exists( '…' ) ) : … endif;`, every docblock carries `@since Tsumiki x.y.z`, and `@package Tsumiki` heads the file.
-   **Keep versions in sync.** `Requires at least` and `Requires PHP` in `style.css`, `readme.txt` and `phpcs.xml.dist` match, and the `$schema` in `theme.json` follows `Requires at least`. `npm run lint:theme` checks the schema.

## Do not reformat block markup

The delimiters in templates, parts and patterns are Gutenberg's serialization, not hand-written HTML: flush left, one delimiter per line, a blank line between sibling blocks, and a block's wrapper element on the same line as the opening delimiter of its first child:

```html
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title /-->
```

Reindenting or rewrapping it produces a large diff that the next editor round-trip undoes.

## Design files

`design.pen` is a Pencil design file. Read and write it with the `pencil` MCP tools, not with file read or edit tools.

## PR instructions

-   Run `npm run lint` and check the change on the front end and in the Site Editor.
-   Do not bump `Version:` or add a changelog entry unless the change is a release.
