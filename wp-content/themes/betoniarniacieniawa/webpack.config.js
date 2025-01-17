const path = require('path');
const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  ...defaultConfig,
  entry: {
    index: './js/index.js',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, './', 'build'),
  },
  module: {
    ...defaultConfig.module,
  },
  plugins: [
    // new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
  ],
};
