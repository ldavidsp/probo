const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.browserSync("hcc-org.ddev.site");
mix.sourceMaps();
mix.js('./assets/js/src/script.js', './assets/js/script.min.js')
  .sass('./assets/scss/style.scss', './assets/css/style.min.css', { sassOptions: { relativeUrls: false }})
  .options({processCssUrls: false});
