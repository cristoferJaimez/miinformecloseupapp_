<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- HTML -->
        <!-- Styles -->
        <script src=" asset('js/app.js') " defer></script>

    
        <link href=" asset('css/app.css') " rel="stylesheet">
    </head>
    <body class="">
       @include('layout.nav')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 container-fluid">
           

            @foreach ($tenants as $key => $value)
            <div class="card col-3 mt-4 text-center">
                <div class="card-body" style="text-transform: capitalize">
                  <a href="{{$value->domain}}" class="link-card"> Host  {{$value->name}} </a>
                </div>
            </div>     
            @endforeach 
                
           


        </div>    
    </body>
</html>
