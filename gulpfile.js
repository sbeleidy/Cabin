var gulp = require('gulp');
var elixir = require('laravel-elixir');

gulp.task("dupefiles", function() {
	gulp.src("vendor/bower_down/jquery/dist/jquery.min.js")
		.pipe(gulp.dest("public/assets/js/vendor"));
	gulp.src("node_modules/foundation-sites/js/foundation.min.js")
		.pipe(gulp.dest("public/assets/js/vendor"));
	gulp.src("node_modules/foundation-sites/js/foundation/foundation.equalizer.js")
		.pipe(gulp.dest("public/assets/js/vendor"));
});
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
    mix.sass('app.scss');
});
