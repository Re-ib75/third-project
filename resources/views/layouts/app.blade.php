<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>static site - @yield('title')</title>

        <!-- Fonts -->

        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
