const {src, dest, series, parallel, watch} = require('gulp');
const del = require('del');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const fileinclude = require('gulp-file-include');

const babel= require('gulp-babel');
const minify = require('gulp-minify');

const origin = 'src';
const destination = 'build';
const devPath = '../../../../../Applications/MAMP/htdocs/wc/wp-content/';

sass.compiler = require('node-sass');

async function clean(cb) {
  await del(destination);
  cb();
}

function html(cb) {
  src(`${origin}/**/*.html`, { ignore: `${origin}/html/partials/*.*` })
  .pipe(fileinclude({
        prefix: '@@',
        basepath: '@file'
  }))
  .pipe(dest(destination));
  cb();
}

function php(cb) {
  src(`${origin}/**/*.php`, { ignore: `${origin}/ignore/*.*` })
  .pipe(dest(destination));
  cb();
}

async function css(cb) {
    await del([`${devPath}css`], { force: true });

    src(`${origin}/sass/style.scss`)
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    .pipe(dest(`${destination}/css`));


    src(`${origin}/sass/pages/*.scss`)
    .pipe(autoprefixer({
      cascade: false
    }))
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(dest(`${destination}/css`));

  cb();
}

function js(cb) {
  //src(`${origin}/**/*.js`).pipe(dest(`${destination}`));

  src(`${origin}/**/*.js`)
  .pipe(babel({
    presets: ['@babel/env']
  }))
  .pipe(minify())
  .pipe(dest(`${destination}/js`));
  cb();
}

function watcher(cb) {
  watch(`${origin}/**/*.html`).on('change', series(clean, html))
  watch(`${origin}/**/*.scss`).on('change', series(clean, css))
  watch(`${origin}/**/*.php`).on('change', series(clean, php))
  watch(`${origin}/**/*.js`).on('change', series(clean, js))
  cb();
}

function watcher_with_browsersync(cb) {
  watch(`${origin}/**/*.html`).on('change', series(clean, html, browserSync.reload))
  watch(`${origin}/**/*.scss`).on('change', series(clean, css, browserSync.reload))
  watch(`${origin}/**/*.php`).on('change', series(clean, php, browserSync.reload))
  watch(`${origin}/**/*.js`).on('change', series(clean, js, browserSync.reload))
  cb();
}

function server(cb) {
  browserSync.init({
    notify: false,
    open: true,
    server: {
      baseDir: `${destination}/html`
    }
  })
  cb();
}

async function wpcss(cb) {
    await del([`${devPath}themes/purdue-alumni-association/style.css`, `${devPath}themes/purdue-alumni-association/style.css.map`, `${devPath}themes/purdue-alumni-association/css/*.*`, `${devPath}themes/purdue-alumni-association/css/*.*.map` ], { force: true });

    src(`${origin}/sass/style.scss`)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('./'))
        .pipe(dest(`${devPath}themes/purdue-alumni-association/`))

    src(`${origin}/sass/pages/*.scss`)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('./'))
        .pipe(dest(`${devPath}themes/purdue-alumni-association/css/`))
    cb();
}

function wpphp(cb) {
  src(`${origin}/themes/purdue-alumni-association/**/*.php`)
  .pipe(dest(`${devPath}themes/purdue-alumni-association/`));
  src(`${origin}/plugins/**/*.php`)
  .pipe(dest(`${devPath}plugins/`));
  cb();
}

function wpjs(cb) {
  src(`${origin}/themes/purdue-alumni-association/**/*.js`)
  .pipe(minify())
  .pipe(dest(`${devPath}themes/purdue-alumni-association/`));
  cb();
}


exports.default = series(clean, parallel(html, css, js, php), watcher);
exports.server = series(clean, parallel(html, css, js, php), server, watcher_with_browsersync);
exports.wpdev = parallel(wpcss, wpphp, wpjs);