const mix = require('laravel-mix');
const FriendlyErrorsPlugin = require("friendly-errors-webpack-plugin");
const notifier = require("node-notifier")
const { config } = require("./webpack.mix.config");
const CopyPlugin = require("copy-webpack-plugin");

//require("laravel-mix-assets-splitter");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix
    .js(config.srcPath + '/js/main.js',
        config.distPath +'/js')
    .js(config.srcPath + '/js/navigation.js',
        config.distPath +'/js')
    .js(config.srcPath + '/js/customizer.js',
        config.distPath +'/js')

    .sass(config.srcPath + '/sass/style.scss',
        config.distPath + '/css')

    .browserSync({
        proxy: config.devUrl,
        watchEvents: ["add", "change", "unlink", "addDir", "unlinkDir"],
        files: [
            "assets/dist/**/*.css",
            "assets/dist/**/*.js",
            "functions.php",
            "inc/**/*.php",
            "templates/**/*.php",
            "template-parts/**/*.php",
            "*.php",
            {
               // match: [
                //    "templates/**/*.scss",
                    //"blocks/**/*.scss",
                    //"layouts/**/*.scss",
                    //"templates/**/*.js",
                    //"blocks/**/*.js",
                   // "layouts/**/*.js",
              //  ],
              //  fn: function (event, file) {
              //      console.log(event, " - ", file);
              //  },
            },
        ],
    })
    .options({
        purifyCss: false,
        processCssUrls: false,
    })
    .webpackConfig({
    mode: "development",
    stats: false,
    optimization: {
        emitOnErrors: false,
    },
    plugins: [
        new FriendlyErrorsPlugin({
            compilationSuccessInfo: {
                messages: [],
                notes: [],
            },
            onErrors: function (severity, errors) {
                if (severity !== "error") {
                    return;
                }
                const error = errors[0];
                notifier.notify({
                    message: "Check your terminal for details",
                    title: severity + " : " + error.name,
                });
            },
            clearConsole: true,
            additionalFormatters: [],
            additionalTransformers: [],
        }),
        new CopyPlugin({
            patterns: [
                {
                    from: config.srcPath + "/fonts",
                    to: config.distPath + "/fonts",
                    noErrorOnMissing: true,
                },
                {
                    from: config.srcPath + "/img",
                    to: config.distPath + "img",
                    noErrorOnMissing: true,
                },
            ],
        }),
    ],
});

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.ts(src, output); <-- Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });

