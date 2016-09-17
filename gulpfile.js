var gulp = require('gulp'),
    gulpConcat = require('gulp-concat'),
    gulpRename = require('gulp-rename'),
    gulpUglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css');


var buildDirectory = './public/build/';

gulp.task('default', function () {
    return gulp.src([
            './public/js/tinymce.min.js',
            './public/js/jquery.js',
            './public/js/bootstrap.min.js',
            './public/js/smoothscroll.js',
            './public/js/nivo-lightbox.min.js',
            './public/js/jquery.easing-1.3.js',
            './public/js/plugins.js',
            './public/js/owl.carousel.min.js',
            './public/js/jquery.parallax.js',
            './public/js/wow.min.js',
            './public/js/custom.js'
        ])
        .pipe(gulpConcat('concat.js'))
        .pipe(gulpRename('master.min.js'))
        .pipe(gulp.dest(buildDirectory))
        .pipe(gulpUglify())
        .pipe(gulp.dest(buildDirectory));
});

gulp.task('css', function () {
    // return gulp.src([
    //         './public/css/bootstrap.min.css'
    //     ])
    //     .pipe(gulpConcat('concat.css'))
    //     .pipe(gulp.dest(buildDirectory))
    //     .pipe(gulpRename('master.min.css'))
    //     .pipe(gulpUglify())
    //     .pipe(gulp.dest(buildDirectory));

    return gulp.src([
            './public/css/bootstrap.min.css',
            './public/css/animate.min.css',
            // './public/css/bxslider.css',
            // './public/css/style.css'
            './public/css/font-awesome.min.css',
            './public/css/et-line-font.css',
            // './public/css/nivo-lightbox.css',
            // './public/css/nivo_themes/default/default.css',
            // './public/css/owl.theme.css',
            // './public/css/owl.carousel.css',
        ])
        .pipe(gulpConcat('above-the-fold.min.css'))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest(buildDirectory));
});
