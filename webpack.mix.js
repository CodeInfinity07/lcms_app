const mix = require('laravel-mix');

// Compile app.scss
mix.sass('public/assets/scss/app.scss', 'public/assets/css');

// Compile bootstrap.scss
mix.sass('public/assets/scss/bootstrap.scss', 'public/assets/css');

// Compile icons.scss
mix.sass('public/assets/scss/icons.scss', 'public/assets/css');

// Minify the compiled CSS files
mix.minify('public/assets/css/app.css')
   .minify('public/assets/css/bootstrap.css')
   .minify('public/assets/css/icons.css');

// Optional: Add versioning for cache busting
mix.version();
