
var path = require('path')
var webpack = require('webpack')

module.exports = {

    resolve: {
        root: [
            path.join(__dirname, 'webpack'),
        ],
    },

    entry: [
        'scripts/init-vue.js',
    ],

    output: {
        path: path.join(__dirname, 'public', 'assets'),
        filename: 'build.js',
    },

    module: {
        loaders: [{
            test: /\.vue$/,
            loader: 'vue',
        }],
    },

    plugins: [
        new webpack.ProvidePlugin({
            Vue: "vue",
        }),
    ],

}
