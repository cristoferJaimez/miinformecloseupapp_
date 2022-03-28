<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @foreach ($tenants as $key => $value)
           <title> {{$value->name}}</title>
         @endforeach

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- HTML -->
        <!-- Styles -->
        <script src=" asset('js/app.js') " defer></script>

    
        <link href=" asset('css/app.css') " rel="stylesheet">
    </head>
    <body class="container">
       @include('layout.nav')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
           

           

        </div>    
    </body>
</html>
