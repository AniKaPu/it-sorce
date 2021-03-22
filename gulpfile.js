


const { src, dest, series, parallel, watch } = require('gulp');
let sass = require('gulp-sass'),
    clean = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel');

// Lokalizacje SASS/CSS
let srcSASS = './dev/sass/style.scss',
    distSASS = './dist/css',
    allSASS = './dev/sass/**/*.scss',
    distCSS = './dist/css/style.css';
// Lokalizacje JS
let srcJS = './dev/js/app.js',
    distJS = './dist/js',
    distJSfile = './dist/js/app.js',
    allJS = './dev/js/**/*.js';
    // Lokalizacja folderu dla WP Blocks;
let allBlocksSASS = './blocks/**/*.scss';


function cssTranspile() {
    return src(srcSASS, { sourcemaps: true })
        .pipe(sass())
        .pipe(dest(distSASS, { sourcemaps: true }));
}

function cssTranspileProduction() {
    return src(srcSASS)
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(dest(distSASS));
}

function cssMinify() {
    return src(distCSS)
        .pipe(clean())
        .pipe(dest(distSASS));
}

function cssVendors() {
    return src([
        './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css',
        './node_modules/swiper/css/swiper.min.css',
        './node_modules/aos/dist/aos.css',
        './node_modules/jarallax/dist/jarallax.css',

    ])
    .pipe(concat('vendor.css'))
    .pipe(dest(distSASS));
}

function cssTranspile() {
    return src(srcSASS, { sourcemaps: true })
        .pipe(sass())
        .pipe(dest(distSASS, { sourcemaps: true }));
}

function cssBlocks() {
    return src(allBlocksSASS, {base: "./", sourcemaps: true })
        .pipe(sass())
        .pipe(dest("./", { sourcemaps: true }));
}

function cssBlocksProduction() {
    return src(allBlocksSASS, {base: "./" })
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            grid: true,
        }))
        .pipe(clean())
        .pipe(dest("./"));
}

function jsTranspile() {
    return src([
        './dev/js/Cookie.js',
        srcJS
        ])
        .pipe(concat('app.js'))
        .pipe(babel({ presets: ['@babel/env'] }))
        .pipe(dest(distJS));
}

function jsVendors() {
    return src([
        './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js',
        './node_modules/swiper/js/swiper.min.js',
        './node_modules/aos/dist/aos.js',
        './node_modules/jarallax/dist/jarallax.min.js',
       
    ])
    .pipe(concat('vendor.js'))
    .pipe(dest(distJS));
}

function jsMinify() {
    return src(distJSfile)
        .pipe(uglify())
        .pipe(dest(distJS));
}


function watchFiles() {
    watch(allSASS, cssTranspile),
    watch(allJS, jsTranspile);
    watch(allBlocksSASS, cssBlocks);
}

exports.dev = parallel(cssTranspile, cssVendors, jsVendors, jsTranspile);
exports.blocks = cssBlocks;
exports.watch = watchFiles;
exports.build = series(
    parallel(
        series(cssTranspileProduction, cssMinify)
    ),
    parallel(
        series(jsTranspile, jsMinify)
    ),
    cssBlocksProduction
);
