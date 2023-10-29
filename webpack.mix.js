const mix = require('laravel-mix')
const path = require('path')

global.currentWebpackConfig = {
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
    output: {
        chunkFilename: 'js/[name].bundle.js',
        publicPath: '/',
    }
}
mix.webpackConfig(currentWebpackConfig)

mix.js('resources/js/basicPackages.js', 'public/js').vue()
mix.js('resources/js/welcome.js', 'public/js').vue()
mix.sass('resources/sass/welcome.scss', 'public/css/')
//mix.copy('node_modules/electrician-vue-components/src/Welcome/CompiledTemplate.json', 'app/Templates/Welcome.json')
