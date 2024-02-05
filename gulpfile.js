'use strict'; // Strict Mode

const { src, dest, task, watch, series, parallel } = require('gulp'),
  imagemin = require('gulp-imagemin'),
  sass = require('gulp-sass')(require('sass')),
  prefix = require('gulp-autoprefixer'),
  uglify = require('gulp-uglify'),
  plumber = require('gulp-plumber'),
  sourcemaps = require('gulp-sourcemaps'),
  browserSync = require('browser-sync'),
  connect = require('gulp-connect-php'),
  rootdir = {
    watch: '**/*.php',
  },
  styles = {
    src: 'src/styles/**/*.scss',
    build: 'styles/',
    watch: 'src/styles/**/*.scss',
  },
  scripts = {
    src: 'src/scripts/**/*.js',
    build: 'scripts/',
    watch: 'src/scripts/**/*.js',
  },
  assets = {
    src: 'src/assets/**/*',
    build: 'assets/',
    watch: 'src/assets/**/*',
  };

var reload = browserSync.reload;

///// Browser Sync & Watch - Runs and Reloads Projects
function browser_sync(done) {
  connect.server({}, function () {
    browserSync({ proxy: 'localhost' });
  });
  done();
}

function watchFiles(done) {
  watch(styles.watch, buildStyles).on('change', reload);
  watch(scripts.watch, buildScripts).on('change', reload);
  watch(rootdir.watch).on('change', reload);
  watch(assets.watch, buildAssets).on('change', reload);
  done();
}

///// Compress Scripts
function buildScripts() {
  return src(scripts.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(dest(scripts.build))
    .pipe(browserSync.stream());
}

///// Compile & Compress Styles
function buildStyles() {
  return src(styles.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(prefix('last 2 versions'))
    .pipe(sourcemaps.write())
    .pipe(dest(styles.build))
    .pipe(browserSync.stream());
}

///// Compress Images
function buildAssets() {
  return src(assets.src)
    .pipe(imagemin())
    .pipe(dest(assets.build))
    .pipe(browserSync.stream());
}

///// Default: Run during development
task('default', parallel(buildScripts, buildStyles, browser_sync, watchFiles));

///// Build: Run for newly pulled project
task('build', series(buildScripts, buildStyles, buildAssets));

///// Individual Tasks
task('styles', buildStyles);
task('scripts', buildScripts);
task('assets', buildAssets);
