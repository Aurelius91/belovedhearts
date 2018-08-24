var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    sourcemaps  = require('gulp-sourcemaps'),
    postcss     = require('gulp-postcss'),
    autoprefixer= require('autoprefixer'),
    rename      = require('gulp-rename'),
    cleanCSS    = require('gulp-clean-css');
;


var sassInput  = './src/scss/*.scss',
    sassOutput = './assets/css'
;



var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded'
};


gulp.task('sass', function () {
  return gulp
    .src(sassInput)
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(postcss([autoprefixer({ browsers: [
        'Chrome >= 40',
        'Firefox >= 30',
        'Explorer >= 8',
        'Edge >= 12',
        'iOS >= 6',
        'Safari >= 7',
        'ChromeAndroid >= 40',
        'Android >= 4'
    ],remove: false })]))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest(sassOutput))

    //output minified css
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(gulp.dest(sassOutput))

});

gulp.task('watch', function (){
    gulp.watch(sassInput, ['sass']);
  // Other watchers
})

//combine all task
gulp.task('default', ['sass']);
