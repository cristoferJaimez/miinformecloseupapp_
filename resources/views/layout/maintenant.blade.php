<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>{{ auth()->user()->name }} @yield('title')</title>
    </head>

    <body class="container fluid">
        @include('layout.nav')
       
        <div class="row">
            <div class="col-md-12  col-sm-12 m-0 ">
                @include('layout.usersclients')
            </div>
        </div>

    </body>
</html>