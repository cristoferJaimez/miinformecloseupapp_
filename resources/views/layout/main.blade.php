<!-- Stored in resources/views/layouts/app.blade.php -->
<html>

<head>
    <title> {{ auth()->user()->name }} @yield('Close Up')</title>

</head>

<body class="container fluid">
    @auth


        @include('layout.nav')

        <div class="row">
            <div class="col-2 m-0 ">
                @include('layout.navdashboard')
            </div>
            <div class="col-8 container  mt-5" id="navlayout">
                <iframe src="{{ URL::to('homeindex') }}" allowfullscreen class="col-12 mx-auto" name="iframe" frameborder="1"></iframe>
            </div>
            <div class="col-2 mt-5">
                <h6 class="text-muted">--Other Opciones--</h6>
                <ul>
                    
                </ul>
            </div>

        </div>
    

    @endauth

    <script src="{{ asset('js/nav.js') }}"></script>

</body>

</html>
