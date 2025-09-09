const mix = require('laravel-mix');
const path = require('path');

mix
    .alias({
        '@': path.join(__dirname, '/src'),
        '@img': path.join(__dirname, '/images'),
        '@js': path.join(__dirname, '/src/js'),
        '@scss': path.join(__dirname, '/src/scss'),
    })
    .options({
        processCssUrls: false
    })
    .js('src/js/script.js', 'dist/js/')
    .sass('src/scss/style.scss', 'dist/css')
    .copy('src/fonts/', 'dist/fonts/')
    .browserSync({
        proxy: "nginx",
        files: ['dist/css', 'dist/js', 'images', './**/*.php'],
    }).sourceMaps();
