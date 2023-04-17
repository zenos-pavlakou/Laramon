const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader')
require('laravel-mix-purgecss');
require('node-sass');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig(webpack => {
    return {
        resolve: { 
            fallback: { 
                "os": require.resolve("os-browserify/browser"), 
                "https": require.resolve("https-browserify"),
                "http": require.resolve("stream-http"),
                "stream": require.resolve("stream-browserify")
            }, 
        }
    };
});


mix.copy("resources/files/degree.pdf", 'public/files/degree.pdf');



mix.js('resources/js/app.js',  'public/js')
.sass('resources/sass/app.scss', 'public/css').css('resources/css/fontawesome.min.css', 'public/css/fontawesome.min.css').vue({
    implementation: require('node-sass'),
    extractStyles: true,
    globalStyles: { css: [
    ] }
});

if (mix.inProduction()) {
    mix.version();
}
