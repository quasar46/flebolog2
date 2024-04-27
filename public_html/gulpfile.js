'use strict';
 
var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
 
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
    return gulp.src('./sass/**/*.sass')
    
    .pipe(sass({
      outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      
    }))
    .pipe(gulp.dest('./css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.sass', gulp.series('sass'));
});