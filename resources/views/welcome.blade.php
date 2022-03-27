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
    <body class="antialiased">
       @include('layout.nav')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                 <img src="https://www.close-upinternational.com/img/logo.svg" width="300px" />
                </div>
            

            <div class="card">
                <div class="card-body">
                    Welcome to  Index Pages.
                </div>
              </div>


        </div>    
    </body>
</html>
