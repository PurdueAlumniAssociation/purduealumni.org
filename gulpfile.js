'use strict';

const gulp = require('gulp');

// sass
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');

// html
const fileinclude = require('gulp-file-include');
const htmlPrettify = require('gulp-html-prettify');

// js


// enable live reload
const connect = require('gulp-connect');

// const del = require('del');

// sass
gulp.task('sass', function () {
  gulp.src('src/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssnano())
    .pipe(sourcemaps.write('./'))

  .pipe(gulp.dest('dist/css/'))
  .pipe(connect.reload());
});

// html
gulp.task('html', function () {
  gulp.src(['src/html/**/*.html', '!src/html/partials/'])
  // include module files
  .pipe(fileinclude({
    prefix: '@@',
    basepath: '@file'
  }))
  // clean up html
  .pipe(htmlPrettify({indent_char:' ',indent_size:4}))
  .pipe(gulp.dest('dist/html/'))
  .pipe(connect.reload());
});

// js
gulp.task('js', function () {
  gulp.src('src/js/**/*.js')
  //.pipe(uglify())
  .pipe(gulp.dest('dist/js/'))
  .pipe(connect.reload());
});

// live reload
gulp.task('connect', function() {
    connect.server({
        root: "dist",
        livereload: true
    });
});

gulp.task('watch', function () {
  gulp.watch('src/sass/**/*.scss', ['sass']);
  gulp.watch('src/html/**/*.html', ['html']);
  gulp.watch('src/js/**/*.js', ['js']);
});

gulp.task('default', ['html', 'js', 'sass', 'connect', 'watch']);