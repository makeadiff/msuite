const path = require('path');

module.exports = {
    mode: 'development',
    entry: {
        index : './js/msuite.js',
        footable: './js/footable.js'
    },
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist'),
    },
};S