//var elixir = require('laravel-elixir');
var gulp = require('gulp');
var postcss = require('gulp-postcss');
var precss = require('precss');
var sass = require('gulp-sass');
var rename = require("gulp-rename");
var lost = require("lost");
var autoprefixer = require('autoprefixer');




gulp.task('styles', function(){
    var processors = [
        //precss({}),

        require("postcss-autoreset")({
            reset: {
                margin: 0,
                padding: 0,
                borderRadius: 0
            }
        }),
        lost,
        require('postcss-font-magician')({ /* options */ }),
        autoprefixer({browsers:'last 2 version'})
    ];
   return gulp.src('resources/assets/postcss/app.scss')
       .pipe(sass())
       .pipe(postcss(processors))
       .pipe(rename('app.css'))
       .pipe(gulp.dest('public/css'))
       .pipe(browserSync.stream());
});





var browserSync = require('browser-sync').create();


gulp.task('watch', function() {
    browserSync.init({
        proxy: 'http://homestead.app'
    });

    gulp.watch('resources/assets/postcss/*.scss', ['styles']);
    gulp.watch('resources/assets/postcss/*/*/*.scss', ['styles']);
    gulp.watch('resources/assets/postcss/*/*.scss', ['styles']);
    gulp.watch("resources/views/*.blade.php").on('change', browserSync.reload);
});






//elixir(function(mix) {
//    mix.webpack(
//        {
//            module: {
//                loaders: [
//                    {
//                        test: /\.css$/,
//                        loader: "style-loader!css-loader!postcss-loader"
//                    }
//                ]
//            },
//            postcss: function () {
//                return [require('autoprefixer'), require('precss')];
//            }
//
//        }
//
//    );
//});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir(function(mix) {
//    mix.browserSync(
//        );
//});




