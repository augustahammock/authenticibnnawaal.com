// Includes ---------------------------------------------

var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    uglify          = require('gulp-uglify'),
    concat          = require('gulp-concat'),
    imageMin        = require('gulp-imagemin'),
    svgStore        = require('gulp-svgstore'),
    svgMin          = require('gulp-svgmin'),
    cheerio         = require('gulp-cheerio'),
    newer           = require('gulp-newer'),
    rename          = require('gulp-rename'),
    browserSync     = require('browser-sync'),
    plumber         = require('gulp-plumber'),
    notify          = require('gulp-notify'),
    path            = require('path');

browserSync.init({
    injectChanges: true
});

// Directories ------------------------------------------

var rootDir     = path.join(__dirname, '/wp-content/themes/nawaal'),
    devAssets   = path.join(__dirname, '/wp-content/themes/nawaal/src'),
    prodAssets  = path.join(__dirname, '/wp-content/themes/nawaal/build'),
    srcDirs     = {
        sass:       path.join(devAssets, '/sass'),
        scripts:    path.join(devAssets, '/js'),
        images:     path.join(devAssets, '/img'),
        svgs:       path.join(devAssets, '/img/svgs')
    },
    destDirs    = {
        css:        path.join(prodAssets, '/css'),
        scripts:    path.join(prodAssets, '/js'),
        images:     path.join(prodAssets, '/img')
    },
    files       = {
        sassRoot:       path.join(srcDirs.sass, '/*.scss'),
        sass:           path.join(srcDirs.sass, '/**/*.scss'),
        scriptsRoot:    path.join(srcDirs.scripts, '/*.js'),
        scripts:        path.join(srcDirs.scripts, '/**/*.js'),
        images:         path.join(srcDirs.images, '/**/*'),
        svgs:           path.join(srcDirs.svgs, '*.svg')
    };

// Tasks ------------------------------------------------

// Images
gulp.task('images', function() {

    return gulp.src(files.images)
        .pipe(newer(destDirs.images))
        .pipe(imageMin({verbose: true}))
        .pipe(gulp.dest(destDirs.images));

});

// Sass
gulp.task('sass', function() {
    return gulp.src(files.sassRoot)
        .pipe(plumber({
            errorHandler: notify.onError({
                title:      'Sass Error:',
                message:    '<%= error.message %>'})
        }))
        .pipe(sass({outputStyle: 'compact'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(destDirs.css))
        .pipe(browserSync.reload({stream: true}));
});

// Sync
gulp.task('sync', function () {
    browserSync({
        proxy:      'localhost/augustahammock.com/',
        debugInfo:  false,
        browser:    'google chrome',
        open:       false,
        notify:     false,
    });
});

// SVGstore
// gulp.task('svgstore', function () {
//     return gulp.src(files.svgs)
//         .pipe(svgMin(function (file) {
//             var prefix = path.basename(file.relative, path.extname(file.relative));
//             return {
//                 plugins: [{
//                     cleanupIDs: {
//                         prefix: prefix + 'svg-',
//                         minify: true
//                     }
//                 }]
//             }
//         }))
//         .pipe(svgStore())
//         .pipe(cheerio({
//             run: function ($) {
//                 $('svg').attr('style',  'display: none');
//             },
//             parserOptions: { xmlMode: true }
//         }))
//         .pipe(rename('sprite.svg'))
//         .pipe(gulp.dest(destDirs.images));
// });

// Watch
gulp.task('watch', function() {
    gulp.watch(files.sass, ['sass']);
    gulp.watch(files.images, ['images']);
});

// Default
gulp.task('default', ['images', 'sass', 'watch']);