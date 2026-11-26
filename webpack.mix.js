const mix = require('laravel-mix');

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js/app.js')
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'resources/css/app.css',
    ], 'public/css/app.css')
    .version();