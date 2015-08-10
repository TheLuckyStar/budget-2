<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@lang('app.layout.description')">
    <meta name="author" content="@lang('app.layout.author')">

    <title>@lang('app.layout.title')</title>

    <link href="vendor/require.css" rel="stylesheet" type="text/css">

    {{-- @TODO Include below CSS file in require.css --}}
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">

</head>
<body data-locale="{{ App::getLocale() }}">

    <div id="wrapper">

        <div id="navbar-wrapper" data-url="{{ action('NavbarController@getIndex') }}"></div>

        <div id="page-wrapper"
            class="container-fluid"
            data-url="{{ action('HomeController@getIndex') }}"></div>

        <nav class="navbar navbar-default navbar-fixed-bottom text-right" role="navigation">
            <div class="container-fluid small text-left">
                @lang('app.layout.leftFooter')
                <span class='pull-right'>
                    @lang('app.layout.rightFooter')
                </span>
            </div>
        </nav>

    </div>

    <script src="vendor/require.js"></script>
    <script>
        requirejs([
            'jquery',
            'bootstrap',
            'moment',
            'vendor/moment/locale/{{ App::getLocale() }}.js',
        ], function() {
            requirejs([
                'bootstrap-datetimepicker',
                'assets/js/fontawesome-iconpicker.min.js',
                'theme/js/morris/morris.min.js',
                'theme/js/morris/raphael.min.js',
            ], function () {
                requirejs([
                    'assets/js/format.js',
                    'assets/js/router.js',
                    'assets/js/navbar.js',
                    // 'assets/js/operation.js',
                ], function () {
                    RouterModule.init();
                    NavbarModule.init();

                    // Load page content
                    RouterModule.refresh($('#page-wrapper'), function() {
                    });

                    // OperationModule.init();
                });
            });
        });

    </script>

</body>
</html>
