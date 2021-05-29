const mix = require('laravel-mix')

mix.options({
    processCssUrls: false
})
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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
/* --------------------------------------------------------------
 *  SCSS
 * --------------------------------------------------------------
 */
mix.sass('resources/scss/admin.scss', 'public/theme/css')
    .sass('resources/scss/front.scss', 'public/theme/css')
    .sass('resources/scss/landing_page.scss', 'public/theme/css')
    .js('resources/js/admin.js','public/theme/js')
    .js('resources/js/front.js','public/theme/js')

if (mix.inProduction()) {
    mix.version()
}
