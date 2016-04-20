
var path = require('path')
var webpack = require('webpack')

module.exports = {

    resolve: {
        root: [
            path.join(__dirname, 'webpack'),
        ],
    },

    entry: [
        'font-awesome/css/font-awesome.css',
        'scripts/init-vue.js',
        'styles/bootstrap.less',
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
                test: /\.less$/,
                loaders: ['style', 'css', 'less'],
            },
            {
                test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: "file-loader",
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
