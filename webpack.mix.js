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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.styles([
        'resources/assets/front/plugins/fontawesome-free/css/all.min.css',
        'resources/assets/front/plugins/select2/css/select2.css',
        'resources/assets/front/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
        'resources/assets/front/css/front.min.css',


    ], 'public/assets/front/css/front.css'
);
mix.scripts([
    'resources/assets/front/plugins/jquery/jquery.min.js',
    'resources/assets/front/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/front/plugins/select2/js/select2.full.js',
    'resources/assets/front/js/front.min.js',
    'resources/assets/front/js/demo.js',
], 'public/assets/front/js/front.js');

mix.copyDirectory('resources/assets/front/img', 'public/assets/front/img');

mix.copy('resources/assets/front/css/front.min.css.map', 'public/assets/front/css/front.min.css.map');
