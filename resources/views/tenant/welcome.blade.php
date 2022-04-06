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
                <div class="col-md-5 col-sm-12">
                    <div class="">
                        @auth
                        <div class="d-flex align-items-center p-5  flex-column bd-highlight">
                            <div class="mt-auto p-5  bd-highlight">
                                @include('auth.user')
                            </div>
                        </div>
                            
                        @endauth

                        @guest
                        @include('auth.login')
                        @endguest

                    </div>
                </div>
                   
                   @auth
                    @include('auth.home')
                   @endauth
                    @guest
                <div  class="border-start text-with bg-dark justify-content   col-md-7 col-sm-12 d-sm-none  d-none d-md-block m-0  row justify-content-center aling-item-center"  style="height: 750px">
                    <div class="col-auto p-5 mt-5 " style="color: aliceblue">
                        <p class="text-left">
                            <h1>Welcome to</h1>
                            <h2>our community</h2>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos unde eum perspiciatis. Qui consequatur explicabo, ratione tempore illo ut eaque deleniti nobis aspernatur facilis nam tenetur inventore quis et?
                            </p>
    
                            <p class="text-center">
                                Our clients
                            </p>
                            <p>
                                
                            </p>
                        </p>
                       </div>
                </div>
                    @endguest
                  
              
        </div>

       
    </body>
</html>
