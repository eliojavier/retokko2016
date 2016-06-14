var elixir = require('laravel-elixir'),
    paths = {
        'jquery': './vendor/bower_components/jquery/dist/',
        'bootstrap': './vendor/bower_components/bootstrap-sass/assets/'
    }

elixir(function(mix) {
    mix.sass("app.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .scripts([
            paths.jquery + "jquery.js",
            paths.bootstrap + "javascripts/bootstrap.js"
        ], 'public/js/app.js','./');
});