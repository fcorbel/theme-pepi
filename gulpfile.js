var gulp = require('gulp');
var sass = require('gulp-sass');
var bourbon = require("bourbon").includePaths;
var neat = require("bourbon-neat").includePaths;
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('hello', function() {
  console.log('hello world');
});

gulp.task('sass', function() {
  return gulp.src('src/sass/**/*.scss')
    .pipe(plumber(function(error) {
      gutil.log(gutil.colors.red(error.message));
      this.emit('end');
      }))
    .pipe(sourcemaps.init())
    .pipe(sass({
      includePaths: ['sass'].concat(bourbon).concat(neat)
    }))
    .pipe(sourcemaps.write('.maps'))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "localhost/pepi",
  });
});

gulp.task('watch', ['browserSync', 'sass'], function() {
  gulp.watch('src/sass/**/*.scss', ['sass']);
});
