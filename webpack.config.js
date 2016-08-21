
var path = require('path')
var webpack = require('webpack')

module.exports = {

    resolve: {
        root: [
            path.join(__dirname, 'resources', 'assets'),
        ],
    },

    entry: [
        'bootstrap',
        'font-awesome/css/font-awesome.css',
        'scripts/init-vue.js',
        'scripts/init-vuex.js',
        'scripts/init-vue-components.js',
        'scripts/init-vue-resource.js',
        'scripts/init-vue-router.js',
        'styles/bootstrap.less',
        'styles/timeline.css',
    ],

    output: {
        path: path.join(__dirname, 'public', 'assets'),
        filename: 'build.js',
        publicPath: "/assets/",
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
                test: /\.(ttf|eot|svg|woff|woff2)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                loader: "file",
                query: {
                    name: "[name].[ext]",
                },
            },
        ],
    },

    plugins: [
        new webpack.ProvidePlugin({
            jQuery: "jquery",
            moment: "moment",
            Chart: "chart.js",
            Vue: "vue",
            VueResource: "vue-resource",
            VueRouter: "vue-router",
            Vuex: "vuex",
        }),
    ],

}
