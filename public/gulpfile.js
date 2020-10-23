const gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify-es').default,
    del = require('del'),
    imagemin = require('gulp-imagemin'),
    babel = require('gulp-babel'),
    pug = require('gulp-pug'),
    gulpFileInclude = require('gulp-file-include');


const delInDist = () => {
    // return del(['dist/html/*']);
}
const styles = () => {
    return gulp.src('src/sass/**/*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('./css'))
}

const scripts = () => {
    return gulp.src('src/js/**/*.js')
        .pipe(gulpFileInclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(babel({presets: ['@babel/env']}))
        .pipe(uglify({toplevel: true}))
        .pipe(gulp.dest('./js'))
}

const images = () => {
    return gulp.src('src/img/**/*')
        .pipe(imagemin([
            imagemin.gifsicle({
                interlaced: true
            }),
            imagemin.mozjpeg({
                quality: 90,
                progressive: true
            }),
            imagemin.optipng({
                optimizationLevel: 6
            }),
            imagemin.svgo({
                plugins: [{
                        removeViewBox: true
                    },
                    {
                        cleanupIDs: false
                    }
                ]
            })
        ]))
        .pipe(gulp.dest('dist/img'))
}

const pugComplete = () => {
    return gulp.src('src/pug/**/*.pug')
        .pipe(pug({ pretty: true }))
        .pipe(gulp.dest('templates/'))
}

const watch = () => {
    gulp.watch('./src/sass/**/*.sass', styles);
    gulp.watch('./src/sass/**/*.scss',styles);
    gulp.watch('./src/js/**/*.js', scripts);
    gulp.watch('./src/pug/**/*.pug', pugComplete);
}

const delInImg = () => {
    // return del(['dist/img/*']);
}

gulp.task('css', styles);
gulp.task('js', scripts);
gulp.task('watch', watch);
gulp.task('pug', pugComplete);
// gulp.task('pug', pugComplete);
// gulp.task('img', gulp.series(delInImg, images));

// gulp.task('build', gulp.series(delInDist,
//     gulp.parallel(styles, scripts, images, pugComplete)
// ));