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
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps()
}
mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/jquery-3.3.1.js', 'public/js')
    .js('resources/assets/js/popper-1.14.4.js', 'public/js')
    .js('resources/assets/js/bootstrap-4.1.3.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets/images/img-article', 'public/images/img-article')
    .copyDirectory('resources/assets/css/bootstrap.css', 'public/css');

