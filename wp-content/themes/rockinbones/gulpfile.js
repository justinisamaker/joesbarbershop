var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var del = require('del');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var runSequence = require('run-sequence');
var imagemin = require('gulp-imagemin');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

// ERROR HANDLING
var errorHandler = {
  errorHandler: notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
  })
};

// PATH DECLARATIONS
var paths = {
  dist: 'dist',
  scss: 'scss',
  css: 'dist/css',
  csspages: 'dist/css/pages',
  jssrc: 'js-src',
  js: 'dist/js',
  imgsrc: 'images',
  img: 'dist/img',
  php: '**/*.php'
};

// BROWSERSYNC
gulp.task('browsersync', function(){
  var files = [
    paths.css + '**/*',
    paths.php
  ];

  browserSync.init(files, {
    proxy: 'localhost/joesbarbershop'
  });
});

// SASS PAGES TASK
gulp.task('sass-pages', function(){
  gulp.src(paths.scss + '/pages/**/*')
    .pipe(plumber(errorHandler))
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 4 versions', 'ie 8', 'ie 9']
    }))
    .pipe(minifyCss())
    .pipe(gulp.dest(paths.csspages))
    .pipe(reload({stream:true}));
});

// SASS GLOBALS TASK
gulp.task('sass-globals', function(){
  gulp.src([ paths.scss + '/globals.scss', paths.scss + '/global/**/*', paths.scss + '/modules/**/*' ])
    .pipe(plumber(errorHandler))
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 4 versions', 'ie 8', 'ie 9']
    }))
    .pipe(minifyCss())
    .pipe(gulp.dest(paths.css))
    .pipe(reload({stream:true}));
});

// JAVASCRIPT TASK
gulp.task('javascript', function(){
  gulp.src(paths.jssrc + '/**/*')
    .pipe(plumber(errorHandler))
    .pipe(jshint())
    .pipe(jshint.reporter('fail'))
    .pipe(uglify())
    .pipe(concat('main.js'))
    .pipe(gulp.dest(paths.js))
    .pipe(reload({stream:true}));
});

// IMAGE TASK
gulp.task('images', function(){
  gulp.src(paths.imgsrc + '/**/*')
    .pipe(plumber(errorHandler))
    .pipe(imagemin({
      optimizationLevel: 7,
      progressive: true
    }))
    .pipe(gulp.dest(paths.img))
    .pipe(reload({stream:true}));
});

// CLEAN TASK
gulp.task('clean', function(){
  del([
    paths.css + '/*',
    paths.js + '/*',
    paths.img + '/*'
  ]);
});

// WATCH TASK
gulp.task('watch', function(){
  gulp.watch([ paths.scss + '/global.scss', paths.scss + '/global/**/*', paths.scss + '/modules/**/*' ], ['sass-globals', 'sass-pages']);
  gulp.watch(paths.scss + '/pages/*', ['sass-pages']);
  gulp.watch(paths.jssrc + '/**/*', ['javascript']);
  gulp.watch(paths.imgsrc + '/**/*', ['images']);
});

gulp.task('default', function(callback){
  runSequence(
    'clean',
    ['sass-globals', 'sass-pages', 'javascript', 'images'],
    ['watch', 'browsersync'],
    callback
  );
});