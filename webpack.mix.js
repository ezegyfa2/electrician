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

mix.js('resources/js/welcome.js', 'public/js').vue()
/*if (mix.inProduction()) {
    mix.copy('./node_modules/helper-vue-components/src/BasicPackages/CompiledBasicPackages.js', 'public/js/compiledBasicPackages.js')
}
else {
    mix.copy('./node_modules/helper-vue-components/src/BasicPackages/CompiledDevBasicPackages.js', 'public/js/compiledBasicPackages.js')
}*/
