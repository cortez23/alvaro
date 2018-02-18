'use strict';

var gulp = require('gulp'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	sass = require('gulp-sass');

gulp.task('sass', function () {
	
	var processors = [
	autoprefixer({ browsers: ['last 2 versions'] })
	];

	return gulp.src('./sass/*.scss')
	  .pipe(sass().on('error', sass.logError))
	  .pipe(postcss(processors))
	  .pipe(gulp.dest('./css'));
});

//ejecuta la tarea sass
gulp.task('default', ['sass']) 

//ejecuta sass y activo a cada modificacion 
gulp.task('watch',['sass'], function() {
	gulp.watch('./sass/**/*.scss', ['sass']);
    // content
});
