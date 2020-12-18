const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw();
mix.js('source/_assets/js/main.js', 'js');
mix.sass('source/_assets/sass/main.scss', 'css');
// .postCss('source/_assets/css/main.css', 'css', [
//     require('postcss-import'),
//     require('tailwindcss'),
// ])
mix.options({
    processCssUrls: false,
    postCss: [
        require('postcss-import'),
        require('tailwindcss')
    ]
});
mix.version();;
