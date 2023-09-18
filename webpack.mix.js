const mix = require('laravel-mix');
const path = require('path');
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.pug$/,
                loader: 'pug-plain-loader'
            },
            {
                test: /\.scss$/,
                use: [
                  'sass-loader'
                ]
            }
        ]
    },
    resolve: {
        alias: {
            "@sass": path.resolve(
                __dirname,
                "resources/sass"
            )
        }
    }
});

mix.js('resources/js/basicPackages.js', 'public/js').vue()
mix.js('resources/js/layout.js', 'public/js').vue()
mix.js('resources/js/welcome.js', 'public/js').vue()
