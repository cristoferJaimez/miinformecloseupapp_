<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>{{ auth()->user()->name }} @yield('title')</title>
    </head>

    <body class="container fluid">
        @include('layout.nav')
       
        <div class="row">
            <div class="col-md-2  col-sm-12 m-0 ">
                @include('layout.navdashboardtenante')
            </div>
            <div id="change" class=" mt-5 border border-star col-md-10  col-sm-12 m-0 ">
                
            </div>
            
        </div>
        <script>  

            function divChange(){
             let div_ = document.getElementById('change');
                div_.innerHTML= "Texto";

            }
            
        </script>
    </body>
</html>