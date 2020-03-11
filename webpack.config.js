
const path = require('path');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');


module.exports = {
  entry: './src/index.js',
  plugins: [
    new UglifyJSPlugin()
  ],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist')
  },
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.css$/,
          use: [
          'style-loader',
          'css-loader',
        ],
      },
    ]
  }
};