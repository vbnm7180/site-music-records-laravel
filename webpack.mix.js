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

mix.js('resources/jquery/jquery-3.5.1.min.js', 'public/js/jquery-3.5.1.min.js');
mix.sass(['resources/sass/login.scss', 'resources/sass/main.scss', 'resources/sass/register.scss'], 'resources/css/sass.css');
mix.styles('resources/css', 'public/css/app.css');
mix.js('resources/js/main.js', 'public/js/app.js');