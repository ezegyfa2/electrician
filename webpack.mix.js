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
mix.js('resources/js/welcome.js', 'public/js').vue()
mix.copy('node_modules/electrician-vue-components/src/Welcome/CompiledTemplate.json', 'app/Templates/Welcome.json')
let nodeModulesFolderPath = path.resolve(
    __dirname,
    "node_modules"
)
mix.copy(nodeModulesFolderPath + '/bootstrap/dist/css/bootstrap.min.css', 'public/css')
mix.copy(nodeModulesFolderPath + '/bootstrap-vue/dist/bootstrap-vue.min.css', 'public/css')
