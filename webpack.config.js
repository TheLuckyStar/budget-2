
var path = require('path')
var webpack = require('webpack')

module.exports = {

    resolve: {
        root: [
            path.join(__dirname, 'webpack'),
        ],
    },

    entry: [
        'bootstrap/dist/css/bootstrap.css',
        'scripts/init-vue.js',
    ],

    output: {
        path: path.join(__dirname, 'public', 'assets'),
        filename: 'build.js',
    },

    module: {
        loaders: [
            {
                test: /\.vue$/,
                loader: 'vue',
            },
            {
                test: /\.css$/,
                loaders: ['style', 'css'],
            },
            {
                test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: "url-loader",
                query: {
                    name: "[name].[ext]",
                },
            },
            {
                test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: "file-loader",
                query: {
                    name: "[name].[ext]",
                },
            },
        ],
    },

    plugins: [
        new webpack.ProvidePlugin({
            Vue: "vue",
        }),
    ],

}
