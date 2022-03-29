<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>{{ auth()->user()->name }} @yield('title')</title>
    </head>
    <style>
       a { text-decoration: none} ;
    </style>
    <body class="container fluid">
        @include('layout.nav')
        
        <div class="row">
            <div class="col-2 m-0 ">
                @include('layout.navdashboardtenante')
            </div>
            <div class="col-10 m-0 ">
                @include('layout.post')
            </div>
        </div>
    </body>
</html>