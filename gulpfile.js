var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    /* mix.sass('app.scss')
     .scripts([
     'libs/jquery.js',
     'app.js',
     'reporter.js'
     ], './public/js/app.js')
     .version([
     '/js/app.js',
     '/css/app.css'
     ]); */

    mix.sass('app.scss')
        .scripts([
            'app.js',
        ], './public/js/app.js')
        .version([
            '/css/app.css',
            '/js/app.js'
        ])
        .browserSync({
            proxy: 'http://todo.dev'
        });
});
