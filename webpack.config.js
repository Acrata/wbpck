var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var CopyWebpackPlugin = require("copy-webpack-plugin");
var CommonsChunkPlugin = require("webpack/lib/optimize/CommonsChunkPlugin");

var cssnext = require('postcss-cssnext');
var nested = require('postcss-nested');
var doiuse = require('doiuse');
var wordwrap = require('wordwrap');
var autoprefixer = require('autoprefixer');
var lost = require('lost');

var colors = require('colors');

/*var sassExtract = new ExtractTextPlugin('css/app.css');*/
var sassExtract = new ExtractTextPlugin('./css/app.css');

module.exports = {
    entry: {
        app: ['./src/js/app.js'],
        css: ['./src/sass/css/banner.css']
    },
    output: {
        path: require('path').resolve('distro'),
        publicPath: '/',
        filename: 'js/app.js'
    },
    module: {
        loaders: [
            {
              test: /\.scss$/,
              loader: sassExtract.extract("css-loader?minimize!resolve-url!sass?sourceMap!postcss-loader")
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel'
            }
        ]
    },
    postcss: function() {
    return [lost,autoprefixer];
    },
    plugins: [
      sassExtract,
      new CopyWebpackPlugin([
        {
          context: 'src',
          from: '**/*.html',
          to: '.'
        },
        {
             from:'../**/*.php',
             to:'./'
        }
      ]),
      new CommonsChunkPlugin({
          name: "css",
          filename:"con.css"
      })
    ],
};
