var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	minifyCSS = require('gulp-minify-css'),
	minifyHTML = require('gulp-minify-html');

const SITE = '../kwmassage-stage' /* '_site_production'

/* Minify JS */
gulp.task('js', function() {
	gulp.src(SITE + '/js/*.js')
	.pipe(uglify())
	.pipe(gulp.dest(SITE + '/js'))
});

/* Minify CSS */
gulp.task('css', function() {
	gulp.src(SITE + '/**/*.css' )
	.pipe(minifyCSS())
	.pipe(gulp.dest(SITE))
});

/* Minify HTML */
gulp.task('min', ['css', 'js'], function() {
	gulp.src(SITE + '/**/**/*.html')
	.pipe(minifyHTML())
	.pipe(gulp.dest(SITE))
});