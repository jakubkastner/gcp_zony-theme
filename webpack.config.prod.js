const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: ["./assets/src/index.js"],

  output: {
    path: path.resolve(__dirname, "assets/dist/js"),
    filename: "bundle.js",
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader",
      },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          "resolve-url-loader",
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
        ],
      },
      {
        test: /\.(wof|wof2|eot|ttf|otf)$/,
        exclude: /node_modules/,
        loader: "file-loader",
        options: {
          name: "[name].[ext]",
          publicPath: "../fonts",
          outputPath: "../fonts",
        },
      },
      {
        test: /\.(jpg|jpeg|png|gif|svg)$/,
        loader: "file-loader",
        options: {
          name: "[name].[ext]",
          publicPath: "../img",
          outputPath: "../img",
        },
      },
    ],
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "../css/style.css",
    }),
  ],
};
