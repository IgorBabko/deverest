var elixir = require('laravel-elixir');
var postStylus = require('poststylus');

require('laravel-elixir-livereload');
require('laravel-elixir-stylus');

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

elixir(function(mix) {

    mix
        .coffee('app.coffee')
        .stylus('app.styl', null, {
            use: [
                postStylus( [ 'autoprefixer', 'lost', 'rucksack-css' ] )
            ]
        })
        .livereload();

    mix
        .copy('bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
        .copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .copy('bower_components/bootstrap/dist/fonts', 'public/fonts')
        // .copy('bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/css')
        .copy('bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js')
        .copy('bower_components/jarallax/dist/jarallax.min.js', 'public/js')
        .copy('bower_components/masonry/dist/masonry.pkgd.min.js', 'public/js')
        .copy('bower_components/smooth-scroll.js/dist/js/smooth-scroll.min.js', 'public/js')
        // .copy('bower_components/social-likes/src/social-likes.js', 'public/js')
        .copy('bower_components/imagesloaded/imagesloaded.pkgd.min.js', 'public/js')
        .copy('bower_components/animate.css/animate.min.css', 'public/css')
        .copy('bower_components/bootstrap-carousel-swipe/carousel-swipe.js', 'public/js');
});
