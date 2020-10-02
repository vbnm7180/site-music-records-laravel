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

mix.styles(['resources/css/fonts.css', 'resources/css/null.css', 'resources/css/main.css'], 'public/css/app.css');
mix.styles('resources/css/login.css', 'public/css/login.css');
mix.styles('resources/css/register.css', 'public/css/register.css');
mix.js('resources/js/main.js', 'public/js/app.js');