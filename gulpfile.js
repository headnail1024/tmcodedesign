var gulp = require('gulp'),
  settings = require('./settings'),
  webpack = require('webpack'),
  browserSync = require('browser-sync').create(),
  postcss = require('gulp-postcss'),
  rgba = require('postcss-hexrgba'),
  autoprefixer = require('autoprefixer'),
  cssvars = require('postcss-simple-vars'),
  nested = require('postcss-nested'),
  cssImport = require('postcss-import'),
  mixins = require('postcss-mixins'),
  colorFunctions = require('postcss-color-function');

gulp.task('styles', function () {
  console.log('task styles');

  return gulp.src('files/css/style.css')
    .pipe(postcss([cssImport, mixins, cssvars, nested, rgba, colorFunctions, autoprefixer]))
    .on('error', (error) => console.log(error.toString()))
    .pipe(gulp.dest('files/bundled'));
});

gulp.task('scripts', function (callback) {
  console.log('task scripts');

  webpack(require('./webpack.config.js'), function (err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
});

gulp.task('watch', function (done) {
  browserSync.init({
    /* proxy: settings.urlToPreview, */
    server: {
      baseDir: "files",
      index: "index.htm"
    }
  });

  gulp.watch('files/*.htm', function (done) {
    browserSync.reload();
    console.log('Zmiany w HTML');
    done()
  });

  //gulp.watch(settings.themeLocation + 'dupcia.txt', function(done) {console.log('dupcia'); done()} );

  gulp.watch('files/css/**/*.css', gulp.parallel('waitForStyles'));
  gulp.watch(['files/js/modules/*.js', 'files/js/scripts.js'], gulp.parallel('waitForScripts'));
  console.log('Misio pysio inicjalizacja');
  done()
});

gulp.task('waitForStyles', gulp.series('styles', function () {
  console.log('Zmiany w css');
  return gulp.src('files/bundled')
    .on('error', (error) => console.log(error.toString()))
    .pipe(browserSync.stream());
}))

gulp.task('waitForScripts', gulp.series('scripts', function (cb) {
  console.log('Zmiany w css');
  browserSync.reload();
  cb()
}))