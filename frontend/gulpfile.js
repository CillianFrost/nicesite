const gulp         = require('gulp')
  ,   pug          = require('gulp-pug')
  ,   browsersync  = require('browser-sync')
  ,   reload       = browsersync.reload
  ,   sass         = require('gulp-sass')
  ,   plumber      = require('gulp-plumber')
  ,   sourcemaps   = require('gulp-sourcemaps')
  ,   autoprefixer = require('gulp-autoprefixer')
  ,   cleancss     = require('gulp-clean-css')
  ,   paths        = {
                      pug:['./src/pug/pages/*.pug'],
                      sass:['./src/sass/main.sass'],
                      js:['./src/script/*.js']
                     };

// SERVER

gulp.task('server', function() {
  browsersync.init({
    open: false,
    notify: false,
    server: {
      baseDir: "./dist",
    }
  });
});

// STYLES

gulp.task('sass', () => {
  return gulp.src(paths.sass)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer(['last 15 versions']))
    .pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/css/'))
    .pipe(gulp.dest('../public/css/'))
    .pipe(browsersync.reload({stream : true}));
});

// HTML

gulp.task('pug', () => {
  return gulp.src(paths.pug)
    .pipe(plumber())
    .pipe(pug({pretty: true}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist'))
    .pipe(browsersync.reload({stream : true}));
});

// SCRIPTS

gulp.task('js', () => {
  return gulp.src(paths.js)
    .pipe(plumber())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/scripts/'))
    .pipe(browsersync.reload({stream:true}));
});

// WATCHER

gulp.task('watch', () => {
  gulp.watch('src/**/**/*.pug', ['pug']);
  gulp.watch('src/**/**/*.sass', ['sass']);
  gulp.watch('src/**/*.js', ['js']);
});

gulp.task('default', ['sass', 'pug', 'server', 'watch', 'js']);