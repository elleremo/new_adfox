var gulp = require('gulp')
var browserSync = require('browser-sync')
var connect = require('gulp-connect-php')
var reload = browserSync.reload;


gulp.task('connect-sync', function () {
  connect.server({
      // base: './',
      // port: 8095,
      // keepalive: true,
    },
    function () {
      browserSync({
        watch: true,
        proxy: '127.0.0.1:8000',

      })
    })

  gulp.watch('**/*.php').on('change', reload)
})


