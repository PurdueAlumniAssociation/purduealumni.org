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
    .pipe(gulp.dest('dist/prod/css/')) // build css without sourcemaps
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('dist/css/')) // build css with sourcemaps
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

// live reload
gulp.task('connect', function() {
    connect.server({
        root: "dist",
        livereload: true
    });
});

// wordpress
gulp.task('wordpress', function () {
  gulp.src(['dist/css/style.css',
            'src/themes/purdue-alumni-association/**/*.php'])
    // include module files
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    // clean up html
    // .pipe(htmlPrettify({indent_char:' ',indent_size:4}))
    .pipe(gulp.dest('dist/themes/purdue-alumni-association'))
});

gulp.task('watch', function () {
  gulp.watch('src/sass/**/*.scss', ['sass']);
  gulp.watch('src/html/**/*.html', ['html']);
});

gulp.task('default', ['html', 'sass', 'connect', 'watch']);