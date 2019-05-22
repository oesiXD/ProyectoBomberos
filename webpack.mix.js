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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'public/calendar/js/moment.js',
    'public/calendar/js/moment.min.js',
    'public/calendar/js/jquery.min.js',
    'public/calendar/js/fullcalendar.min.js',
    'public/calendar/js/es.js'
], 'public/calendar/js/all.js');

mix.styles([
    'public/calendar/css/fullcalendar.min.css',

], 'public/calendar/css/all.css');