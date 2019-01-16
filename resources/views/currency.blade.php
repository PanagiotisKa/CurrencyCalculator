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
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Currency Calculator
                </div>
<form action="">
{{csrf_field()}}
 <!-- CSRF Token pali? -->
    <label for="">Convert </label>
    <input type="text" placeholder="a vulue of ">
    <label for=""> From</label>
    <input type="text" placeholder="currency">
    <label for=""> To</label>
    <input type="text" placeholder="currency">

</form>
    
            </div>
        </div>
    </body>
</html>
