/*global require*/
var plugins = require('gulp-load-plugins')();
var gulp = require('gulp');
var stylish = require('jshint-stylish');
var config = require('../gulpconfig')();
var gutil = require('gulp-util');
var mainBowerFiles = require('main-bower-files');
var gulpFilter = require('gulp-filter');

gulp.task('compile:scripts', scripts);

function scripts() {
  return gulp.src(config.js.src)
    .pipe(plugins.plumber({
      errorHandler: function (err) {
        gutil.log(gutil.colors.red(`[${err.name}: Line ${err.lineNumber}]`))
        gutil.log(gutil.colors.yellow(`[${err}]`))
        this.emit('end');
      }
    }))
    .pipe(plugins.jshint())
    .pipe(plugins.jshint.reporter('jshint-stylish'))
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.concat(config.js.destFileName))
    .pipe(plugins.sourcemaps.write())
    .pipe(gulp.dest(config.js.dest))
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.uglify())
    .pipe(plugins.rename({suffix: '.min'}))
    .pipe(plugins.sourcemaps.write())
    .pipe(plugins.plumber.stop())
    .pipe(gulp.dest(config.js.dest));
}

gulp.task('compile:vendor:scripts', vendorScripts);

function vendorScripts() {
  var filterJS = gulpFilter('**/*.js');

  gulp.src(mainBowerFiles({
      paths: {
        bowerDirectory: './bower_components',
        bowerJson: './bower.json'
      }
    }))
    .pipe(filterJS)
    .pipe(plugins.sourcemaps.write())
    .pipe(plugins.concat(config.js.destVendorFileName))
    .pipe(plugins.sourcemaps.write())
    .pipe(gulp.dest(config.js.dest))
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.uglify())
    .pipe(plugins.sourcemaps.write())
    .pipe(plugins.rename({suffix: '.min'}))
    .pipe(gulp.dest(config.js.dest));
};