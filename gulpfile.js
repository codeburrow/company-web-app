var gulp = require('gulp'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    cleanCss = require('gulp-clean-css');


var buildDirectory = './public/build/';

gulp.task('default', ['js', 'css']);

gulp.task('js', function () {
    gulp.src([
            './public/js/jquery.js',
            './public/js/jquery.parallax.js',
            './public/js/plugins.js',
            './public/js/tinymce.min.js',
            './public/js/bootstrap.min.js',
            './public/js/smoothscroll.js',
            './public/js/jquery.easing-1.3.js',
            './public/js/owl.carousel.min.js',
            './public/js/wow.min.js',
            './public/js/nivo-lightbox.min.js',
            './public/js/loadStyleSheets.js',
            './public/js/custom.js'
        ])
        .pipe(concat('concat.js'))
        .pipe(rename('master.min.js'))
        .pipe(gulp.dest(buildDirectory))
        .pipe(uglify())
        .pipe(gulp.dest(buildDirectory));
});

gulp.task('css', function () {
    gulp.src([
            './public/css/bootstrap.min.css',
            './public/css/animate.min.css',
            './public/css/font-awesome.min.css',
            './public/css/bxslider.css',
            './public/css/nivo-lightbox.css',
            './public/css/nivo_themes/default/default.css',
            './public/css/style.css'
        ])
        .pipe(concat('above-the-fold.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest(buildDirectory));

    gulp.src([
            './public/css/et-line-font.css',
            './public/css/owl.theme.css',
            './public/css/owl.carousel.css',
        ])
        .pipe(concat('master.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest(buildDirectory));
});
