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


mix.styles([
    'resources/assets/plantilla/css/slick.css',
    'resources/assets/plantilla/css/slick-theme.css',
    'resources/assets/plantilla/css/animate.css',
    'resources/assets/plantilla/css/fonticons.css',
    'resources/assets/plantilla/css/font-awesome.min.css',
    'resources/assets/plantilla/css/bootstrap.css',
    'resources/assets/plantilla/css/magnific-popup.css',
    'resources/assets/plantilla/css/bootsnav.css',
    'resources/assets/plantilla/css/style.css',
    'resources/assets/plantilla/css/responsive.css'
], 'public/css/all.css')
    .mix.scripts([
        'resources/assets/plantilla/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
        'resources/assets/plantilla/js/vendor/jquery-1.11.2.min.js',
        'resources/assets/plantilla/js/vendor/bootstrap.min.js',
        'resources/assets/plantilla/js/jquery.magnific-popup.js',
        'resources/assets/plantilla/js/jquery.easing.1.3.js',
        'resources/assets/plantilla/js/slick.min.js',
        'resources/assets/plantilla/js/jquery.collapse.js',
        'resources/assets/plantilla/js/bootsnav.js',
        'resources/assets/plantilla/js/plugins.js',
        'resources/assets/plantilla/js/main.js',

    ], 'public/js/all.js')
    .js(['resources/js/app.js'],'public/js/app.js');
