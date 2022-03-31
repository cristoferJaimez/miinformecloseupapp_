<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>{{ auth()->user()->name }} @yield('title')</title>
    </head>

    <body class="container fluid">
        @include('layout.nav')
        {{$tenant}}
        <div class="row">
            <div class="col-2 m-0 ">
                @include('layout.navdashboardtenante')
            </div>
            <div class="col-10 m-0 ">
                @include('layout.usersclients')
            </div>
        </div>
    </body>
</html>