/*global require*/
var gulp = require('gulp');
var watch = require('gulp-watch');
var config = require('../gulpconfig')();

gulp.task('copy:misc', ['clean:misc'], fonts);

function fonts() {
  gulp.src(config.copy.misc.src + '/**/*', {base: config.copy.misc.src})
    .pipe(gulp.dest(config.copy.misc.dest));
}