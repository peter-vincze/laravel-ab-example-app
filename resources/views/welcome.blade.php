<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>
        <link media="screen" rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </link>
</head>
    <body class="antialiased">
        <div>
            <a href="/buy">
            <button class="buy_button_green">Buy</button>
            </a>
        </div>
    </body>
</html>
