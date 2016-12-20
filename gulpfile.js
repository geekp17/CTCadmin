const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */


 elixir(function(mix) {

     // Sass
     var options = {
         includePaths: [
             'node_modules/foundation-sites/scss',
             'node_modules/motion-ui/src'
         ]
     };

     mix.sass('app.scss', null, options);

     // Javascript
     var jQuery = '../../../node_modules/jquery/dist/jquery.js';
     var foundationJsFolder = '../../../node_modules/foundation-sites/js/';

     mix.babel([
        jQuery,
        foundationJsFolder + 'foundation.core.js',
        // Include any needed components here. The following are just examples.
        foundationJsFolder + 'foundation.util.mediaquery.js',
        foundationJsFolder + 'foundation.util.keyboard.js',
        foundationJsFolder + 'foundation.util.timerAndImageLoader.js',
        foundationJsFolder + 'foundation.tabs.js',
        // This file initializes foundation
        'start_foundation.js'
     ]);

 });
 1
 2
 3
 4
 5
 6
 7
 8
 9
 10
 11
 12
 13
 14
 15
 16
 17
 18
 19
 20
 21
 22
 23
 24
 25
 26
 27
 28
 29
 elixir(function(mix) {

     // Sass
     var options = {
         includePaths: [
             'node_modules/foundation-sites/scss',
             'node_modules/motion-ui/src'
         ]
     };

     mix.sass('app.scss', null, options);

     // Javascript
     var jQuery = '../../../node_modules/jquery/dist/jquery.js';
     var foundationJsFolder = '../../../node_modules/foundation-sites/js/';

     mix.babel([
        jQuery,
        foundationJsFolder + 'foundation.core.js',
        // Include any needed components here. The following are just examples.
        foundationJsFolder + 'foundation.util.mediaquery.js',
        foundationJsFolder + 'foundation.util.keyboard.js',
        foundationJsFolder + 'foundation.util.timerAndImageLoader.js',
        foundationJsFolder + 'foundation.tabs.js',
        // This file initializes foundation
        'start_foundation.js'
     ]);

 });
