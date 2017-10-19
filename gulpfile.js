const gulp          = require('gulp');
const concat        = require('gulp-concat');
const uglify        = require('gulp-uglify');
const less          = require('gulp-less');
const minifyCSS     = require('gulp-minify-css');
const autoprefixer  = require('gulp-autoprefixer');
const babel         = require('gulp-babel');
const sourceMaps    = require('gulp-sourcemaps');
const gulpif        = require('gulp-if');
const clean         = require('gulp-clean');

const ENV = process.env.NODE_ENV || 'production';

gulp.task('default', function() {
    var tasks = ['javascript', 'less', 'fonts'];
    if (ENV != 'production') {
        tasks.push('watch');
    } else {
        gulp.src([ 'source/css/*', 'source/js/*' ], {read: false}).pipe(clean());
    }

    gulp.start(tasks);
});

gulp.task('watch', function() {
    gulp.watch('less/**/*.less', ['less']);
    gulp.watch('js/**/*.js', ['javascript']);
});

gulp.task('javascript', function() {
    return gulp.src([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/slick-carousel/slick/slick.js',
        'node_modules/lightgallery/dist/js/lightgallery.js',
        'js/scripts.js'
    ])
    // .pipe(babel({presets: ['es2015']}))
        .pipe(concat('source/js/scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest('.'));
});

gulp.task('less', function() {
    return gulp.src([
        'node_modules/lightgallery/dist/css/lightgallery.css',
        'less/styles.less'
    ])
        .pipe(gulpif(ENV != 'production', sourceMaps.init()))
        .pipe(less())
        .pipe(autoprefixer({browsers: ['last 10 versions'], cascade: false}))
        .pipe(minifyCSS())
        .pipe(concat('source/css/style.css'))
        .pipe(gulpif(ENV != 'production', sourceMaps.write()))
        .pipe(gulp.dest('.'));
});

gulp.task('fonts', function () {
    return gulp.src([
        'node_modules/lightgallery/dist/fonts/*'
    ])
        .pipe(gulp.dest('source/fonts/'))
});

gulp.task('cheat', function() {
    return gulp.src([
        'less/styles.less'
    ])
        .pipe(less())
        .pipe(concat('source/css/style.css'))
        .pipe(gulp.dest('.'));
});
