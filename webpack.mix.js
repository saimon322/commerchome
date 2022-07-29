const mix = require('laravel-mix');
require('laravel-mix-svg-sprite');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/admin.js', 'public/js')
    .sass('resources/scss/style.scss', 'public/css')
    .svgSprite(
        'resources/img/svg-sprite', // The directory containing your SVG files
        'img/svg-sprite', // The output path for the sprite
        {}
    )
    .copy('resources/img/', 'public/img')
    .copy('resources/fonts/**/*', 'public/fonts')
    .copy('resources/css/*', 'public/css');
