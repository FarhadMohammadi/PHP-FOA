var elixir = require('laravel-elixir');
elixir.config.assetsPath = '';
elixir.config.js.folder = '';

var gulp = require('gulp');

elixir(function (mix) {
    mix.scripts([
        'resources/assets/angular/user/config/',
        'resources/assets/angular/user/controllers/',
        'resources/assets/angular/user/directives/',
        'resources/assets/angular/user/services/'
    ], 'public/js');
});