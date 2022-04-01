<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>{{ auth()->user()->name }} @yield('title')</title>
    </head>

    <body class="container fluid">
        @include('layout.nav')
       
        <div class="row">
            <div class="col-2 m-0 ">
                @include('layout.navdashboardtenante')
            </div>
            <iframe class="col-md-8 col-sm-12 mt-4 border-start" name="myiframe" src="" ></iframe>
        </div>
    </body>
</html>