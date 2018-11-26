let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/app.js', 'public/themes/another/assets/js')
    .sass('public/themes/another/assets/scss/main.scss', 'public/themes/another/assets/css')
    .sass('public/themes/another/assets/scss/jd.scss', 'public/themes/another/assets/css')
    .sass('public/themes/another/assets/scss/preload.scss', 'public/themes/another/assets/css');