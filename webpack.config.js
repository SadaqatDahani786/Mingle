const path = require('path');
const uglifyJsWebpackPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry : './src/index.js',
    output : {
        filename : 'bundle.js',
        path: path.resolve(__dirname)
    },
    plugins: [
        new uglifyJsWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: 'style.css'
        })
    ],
    module:{
        rules: [
            {
                test : /\.js$/,
                exclude: /(node_modules|bower_conponents)/,
                use:{
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.css$/,                                    
                use:  [MiniCssExtractPlugin.loader, 'css-loader', require('tailwindcss')]                
            },
            {
                test: /\.scss$/,
                use: [                  
                  MiniCssExtractPlugin.loader,
                  "css-loader",
                  "sass-loader"
                ]
            }
        ]
    }
};