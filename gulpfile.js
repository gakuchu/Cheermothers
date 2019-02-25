var path = require('path');
var fs = require('fs');
var pkg = JSON.parse(fs.readFileSync('./package.json'));
var assetsPath = path.resolve(pkg.path.assetsDir);
var homePath = path.resolve(pkg.path.homeDir);

var gulp = require('gulp');

// sass compiler
var sass = require('gulp-sass');
// add vender prifix
var autoprefixer = require('gulp-autoprefixer');
// error handling
var plumber = require('gulp-plumber');
gulp.task('sass', function() {
  return gulp.src(path.join(assetsPath, 'sass/*.scss'))
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest(path.join(assetsPath, 'css')));
});

gulp.task('default', function() {
  gulp.watch(path.join(assetsPath, 'sass/*.scss'), gulp.series('sass'));
});