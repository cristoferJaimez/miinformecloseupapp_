<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @auth
        <title>{{ auth()->user()->name }}</title>
    @endauth
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
           <title></title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- HTML -->
        <!-- Styles -->
        <script src=" asset('js/app.js') " defer></script>

    
        <link href=" asset('css/app.css') " rel="stylesheet">
    </head>
    <body>
        <div class="">
            <div class="row">
                <div class="col-md-5 col-sm-12   ">
                    <div class="">
                        @auth
                        @include('auth.user')
                        @endauth

                        @guest
                        @include('auth.login')
                        @endguest

                    </div>
                </div>
                <div  class="border-start text-with bg-dark justify-conten   col-md-7 col-sm-12 d-sm-none  d-none d-md-block m-0  row justify-content-center aling-item-center"  style="height: 750px">
                   
                    <div class="col-auto p-5 mt-5 " style="color: aliceblue">
                    <p class="text-left">
                        <h1>Welcome to</h1>
                        <h2>our community</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos unde eum perspiciatis. Qui consequatur explicabo, ratione tempore illo ut eaque deleniti nobis aspernatur facilis nam tenetur inventore quis et?
                        </p>

                        <p class="text-center">
                            Social Netword
                        </p>
                        <p>
                            link social netword
                        </p>
                    </p>
                   </div>
                </div>
            </div>
        </div>

       
    </body>
</html>
