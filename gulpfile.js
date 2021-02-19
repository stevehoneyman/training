var gulp = require('gulp');
var sass = require('gulp-sass');

// check Gulp's running
var checkDate = new Date();

gulp.task('default', function(done) {
	console.log('Gulp\'s running in the training theme on: ' + checkDate);
  done()
});

// compile scss files into app.css
gulp.task('sass', function(){
  return gulp.src('css/scss/app.scss')
    .pipe(sass({outputStyle:'expanded'}))
    .pipe(gulp.dest('css'))
});

// watch
gulp.task('watch', function(){
  gulp.watch('css/scss/**/*.scss', gulp.series(['sass']));
});
