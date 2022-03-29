<!-- Stored in resources/views/layouts/app.blade.php -->
<html>

<head>
    <title> {{ auth()->user()->fk_rol }}-{{ auth()->user()->name }} @yield('Close Up')</title>

</head>

<body class="container fluid">
    @include('layout.nav')

    <div class="row">
        <div class="col-2 m-0 ">
            @include('layout.navdashboard')
        </div>
        <div class="col-8 container " id="navlayout">
            @include('layout.homeindex')
        </div>
        <div class="col-2">
           other opciones
           <ul>
               <li>option 1</li>
               <li>option 2</li>
               <li>option 3</li>
           </ul>
        </div>
       
    </div>
    <script src="{{ asset('js/nav.js') }}"></script>

</body>

</html>
