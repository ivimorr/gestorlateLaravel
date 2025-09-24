const mix = require('laravel-mix');

mix
  // 1) Compila tu JS principal (resources/js/app.js → public/js)
  .js('resources/js/app.js', 'public/js')
  
  // 2) Compila tu SCSS principal, que importa Bootstrap (resources/sass/app.scss → public/css)
  .sass('resources/sass/app.scss', 'public/css')
  
  // 3) Opcional: copia fuentes o imágenes si las necesitas
  // .copyDirectory('resources/fonts', 'public/fonts')
  // .copyDirectory('resources/images', 'public/images')
  
  // 4) Activa versionado en producción
  .version();

