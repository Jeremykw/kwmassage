var gulp = require('gulp'),
	uglify = require('gulp-uglify');

gulp.task('minifyJs', function() {
	gulp.src('js/*.js')
	.pipe(uglify())
	.pipe(gulp.dest('_site_production/js'))
});