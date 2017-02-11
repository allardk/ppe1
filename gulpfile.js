var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')();
var del     = require('del');

var paths = {
    scss:   './resources/scss/**/*.scss',
    coffee: './resources/coffee/**/*.coffee',
    css:    './assets/css',
    js:     './assets/javascript'
}

gulp.task('default', ['build']);
gulp.task('build', ['css']);
gulp.task('prod', ['build', 'min']);

/*
 * Gulp Watch
 */
gulp.task('watch', function () {
    gulp.watch(paths.scss, ['build']);
});

/**
 * Clean Task
 */
gulp.task('clean', function () {
    return del([paths.css, paths.js]);
});

/*
 * CSS Tasks
 */
gulp.task('css', function () {
    return gulp.src(paths.scss)
        .pipe(plugins.scss())
        .pipe(plugins.csscomb())
        .pipe(plugins.cssbeautify({indent: '    '}))
        .pipe(plugins.autoprefixer())
        .pipe(gulp.dest(paths.css));
});
gulp.task('min', function () {
    return gulp.src(paths.css)
        .pipe(plugins.csso())
        .pipe(plugins.rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(paths.css));
});

/*
 * Coffee Tasks
 */
gulp.task('script', function () {
    return gulp.src(paths.coffee)
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.coffee())
        //.pipe(plugins.uglify())
        .pipe(plugins.concat('all.min.js'))
        .pipe(plugins.sourcemaps.write())
        .pipe(gulp.dest(paths.js));
});