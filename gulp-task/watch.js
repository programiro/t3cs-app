/*global require*/
var gulp = require('gulp');
var config = require('../gulpconfig')();
var runSequence  = require('run-sequence');
var gutil = require('gulp-util');

gulp.task('watch', ['build'], function() {
  'use strict';
  gulp.watch(config.typo3.typoscriptWatch, ['lint:typoscript']);
  gulp.watch(config.js.watch, ['compile:vendor:scripts']);
  gulp.watch(config.js.watch, ['compile:scripts']);
  gulp.watch(config.css.watch, ['compile:styles']);
  gulp.watch(config.copy.fonts.watch, ['copy:fonts']);
  gulp.watch(config.copy.misc.watch, ['copy:misc']);
  gulp.watch(config.copy.images.watch, ['copy:images']);
});