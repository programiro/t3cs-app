/*global require*/
var gulp = require('gulp');
var config = require('../gulpconfig')();
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var shell = require('gulp-shell');

gulp.task('lint:typoscript', shell.task([
    config.typo3.typoscript
  ],{
    quiet: false,
    verbose: false
  })
);