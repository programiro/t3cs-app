/*global require*/
var plugins = require('gulp-load-plugins')();
var gulp = require('gulp');
var config = require('../gulpconfig')();
var gutil = require('gulp-util');
var autoprefixer = require('autoprefixer');

gulp.task('compile:styles', styles);

function styles() {
  return gulp.src(config.css.src)
    .pipe(plugins.plumber({
      errorHandler: function (err) {
        gutil.log(gutil.colors.red(`[${err.name}: Line ${err.line} | Column ${err.column}]`))
        gutil.log(gutil.colors.yellow(`${err.messageFormatted}`))
        this.emit('end');
      }
    }))
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.sass({outputStyle: 'nested'}))
    .pipe(plugins.postcss([autoprefixer()]))
    .pipe(plugins.sourcemaps.write({includeContent: false, sourceRoot: '../../../../../../src/StyleSheets'}))
    .pipe(gulp.dest(config.css.dest))
    .pipe(plugins.sass({outputStyle: 'compressed'}))
    .pipe(plugins.postcss([autoprefixer()]))
    .pipe(plugins.rename({suffix: '.min'}))
    .pipe(gulp.dest(config.css.dest));
}