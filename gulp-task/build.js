/*global require*/
var gulp = require('gulp');
var config = require('../gulpconfig')();
var runSequence  = require('run-sequence');

gulp.task('build', function(callback) {
  runSequence(
    'clean:styles',
    'clean:scripts',
    'clean:misc',
    'compile:vendor:scripts',
    'compile:scripts',
    'compile:styles',
    'copy:fonts',
    'copy:misc',
    'copy:images',
    callback);
});