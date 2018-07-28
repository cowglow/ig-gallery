var gulp = requre('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('assets/sass/*')
        .pipe(sass())
        .pipe(gulp.dest('assets/css'));
});

gulp.watch('assets/sass/*.scss', ['sass']);
