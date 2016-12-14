const elixir = require('laravel-elixir');

var critical = require('critical');

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

elixir(mix => {
    //mix.task('critical');
    mix.styles(['bootstrap-flex.min.css', 'oneui.min.css', 'app.css'], 'public/assets/css/all.min.css')
    .scripts(['oneui.min.js', 'typed.min.js', 'bootstrap.min.js'], 'public/assets/js/all.min.js')
    
});

gulp.task('critical', function (cb) {
    critical.generate({
        base: 'public/',
        src: 'index.html',
        css: [
            'public/assets/css/all.min.css',
        ],
        dimensions: [{
            width: 320,
            height: 480
        }, {
            width: 768,
            height: 1024
        }, {
            width: 1280,
            height: 960
        }],
        dest: 'public/assets/css/critical.css',
        minify: true,
        extract: false,
        ignore: ['font-face']
    });
});
