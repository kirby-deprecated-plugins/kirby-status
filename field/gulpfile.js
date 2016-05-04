var gulp = require('gulp');

var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');

// CSS
gulp.task('css', function() {
	gulp.src('assets/scss/style.scss')
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(gulp.dest('./assets/css/'))
		.pipe(minifyCss())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(notify("CSS generated!"))
	;
});

// Default
gulp.task('default',function() {
	gulp.watch('assets/scss/**/*.scss',['css']);
});