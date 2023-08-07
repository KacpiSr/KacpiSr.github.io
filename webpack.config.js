// WEBPACK CREATED BY FUNKTIONAL. @2022

const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
	resolve: {
		extensions: [".css", ".scss", ".js"],
		alias: {
			"~": path.resolve(process.cwd(), "src"),
		},
	},

	entry: ["./src/js/index.js", "./src/scss/main.scss"],

	output: {
		path: path.resolve(__dirname, "./dist"),
		filename: "./js/[name].js",
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: ["babel-loader"],
			},

			// {
			//     test: /\.(?:ico|gif|png|jpg|jpeg)$/i,
			//     type: "asset/resource",
			// },
			// {
			//     test: /\.(woff(2)?|eot|ttf|otf|svg|)$/,
			//     type: "dist/inline",
			// },
		],
	},
	module: {
		rules: [
			{
				test: /\.(scss|css)$/,
				use: [
					MiniCssExtractPlugin.loader,
					"css-loader",
					"postcss-loader",
					"sass-loader",
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "./css/[name].css",
		}),

		new BrowserSyncPlugin({
			host: "localhost",
			port: 3000,
			proxy: "http://funktional.loc",
			files: ["*.php"],
			injectChanges: true,
			notify: true,
		}),
	],
};
