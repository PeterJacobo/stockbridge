<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" >

        <title>Stockbridge</title>

    </head>
    <body>
        <form action="/api/view" method="post">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">Stockbridge Search</h1>
                <p>Search for a magic card from the Core 19 set.</p>
            </div>

            <div class="form-label-group">
                <input id="cardNameInput" name="cardNameInput" class="form-control" placeholder="Enter card name" type="text">
                <label for="cardNameInput">Enter card name</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </form>
    </body>
</html>
