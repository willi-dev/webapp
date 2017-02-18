var gulp = require( 'gulp' );
var sass = require( 'gulp-sass' );
var minifyJS = require( 'gulp-uglify' );
var minifyCSS = require( 'gulp-minify-css' );
var loadPlugin = require( 'gulp-load-plugins' )();
var distDir = 'dist/';

var materializePath = [
	'sass/components/',
];

gulp.task( 'start', function(){
	console.log( 'start task...' );
})

/*
 * sass processor
 */
gulp.task('sass-processor', function(){
	gulp.src( 'sass/materialize.scss')
		.pipe( loadPlugin.sass(
			{
				includePaths: materializePath,
				errLogToConsole: true,
				outputStyle: 'extended'
			}
		).on('error', loadPlugin.sass.logError) )
		.pipe( gulp.dest('./css/') );
});

/*
 * minify js
 */

/*
 * watch
 */
gulp.task( 'watch', ['start', 'sass-processor'], function(){
	gulp.watch( 'sass/components/**/*.scss', ['sass-processor'] );
})

gulp.task( 'default', ['watch'] );