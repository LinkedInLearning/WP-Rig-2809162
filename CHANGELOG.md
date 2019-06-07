# Changelog

## 2.0.0
- Full refactor of dev file structure. See [#133](https://github.com/wprig/wprig/pull/133). Props @ataylorme.
- Full refactor of Gulp process. See [#47](https://github.com/wprig/wprig/pull/47). Props @ataylorme.
- Full refactor of PHP codebase, leveraging PHP7 features. See [#185](https://github.com/wprig/wprig/pull/185). Props @felixarntz.
- Tweak template parts for more granular adjustments and overriding in child themes. See [#244](https://github.com/wprig/wprig/pull/244). Props @felixarntz.
- Add support for SSL certificates. See [#92](https://github.com/wprig/wprig/pull/92). Props @ataylorme.
- Fix theme slug replacement process and use `wp-rig` instead of `wprig` throughout the codebase. See [#93](https://github.com/wprig/wprig/pull/93). Props @felixarntz.
- Watch for theme config changes and rebuild more efficiently. See [#123](https://github.com/wprig/wprig/pull/123). Props @ataylorme.
- Respect PHP 7.0 and WordPress 4.5 version requirements, use `functions.php` as plain 5.2-compatible entry file. See [#59](https://github.com/wprig/wprig/pull/59). Props @ataylorme, @felixarntz.
- Add unit and integration tests infrastructure. See [#114](https://github.com/wprig/wprig/pull/114). Props @felixarntz.
- Add theme support for responsive embeds. See [#219](https://github.com/wprig/wprig/pull/219). Props @benoitchantre.
- Add the privacy policy link. See [#213](https://github.com/wprig/wprig/pull/213). Props @benoitchantre.
- Use `filemtime()` only in development for asset versions. See [#164](https://github.com/wprig/wprig/pull/164). Props @benoitchantre.
- Retrieve the theme version dynamically for asset versions in production. See [#176](https://github.com/wprig/wprig/pull/176), [#190](https://github.com/wprig/wprig/pull/190), [#200](https://github.com/wprig/wprig/pull/200). Props @benoitchantre.
- Allow disabling PHPCS in development workflow. See [#170](https://github.com/wprig/wprig/pull/170). Props @ataylorme.
- Add `500.php` and `offline.php` templates for PWA support. See [#212](https://github.com/wprig/wprig/pull/212). Props @felixarntz.
- Print the static `skip-link-focus-fix` script for IE11 inline instead of requiring an extra request. See [#139](https://github.com/wprig/wprig/pull/139). Props @westonruter.
- Add gif extension to processed image paths. See [#117](https://github.com/wprig/wprig/pull/117). Props @ataylorme.
- Add `stylelint`. See [#56](https://github.com/wprig/wprig/pull/56). Props @ataylorme.
- Update PHPCompatibility to version 9 and remove deprecated coding standards annotations. See [#249](https://github.com/wprig/wprig/pull/249). Props @felixarntz.
- Fix numerous CSS bugs and Gutenberg compatibility issues. See [#127](https://github.com/wprig/wprig/pull/127), [#173](https://github.com/wprig/wprig/pull/173), [#179](https://github.com/wprig/wprig/pull/179), [#188](https://github.com/wprig/wprig/pull/188), [#193](https://github.com/wprig/wprig/pull/193), [#196](https://github.com/wprig/wprig/pull/196), [#197](https://github.com/wprig/wprig/pull/197), [#202](https://github.com/wprig/wprig/pull/202), [#206](https://github.com/wprig/wprig/pull/206), [#299](https://github.com/wprig/wprig/pull/299). Props @benoitchantre, @mor10, @jdelia.
- Add abstracted theme config file. See [#233](https://github.com/wprig/wprig/pull/233). Props @Shelob9.
- Add theme screenshot file. See [#263](https://github.com/wprig/wprig/pull/263). Props @bamadesigner.
- Ensure `content.css` stylesheet always loads when needed. See [#141](https://github.com/wprig/wprig/pull/141). Props @bamadesigner.
- Replace `require-uncached` with `import-fresh`. [`require-uncached`](https://www.npmjs.com/package/require-uncached) has been deprecated in favor of [`import-fresh`](https://www.npmjs.com/package/import-fresh). See [#296](https://github.com/wprig/wprig/pull/296). Props @ataylorme.
- Upgrade WordPress coding standards to 2.0. See [#288](https://github.com/wprig/wprig/pull/295). Props @ataylorme, @benoitchantre.
- Use pure CSS files for CSS custom properties and media queries
`/assets/css/src/_custom-properties.css` for custom properties.
`/assets/css/src/_custom-media.css` for custom media queries.
See [#281](https://github.com/wprig/wprig/pull/281). Props @mor10.
- Use `.browserslistrc` for browser support definitions. See [#227](https://github.com/wprig/wprig/pull/227). Props @ataylorme.
- Allow adjusting the mechanism for how stylesheets are loaded, for better compatibility with contexts like AMP or Customizer. See [#319](https://github.com/wprig/wprig/pull/319). Props @felixarntz.
- Add a `run-phpcbf` to Composer scripts. See [#360](https://github.com/wprig/wprig/pull/360). Props @ataylorme.
- Replaces `install` with `rig-init` in the `scripts` section of `package.json` in order to decouple `npm install` and `composer install`. Added a new `npm run rig-init` command to run both `npm install` and `composer install` with one command. `npm install` now only installs NPM packages. See [#357](https://github.com/wprig/wprig/pull/357). Props @ataylorme.
- Remove Sass support to fully rely on PostCSS. See [#425](https://github.com/wprig/wprig/pull/425). Props @ataylorme.

## 1.0.5
- Do not initialize menus until DOM is loaded. See [#140](https://github.com/wprig/wprig/pull/140). Props @bamadesigner.
- Fix PHPCodeSniffer issues and violations. Props @mor10, @felixarntz.
- Fix incorrect grammar in comment. See [#151](https://github.com/wprig/wprig/pull/151). Props @ecotechie.

## 1.0.4
- Update CSS (front and editor styles) to meet current Gutenberg recommendations as of October 1, 2018. Props mor10.
- Enable default block styles by default in functions.php. Props mor10.
- Add readme.txt file as per [Theme Handbook](https://developer.wordpress.org/themes/release/writing-documentation/). Props mor10.

## 1.0.3
- Add Gutenberg editor-font-sizes. Props @atanas-angelov-dev
- Improve conditional logic in wprig_add_body_style(). Props @iliman
- Update WordPress Coding Standards to 1.0.0. Props @mor10

## 1.0.2
- Updated theme support for Gutenberg color palette with a single array attribute. Props @webmandesign
- `./verbose/` folder no longer holds PHP files. Resolves duplicate functionality as described in [#51](https://github.com/wprig/wprig/issues/51).
- Update Composer dependencies to latest versions (and to remove update nag).
- Use slug for naming language file and ZIP bundle. Props @felixarntz.
- Fixed bug with is_amp_endpoint() being called too soon. Props @iliman.

## 1.0.1
- PHP process updated to run conditionally on theme name and theme slug rename and on first run. Props @hellofromtonya.
- Introduce guard clause to simplify wprig_is_amp() condition around wprig_scripts(). Props @Tabrisrp.
- Remove extraneous variable $post_count from index.php. Props @Soean.

## Initial release
- cssnext replaced with postcss-preset-env. No change in functionality. Props @mor10
- Separate theme name and theme slug in `themeConfig.js`. Props @felixarntz.
