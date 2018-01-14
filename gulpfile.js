'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    browserfiy = require('gulp-browserify'),
    babel = require('gulp-babel'),
    sass = require('gulp-sass'),
    pxtorem = require('gulp-pxtorem'),
    sourcemaps = require('gulp-sourcemaps'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    browserSync = require("browser-sync"),
    jeditor = require("gulp-json-editor"),
    rimraf = require('rimraf'),
    reload = browserSync.reload;

var path = {
    build: {
        html: 'public/',
        js: 'public/assets/js/',
        style: 'public/assets/css/',
        img: 'public/assets/img/',
        fonts: 'public/assets/fonts/'
    },
    src: {
        html: 'resources/*.html',
        js: [
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/smooth-scroll/dist/js/smooth-scroll.min.js',
            'node_modules/owl.carousel/dist/owl.carousel.min.js',
            'node_modules/fancybox/dist/js/jquery.fancybox.pack.js',
            'resources/assets/js/*.js'
        ],
        style: [
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/fancybox/dist/css/jquery.fancybox.css',
            'node_modules/owl.carousel/dist/assets/owl.carousel.css',
            'node_modules/owl.carousel/dist/assets/owl.theme.default.css',
            'node_modules/font-awesome/css/font-awesome.min.css',
            'resources/assets/css/style.scss',
            'resources/assets/css/*.css'
        ],
        img: [
            'resources/assets/img/**/*.*'
        ],
        fonts: [
            'node_modules/font-awesome/fonts/fontawesome-webfont.otf',
            'node_modules/font-awesome/fonts/fontawesome-webfont.eot',
            'node_modules/font-awesome/fonts/fontawesome-webfont.ttf',
            'node_modules/font-awesome/fonts/fontawesome-webfont.woff',
            'node_modules/font-awesome/fonts/fontawesome-webfont.woff2',
            'resources/assets/fonts/**/*.*'
        ],
        json: 'resources/assets/js/*.json'
    },
    watch: {
        html: 'resource/assets/*.html',
        js: 'resource/assets/js/*.js',
        style: 'resource/assets/css/**/*.scss',
        img: 'resource/assets/img/*.*',
        fonts: 'resource/assets/fonts/*.*',
        json: 'resource/assets/js/*.json'
    },
    clean: './public/assets'
}

var config = {
    server: {
        baseDir: './build'
    },
    open: true,
    tunnel: true,
    host: 'localhost',
    port: 9000,
    logPrefix: 'Frontend_Devil'
};

/*gulp.task('html:build', function () {
    return gulp.src(path.src.html)
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true}));
});*/

gulp.task('json:build', function () {
    return gulp.src(path.src.json)
        .pipe(jeditor({
            'version': '1.2.3'
        }))
        .pipe(gulp.dest(path.build.js));
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
    /*'html:build',*/
    'js:build',
    'style:build',
    'fonts:build',
    'image:build',
    'json:build'
]);

gulp.task('watch', function(){
    /*watch(path.watch.html, function(event, cb) {
        gulp.start('html:build');
    });*/
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
    watch(path.watch.json, function (event, cb) {
        gulp.start('json:build');
    })
});

/*gulp.task('webserver', function () {
    browserSync(config);
});*/

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('default', ['build', /*'webserver',*/ 'watch']);