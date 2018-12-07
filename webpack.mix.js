let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix
  .postCss('source/_assets/css/main.css', 'css')
  .options({
    postCss: [
      require('postcss-easy-import')(),
      require('tailwindcss')('./tailwind.js'),
      require('postcss-nested')(),
    ],
    processCssUrls: false,
  })
  .version();
