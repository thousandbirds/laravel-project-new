const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .js('resources/js/animationnumbers.js', 'public/js/animationnumbers.js');
    
