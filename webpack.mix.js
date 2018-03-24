const { mix } = require('laravel-mix');
const config = require('./config.json');


mix
	.scripts(config.global.scripts, config.dest.scripts + '/vendor.global.js')
	.scripts(config.global.styles, config.dest.styles + '/vendor.global.css')
	.sass('resources/assets/sass/main.scss', config.dest.styles)
	.sass('resources/assets/sass/create-manufacturing.scss', config.dest.styles)
	.version();

if (mix.inProduction()) {
	mix.version();
}