/*
* GULP file to automation work
* @Sebastian Stolarski - sebastian.stolarski@flexcommerce.com
 */

var gulp            = require('gulp'),
    clean           = require('gulp-clean'),
    rev             = require('gulp-rev'),
    fs              = require('fs'),
    less            = require('gulp-less'),
    minify          = require('gulp-minify'),
    cleanCSS        = require('gulp-clean-css'),
    imagemin        = require('gulp-imagemin'),
    webp            = require('gulp-webp'),
    concat          = require('gulp-concat'),
    jsonCss         = "",
    jsonJs          = "";


// compile less to css
gulp.task('compile-less', function () {
    return gulp.src('./less/style.less')
        .pipe(less())
        .pipe(cleanCSS())
        .pipe(gulp.dest('./css'));
});

// add hash to file CSS
gulp.task('hash-css', ['compile-less'], function () {
    return gulp.src('./css/style.css')
        .pipe(gulp.dest('./css'))
        .pipe(rev())
        .pipe(gulp.dest('./css'))
        .pipe(rev.manifest())
        .pipe(gulp.dest('./css'));
});

// delete old CSS files
gulp.task('delete-css', ['hash-css'], function () {
    jsonCss = JSON.parse(fs.readFileSync('./css/rev-manifest.json'));
    return gulp.src(['css/*.css', '!css/' + jsonCss['style.css']])
       .pipe(clean());
});

// watcher on file LESS
gulp.task('css', ['delete-css'], function () {
    gulp.watch(['./less/style.less', './less/base/*.less', './less/components/*.less'], ['delete-css']);
})

// contact and minify JS
gulp.task('js-concat', function () {
    return gulp.src(['./vendor/jquery/dist/jquery.js', './vendor/bootstrap/dist/js/bootstrap.js', './vendor/npm-modernizr/modernizr.js', './vendor/webp-support/index.js', './js/base/*.js'])
        .pipe(concat('app.js'))
        .pipe(minify({
            ext: {
                min: '.min.js'
            }
        }))
        .pipe(gulp.dest('./js'));
});

// add hash to file JS
gulp.task('hash-js', ['js-concat'], function () {
    return gulp.src('./js/app.min.js')
        .pipe(gulp.dest('./js'))
        .pipe(rev())
        .pipe(gulp.dest('./js'))
        .pipe(rev.manifest())
        .pipe(gulp.dest('./js'));
});

// delete old JS file
gulp.task('delete-js', ['hash-js'], function () {
    jsonJs = JSON.parse(fs.readFileSync('./js/rev-manifest.json'));
    return gulp.src(['js/*.js', '!js/' + jsonJs ['app.min.js']])
        .pipe(clean());
});

// watcher on file JS
gulp.task('js', ['delete-js'], function () {
    gulp.watch('./js/base/*.js', ['delete-js']);
});

// compress all IMG
gulp.task('img-compress', function () {
    return gulp.src("./img/uncompresed/*")
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({plugins: [{removeViewBox: true}]})
        ]))
        .pipe(gulp.dest("./img"));
});

// convert all IMG to WEBP
gulp.task('img-webp', ['img-compress'], function () {
    return gulp.src("./img/*")
        .pipe(webp())
        .pipe(gulp.dest("./img"))
})

gulp.task('img', ['img-webp'], function () {
    return true;
})

gulp.task('dev', ['css', 'js'], function () {
    return true;
});

gulp.task('deploy', ['img-webp', 'delete-js', 'delete-css'], function () {
    return true;
});
