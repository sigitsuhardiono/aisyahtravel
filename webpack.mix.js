let mix = require('laravel-mix');
mix.options({ processCssUrls: false });
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*
 |--------------------------------------------------------------------------
 | Mix For Core css and js
 |--------------------------------------------------------------------------
 */
mix.styles([
    'resources/assets/css/basestyle/style.css',
], 'public/css/core.css');

mix.scripts([
    'resources/assets/js/lib/moment.min.js',
    'resources/assets/js/lib/jquery.min.js',
    'resources/assets/js/lib/popper.min.js',
    'resources/assets/js/bootstrap/bootstrap.min.js',
    'resources/assets/js/chosen-js/chosen.jquery.js'
], 'public/js/core.js');

mix.scripts([
    'resources/assets/js/custom.js'
], 'public/js/custom.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page sign in
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/fontawesome/fontawesome-all.min.css',
    'resources/assets/css/pages/login.css'
], 'public/css/pages/login.css');

mix.scripts([
    'resources/assets/js/chartjs/Chart.js',
    'resources/assets/js/chartjs/utils.js',
    'resources/assets/js/fullcalendar/fullcalendar.js',
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/pages/dashboard.script.js'
], 'public/js/pages/home.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page home
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/fullcalendar/fullcalendar.css'
], 'public/css/pages/home.css');

mix.scripts([
    'resources/assets/js/chartjs/Chart.js',
    'resources/assets/js/chartjs/utils.js',
    'resources/assets/js/fullcalendar/fullcalendar.js',
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/pages/dashboard.script.js'
], 'public/js/pages/home.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page airline ticket
 |--------------------------------------------------------------------------
 */
mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/airlineticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/airlineticket.script.js'
], 'public/js/pages/airlineticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page drop ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/dropticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/dropticket.script.js'
], 'public/js/pages/dropticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page drop ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/travelticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/travelticket.script.js'
], 'public/js/pages/travelticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page drop ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/hotelticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/hotelticket.script.js'
], 'public/js/pages/hotelticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page rental ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/rentalticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/rentalticket.script.js'
], 'public/js/pages/rentalticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page paket ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/paketticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/paketticket.script.js'
], 'public/js/pages/paketticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page kai ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/dataTables.bootstrap4.min.css'
], 'public/css/pages/kaiticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/kaiticket.script.js'
], 'public/js/pages/kaiticket.js');

/*
 |--------------------------------------------------------------------------
 | Mix For Page pelni ticket
 |--------------------------------------------------------------------------
 */

mix.styles([
    'resources/assets/css/daterangepicker/daterangepicker.css',
    'resources/assets/css/datatable/jquery.dataTables.min.css'
], 'public/css/pages/pelniticket.css');

mix.scripts([
    'resources/assets/js/daterangepicker/daterangepicker.min.js',
    'resources/assets/js/inputmask/inputmask/inputmask.js',
    'resources/assets/js/inputmask/inputmask/inputmask.extensions.js',
    'resources/assets/js/inputmask/inputmask/inputmask.numeric.extensions.js',
    'resources/assets/js/inputmask/inputmask/jquery.inputmask.js',
    'resources/assets/js/datatable/jquery.dataTables.min.js',
    'resources/assets/js/datatable/dataTables.bootstrap4.min.js',
    'resources/assets/js/pages/pelniticket.script.js'
], 'public/js/pages/pelniticket.js');
