/*global require*/
var gulp = require('gulp');
var config = require('../gulpconfig')();

var watch = require('gulp-watch');
var imagemin = require('gulp-imagemin');
var imageminJpg = require('imagemin-jpeg-recompress');
var imageminPng = require('imagemin-pngquant');
var imageminSvgo = require('imagemin-svgo');

gulp.task('copy:images', ['clean:images'], images);

function images() {
  gulp.src([config.copy.images.src+"/**/*.svg", config.copy.images.src+"/**/*.png", config.copy.images.src+"/**/*.jpg", config.copy.images.src+"/**/*.gif", config.copy.images.src+"/**/*.jpeg"])
    .pipe(imagemin(
      [imageminPng(), imageminJpg(), imageminSvgo()],
      {verbose: false}
    ))
    .pipe(gulp.dest(config.copy.images.dest));
}