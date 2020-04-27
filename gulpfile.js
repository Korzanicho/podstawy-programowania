const gulp 					= require("gulp");
const sass 					= require("gulp-sass");
const sourcemaps 		= require("gulp-sourcemaps");
const autoprefixer  = require("gulp-autoprefixer");
const colors        = require("ansi-colors");
const notifier      = require("node-notifier");
const rename        = require("gulp-rename");
const csso          = require("gulp-csso");
const phpConnect 		= require('gulp-connect-php');
const browserSync 	= require('browser-sync').create();

const showError = function(err) {
	notifier.notify({
        title: "Error in sass",
        message: err.messageFormatted
    });

    console.log(colors.red("==============================="));
    console.log(colors.red(err.messageFormatted));
    console.log(colors.red("==============================="));
}

function connectSync() {
	phpConnect.server({
			port: 8000,
			keepalive: true,
			base: "."
	}, function (){
			browserSync.init({
					proxy: '127.0.0.1:8000'
			});
	});
}

function browserSyncReload(done) {
	browserSync.reload();
	done();
}

const sassCompile = function(){
	return gulp.src("./sass/main.sass")
	.pipe(sourcemaps.init())
	.pipe(
		sass({
			outputStyle : 'compressed'
		}).on("error", showError)
	)
	.pipe(autoprefixer())
	.pipe(rename({
		suffix: ".min",
		basename: "style"
	}))
	.pipe(csso())
	.pipe(sourcemaps.write("."))
	.pipe(gulp.dest("."))
}

const watch = function(){
	gulp.watch("./sass/**/*.sass", gulp.series(sassCompile));
	// gulp.watch("./**/*.php", browserSyncReload);
}

exports.default = gulp.series(sassCompile, watch);
exports.connectSync = connectSync;
exports.sassCompile = sassCompile;
exports.watch = watch;