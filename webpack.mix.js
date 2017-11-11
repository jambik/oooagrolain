const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js/vue.js');
// mix.js('resources/assets/js/test.js', 'public/js/vue-test.js');

/* App files */
mix.combine([
    'bower_components/bootstrap/dist/css/bootstrap.min.css',
    'bower_components/sweetalert/dist/sweetalert.css',
    'bower_components/magnific-popup/dist/magnific-popup.css',
    'bower_components/cropper/dist/cropper.min.css',
    'bower_components/font-awesome/css/font-awesome.min.css',
    'bower_components/animate.css/animate.min.css',
    'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
    'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css'
], 'public/css/app.bundle.css');
mix.combine([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    'bower_components/sweetalert/dist/sweetalert.min.js',
    'bower_components/waypoints/lib/jquery.waypoints.min.js',
    'bower_components/owl.carousel/dist/owl.carousel.min.js',
    'bower_components/jquery.scrollTo/jquery.scrollTo.min.js',
    'bower_components/noty/js/noty/packaged/jquery.noty.packaged.min.js',
    'bower_components/magnific-popup/dist/jquery.magnific-popup.min.js',
    'bower_components/cropper/dist/cropper.min.js'
], 'public/js/app.bundle.js');

// mix.copy('bower_components/bootstrap/fonts', 'public/fonts');
// mix.copy('bower_components/font-awesome/fonts/*.*', 'public/fonts');

/* Admin files */
mix.combine([
    'bower_components/bootstrap/dist/css/bootstrap.min.css',
    'bower_components/animate.css/animate.min.css',
    'bower_components/sweetalert/dist/sweetalert.css',
    'bower_components/select2/dist/css/select2.min.css',
    'bower_components/dropzone/dist/min/dropzone.min.css',
    'bower_components/selectize/dist/css/selectize.default.css',
    'bower_components/datetimepicker/jquery.datetimepicker.css',
    'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
    'bower_components/fileicon.css/fileicon.css',
], 'public/css/admin.bundle.css');
mix.combine([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    'bower_components/bootstrap-filestyle/src/bootstrap-filestyle.min.js',
    'node_modules/vue/dist/vue.min.js',
    'bower_components/noty/js/noty/packaged/jquery.noty.packaged.min.js',
    'bower_components/jquery.scrollTo/jquery.scrollTo.min.js',
    'bower_components/sweetalert/dist/sweetalert.min.js',
    'bower_components/select2/dist/js/select2.min.js',
    'bower_components/select2/dist/js/i18n/ru.js',
    'bower_components/dropzone/dist/min/dropzone.min.js',
    'bower_components/selectize/dist/js/standalone/selectize.min.js',
    'bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js',
    'bower_components/datatables.net/js/jquery.dataTables.min.js',
    'bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
    'bower_components/jquery-ui/jquery-ui.min.js',
], 'public/js/admin.bundle.js');

/* Jstree package */
// mix.copy('bower_components/jstree/dist', 'public/library/jstree', false);

/* Summernote package */
// mix.copy('bower_components/summernote/dist', 'public/library/summernote', false);

/* CKEditor files */
mix.copy('node_modules/ckeditor/ckeditor.js', 'public/library/ckeditor');
mix.copy('node_modules/ckeditor/adapters/jquery.js', 'public/library/ckeditor');
mix.copy('node_modules/ckeditor/contents.css', 'public/library/ckeditor');
mix.copy('node_modules/ckeditor/styles.js', 'public/library/ckeditor');
mix.copy('node_modules/ckeditor/lang/en.js', 'public/library/ckeditor/lang');
mix.copy('node_modules/ckeditor/lang/ru.js', 'public/library/ckeditor/lang');

mix.copy('node_modules/ckeditor/plugins/*.*', 'public/library/ckeditor/plugins');
mix.copy('node_modules/ckeditor/plugins/div', 'public/library/ckeditor/plugins/div', false);
mix.copy('node_modules/ckeditor/plugins/font', 'public/library/ckeditor/plugins/font', false);
mix.copy('node_modules/ckeditor/plugins/image', 'public/library/ckeditor/plugins/image', false);
mix.copy('node_modules/ckeditor/plugins/justify', 'public/library/ckeditor/plugins/justify', false);
mix.copy('node_modules/ckeditor/plugins/link', 'public/library/ckeditor/plugins/link', false);
mix.copy('node_modules/ckeditor/plugins/magicline', 'public/library/ckeditor/plugins/magicline', false);
mix.copy('node_modules/ckeditor/plugins/scayt', 'public/library/ckeditor/plugins/scayt', false);
mix.copy('node_modules/ckeditor/plugins/stylesheetparser', 'public/library/ckeditor/plugins/stylesheetparser', false);
mix.copy('node_modules/ckeditor/plugins/table', 'public/library/ckeditor/plugins/table', false);
mix.copy('node_modules/ckeditor/plugins/tableselection', 'public/library/ckeditor/plugins/tableselection', false);
mix.copy('node_modules/ckeditor/skins/moono', 'public/library/ckeditor/skins/moono', false);
// mix.copy('node_modules/ckeditor/config.js', 'public/library/ckeditor');