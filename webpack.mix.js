const mix = require('laravel-mix');

mix.js('src/Assets/js/main.js', 'js')
    .vue()
    .sourceMaps(true, 'source-map')
    .sass('src/Assets/scss/main.scss', 'css')
    .setPublicPath('public/dist');


mix.disableSuccessNotifications();