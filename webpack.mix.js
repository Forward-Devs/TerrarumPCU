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

var plugin =  'resources/assets/plugins/';

mix.js('resources/assets/js/app.js', 'public/js/app.js')
    .scripts([
           'public/assets/plugins/jquery/jquery.min.js',
           'public/assets/plugins/bootstrap/js/popper.min.js',
           'public/assets/plugins/bootstrap/js/bootstrap.min.js',
           'resources/theme/js/jquery.slimscroll.js',
           'resources/theme/js/waves.js',
           'resources/theme/js/sidebarmenu.js',
           'public/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js',
           'public/assets/plugins/sparkline/jquery.sparkline.min.js',
           'public/assets/plugins/sparkline/jquery.sparkline.min.js',
           'resources/theme/js/custom.min.js',
           'public/assets/plugins/d3/d3.min.js',
           'public/assets/plugins/c3-master/c3.min.js',
           'resources/theme/js/dashboard1.js'
       ], 'public/js/all.js')
       .styles([
              'public/assets/plugins/bootstrap/css/bootstrap.min.css',
              'public/assets/plugins/c3-master/c3.min.css',
              'resources/theme/css/style.css',
              'resources/theme/css/colors/blue.css'
          ], 'public/css/all.css')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .browserSync('laravue');
