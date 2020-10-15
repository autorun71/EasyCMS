const mix = require("laravel-mix");

if (mix == 'undefined') {
    const { mix } = require("laravel-mix");
}

require("laravel-mix-merge-manifest");

var publicPath = './../../../public/assets';

mix.setPublicPath(publicPath).mergeManifest();




mix.js(
    [
        __dirname + "/Resources/assets/js/app.js",

    ],
    "js/script.js"
)
    .copy(__dirname + "/Resources/assets/images", publicPath + "/images")
    .sass(__dirname + "/Resources/assets/sass/app.scss", publicPath + "/css/style.css")
    .options({
        processCssUrls: false
    });

if (!mix.inProduction()) {
    mix.sourceMaps();
}

if (mix.inProduction()) {
    mix.version();
}
