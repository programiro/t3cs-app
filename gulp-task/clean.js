/*global require*/
var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();
var config = require('../gulpconfig')();

gulp.task('clean:scripts', function () {
  'use strict';
  return gulp.src([config.js.dest + '*[.js|.map|.gz]'])
    .pipe(plugins.rimraf({force: true}));
});

gulp.task('clean:styles', function () {
  'use strict';
  return gulp.src(config.css.dest, {read: false})
    .pipe(plugins.rimraf({force: true}));
});

gulp.task('clean:fonts', function () {
  'use strict';
  return gulp.src(config.copy.fonts.dest, {read: false})
    .pipe(plugins.rimraf({force: true}));
});

gulp.task('clean:images', function () {
  'use strict';
  return gulp.src(config.copy.images.dest, {read: false})
    .pipe(plugins.rimraf({force: true}));
});

gulp.task('clean:misc', function () {
  'use strict';
  return gulp.src(config.copy.misc.dest, {read: false})
    .pipe(plugins.rimraf({force: true}));
});