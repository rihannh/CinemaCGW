const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js')
    .js('./node_modules/flowbite/src/flowbite.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .postCss('./node_modules/flowbite/src/flowbite.css', 'public/css');

