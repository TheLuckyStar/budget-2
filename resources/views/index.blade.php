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

</head>

<body>

    <div id="wrapper">
        @include('navbar')
        <div id="page-wrapper" data-url="{{ URL::action('HomeController@getIndex') }}"></div>
    </div>

    <script data-main="require.config.js" src="vendor/require.js"></script>
    <script>
        requirejs(['bootstrap'], function() {
            require(['assets/js/index.js'])
        })
    </script>

</body>

</html>
