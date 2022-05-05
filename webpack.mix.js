const mix = require('laravel-mix');

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

mix.webpackConfig({
    stats: {
        hash: true,
        version: true,
        timings: true,
        children: true,
        errors: true,
        errorDetails: true,
        warnings: true,
        chunks: true,
        modules: false,
        reasons: true,
        source: true,
        publicPath: true,
    }
});

mix.sass('resources/sass/global.scss', 'public/css')
    .sass('resources/sass/theme/red.scss', 'public/css/theme')
    .copy('resources/fonts', 'public/fonts')
    .copy('resources/assets', 'public/assets')
    .copy('resources/js', 'public/js')
    .copy('resources/spotlight', 'public/spotlight')
    .copy('node_modules/slick-carousel/slick', 'public/slick')
    .copy('resources/datepicker', 'public/datepicker');