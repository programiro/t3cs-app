/*global require*/
var gulp = require('gulp');
var watch = require('gulp-watch');
var config = require('../gulpconfig')();

gulp.task('copy:fonts', ['clean:fonts'], fonts);

function fonts() {
  gulp.src(config.copy.fonts.src + '/**/*', {base: config.copy.fonts.src})
    .pipe(gulp.dest(config.copy.fonts.dest));
}