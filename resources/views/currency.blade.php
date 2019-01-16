<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body class="text-center">
        <div class="conteiner">
            <div class="jumbotron">
                <h1 class="font-weight-bold">Currency Calculator</h1>
                    
                <form action="">
                {{csrf_field()}}
                <!-- CSRF Token pali? -->
                    <label class="font-weight-bold"for="">Convert From</label>
                    <input type="text" placeholder="currency">
                    <label class="font-weight-bold" for=""> To</label>
                    <input type="text" placeholder="currency">
                    <label class="font-weight-bold" for=""> a value of  </label>
                    <input type="text">
                    <button type="submit">Calculate</button>       
                </form>
                <h1>Your result is: 3456.45    </h1>
            </div>
        </div>
    </body>
</html>
