var gulp       = require('gulp');
var bower      = require('gulp-bower-files');
var flatten    = require('gulp-flatten');
var concat     = require('gulp-concat');
var uglify     = require('gulp-uglify');
var minify     = require('gulp-minify-css');
var filter     = require('gulp-filter');
var annotate   = require('gulp-ng-annotate');

var gulpable   = ['bower-js', 'bower-css', 'js', 'css', 'custom-bootstrap', 'watch'];

gulp.task('custom-bootstrap', function() {
  return gulp.src('bower_components/bootstrap/dist/fonts/*')
  .pipe(gulp.dest('public/fonts'));
});

gulp.task('bower-js', function(){
  return bower()
  .pipe(flatten())
  .pipe(filter('*.js'))
  .pipe(concat('bower.js'))
  .pipe(gulp.dest('source'));
});

gulp.task('bower-css', function(){
  return bower()
  .pipe(flatten())
  .pipe(filter('*.css'))
  .pipe(concat('bower.css'))
  .pipe(gulp.dest('source'));
});

gulp.task('js', function(){
  return gulp.src('source/*.js')
  .pipe(concat('all.js'))
  .pipe(annotate())
  .pipe(uglify())
  .pipe(gulp.dest('public/js'));
});

gulp.task('css', function(){
  return gulp.src('source/*.css')
  .pipe(concat('all.css'))
  .pipe(minify())
  .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function(){
    gulp.watch('source/*', ['js', 'css']);
});

gulp.task('default', gulpable);