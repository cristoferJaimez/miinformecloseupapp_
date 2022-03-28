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
    <body class="container">
       @include('layout.nav')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 container-fluid">

           <h1><i class="fa-solid fa-link"></i>Software de Servicios</h1>
                <h2>Mi Informe Close Up</h2>

                <hr>
   
                <h1><i class="fa-solid fa-link"></i>Domains</h1>
                <hr>
           @foreach ($tenants as $key => $value)
         
            <div class="card col-3 mt-4 text-center">
                <div class="card-body" style="text-transform: capitalize">
                   <form action="http://{{$value->domain}}/miinformecloseupapp/public" method="POST">
                     @csrf 
                      <input type="text" id="id" value="{{$value->id}}" hidden disabled /> 
                     <a onclick="this.closest('form').submit()" class="btn" class="link-card"> Host  {{$value->name}} </a>
                  </form> 
                </div>
            </div>     
            @endforeach 
            
            <h1><i class="fa-solid fa-link"></i>Information</h1>
            <hr>

            <h1><i class="fa-solid fa-link"></i>Footer</h1>
            <hr>
           


        </div>    
    </body>
</html>
