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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/css/libs/font-awesome.min.css',
    'resources/css/libs/bootstrap.css',
    'resources/css/libs/style.css',
    'resources/css/libs/wow.css'
],'public/css/libs.css');


mix.scripts([
    'resources/js/libs/jquery-1.9.1.min.js',
    'resources/js/libs/jssor.slider.min.js',
    'resources/js/libs/skill.bars.jquery.js',
    'resources/js/libs/wow.js',
    'resources/js/libs/custom.js'
],'public/js/libs.js');


mix.browserSync('shades.test');


