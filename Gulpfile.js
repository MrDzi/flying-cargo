var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('./assets/css/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
});

//Watch task
gulp.task('default',function() {
    gulp.watch('./assets/css/**/*.scss',['styles']);
});
