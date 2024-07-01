<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <h2>This The Page Header</h2>
        </header>

        <p>Shown all the time</p>
        @auth
            <h4>SHOWN ONLY IF AUTHENTICATED!</h4>
        @endauth


        @yield('content')

        <footer>
            <h2>This The Page Footer</h2>
        </footer>
    </body>
</html>