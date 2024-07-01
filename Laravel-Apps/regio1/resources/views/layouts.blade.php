<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body>
        <h2>This Is The Page Header</h2>
        @yield('content')
        <h2>This Is The Page Footer</h2>
    </body>
</html>