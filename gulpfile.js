// inject dependecies
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify');
    
// create object with all paths
var paths = {
  css: {
    src: './resurces/assets/scss/*.scss',
    dest: './public/css/'
  },
  js: {
    src: './resurces/assets/js/*.js',
    dest: './public/js/'
  }
};

// create function for compiling scss
function css(){
  return (
    gulp
      .src(paths.css.src)
      .pipe(sass({
        errorLogToConsole: true,
        outputStyle: 'compressed'
      }))
      .on('error', console.error.bind(console))
      .pipe(rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(paths.css.dest))
  );
}

// create function for minimizing js
function js(){
  return (
    gulp
      .src(paths.js.src)
      .pipe(uglify())
      .pipe(rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(paths.js.dest))
    );
}

// create function for watch tasks
function watch(){
  css();
  js();
  gulp.watch(paths.css.src, css);
  gulp.watch(paths.js.src, js);
}

// export functions to tasks
exports.css = css;
exports.js = js;
exports.watch = watch;




