var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    plumber = require('gulp-plumber'),
    browsersync = require('browser-sync'),
    del = require('del');

// SET THEME PATH
var basePaths = {
  theme: 'wp-content/themes/barber/library'
};

// SET UP ERROR HANDLING WITH PLUMBER
var onError = function(err){
    console.log(err);
};

// SET UP BROWSERSYNC
var reload = browsersync.reload;

gulp.task('browsersync', function() {
    var files = [
        basePaths.theme + '/css/**/*',
        basePaths.theme + '/*.php'
    ];
 
    browsersync.init(files, {
        proxy: "localhost/joesbarbershop/",
        notify: false
    });
});

// STYLES TASK
gulp.task('styles', function() {
  gulp.src(basePaths.theme + '/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest(basePaths.theme + '/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest(basePaths.theme + '/css'))
    .pipe(notify({ message: 'Styles task complete' })
    .pipe(reload({stream:true})));
});

// WATCH
gulp.task('default', ['styles', 'browsersync'], function(){
    gulp.watch(basePaths.theme + '/scss/**/*.scss',['styles']);
});
