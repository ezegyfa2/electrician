const mix = require('laravel-mix')
const path = require('path')
const skewContainerImageGenerator = require('./node_modules/electrician-vue-components/src/Welcome/SkewCarousel/SkewContainer/Images/generator.js')
require('helper-vue-components/AssetCompiler.js')

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

compileAssets(mix, 'electrician-vue-components', [ 'Welcome' ])
//skewContainerImageGenerator.generate()
//mix.js('resources/js/basicPackages.js', 'public/js').vue()
//mix.js('resources/js/welcome.js', 'public/js').vue()
//mix.sass('resources/sass/welcome.scss', 'public/css/')
//mix.copy('node_modules/electrician-vue-components/src/Welcome/CompiledTemplate.json', 'app/Templates/Welcome.json')
