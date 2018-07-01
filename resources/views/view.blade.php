<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

        <title>Stockbridge</title>

    </head>
    <body>
        <h1>{{ $card['name'] }}</h1>
        <img src="{{ $card['image_uris']['normal'] }}">
    </body>
</html>
