'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel'),
    sass = require('gulp-sass'),
    pxtorem = require('gulp-pxtorem'),
    sourcemaps = require('gulp-sourcemaps'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    browserSync = require("browser-sync"),
    rimraf = require('rimraf'),
    reload = browserSync.reload;

var path = {
    build: {
        html: 'build/',
        js: 'build/assets/js/',
        style: 'build/assets/css/',
        img: 'build/assets/img/',
        fonts: 'build/assets/fonts/'
    },
    src: {
        html: 'src/*.html',
        js: [
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/slick-carousel/slick/slick.min.js',
            'node_modules/smooth-scroll/dist/js/smooth-scroll.min.js',
            'src/js/*.js'
        ],
        style: [
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/slick-carousel/slick/slick.css',
            'node_modules/slick-carousel/slick/slick-theme.css',
            'node_modules/font-awesome/css/font-awesome.min.css',
            'src/css/style.scss'
        ],
        img: [
            'src/img/**/*.*'
        ],
        fonts: [
            'node_modules/font-awesome/fonts/fontawesome-webfont.otf',
            'node_modules/font-awesome/fonts/fontawesome-webfont.eot',
            'node_modules/font-awesome/fonts/fontawesome-webfont.ttf',
            'src/fonts/**/*.*'
        ]
    },
    watch: {
        html: 'src/*.html',
        js: 'src/js/*.js',
        style: 'src/css/**/*.scss',
        img: 'src/img/*.*',
        fonts: 'src/fonts/*.*'
    },
    clean: './build'
}

var config = {
    server: {
        baseDir: './build'
    },
    tunnel: true,
    host: 'localhost',
    port: 9000,
    logPrefix: 'Frontend_Devil'
};

gulp.task('html:build', function () {
    return gulp.src(path.src.html)
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
    return gulp.src(path.src.js)
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}));
});

gulp.task('style:build', function () {
    return gulp.src(path.src.style)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(prefixer())
        .pipe(pxtorem())
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.style))
        .pipe(reload(({stream: true})));
});

gulp.task('image:build', function () {
    return gulp.src(path.src.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.build.img))
        .pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
    return gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('build', [
    'html:build',
    'js:build',
    'style:build',
    'fonts:build',
    'image:build'
]);

gulp.task('watch', function(){
    watch(path.watch.html, function(event, cb) {
        gulp.start('html:build');
    });
    watch(path.watch.style, function(event, cb) {
        gulp.start('style:build');
    });
    watch(path.watch.js, function(event, cb) {
        gulp.start('js:build');
    });
    watch(path.watch.img, function(event, cb) {
        gulp.start('image:build');
    });
    watch(path.watch.fonts, function(event, cb) {
        gulp.start('fonts:build');
    });
});

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('default', ['build', 'webserver', 'watch']);