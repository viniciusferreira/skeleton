<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('app.description') }}"/>
    <meta name="author" content=""/>
    <link rel="icon" href="../../favicon.ico">

    <title>{{ config('app.name') }} - @yield('title', 'Missing title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ elixir('css/front.css') }}"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var _bc = _bc || [];

        (function () {
            var bc = document.createElement('script');
            bc.src = '/analytics.js';
            bc.type = 'text/javascript';
            bc.async = true;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(bc, s);
        })();
    </script>
</head>

<body>
@yield('content')

<script src="{{ elixir('js/front/vendor.js') }}"></script>
<script src="{{ elixir('js/front/app.js') }}"></script>
</body>
</html>
