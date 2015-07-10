<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ trans('app.layout.description') }}">
    <meta name="author" content="{{ trans('app.layout.author') }}">

    <title>{{ trans('app.layout.title') }}</title>

    <link href="vendor/require.css" rel="stylesheet" type="text/css">

    {{-- @TODO Include below CSS file in require.css --}}
    <link href="assets/css/index.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">
        @include('navbar')
        <div id="page-wrapper" class="container-fluid" data-url="{{ URL::action('HomeController@getIndex') }}"></div>
        <nav class="navbar navbar-inverse navbar-fixed-bottom text-right" role="navigation">
            <div class="container-fluid text-left">
                {!! trans('app.layout.leftFooter') !!}
                <span class='pull-right'>
                    {!! trans('app.layout.rightFooter') !!}
                </span>
            </div>
        </nav>
    </div>

    <script data-main="require.config.js" src="vendor/require.js"></script>
    <script>
        requirejs(['bootstrap'], function() {
            require(['assets/js/index.js'])
        })
    </script>

</body>

</html>
