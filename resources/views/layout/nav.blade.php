    @auth
        <title>{{ auth()->user()->name }}</title>
    @endauth
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>

    <nav class="navbar  navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="{{ '/' }}" class="navbar-brand">
                <img src="https://www.close-upinternational.com/img/logo.svg" width="150px" alt="Close up logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="  collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                    @auth
                        <li class="nav-item">
                            <form class="d-flex" action="#">
                                @csrf
                                <input class="form-control me-2" value="{{ old('search') }}" name="search" type="search"
                                    placeholder="Search" aria-label="Search">
                            </form>
                        </li>

                    @endauth


                    <li class="nav-item "> <a class="nav-link" href="{{ '/' }}"> <i
                                class="fa-thin fa-door-open"></i> Welcome</a></li>
                    @auth
                        <li class="nav-item "> <a class="nav-link " href="{{ 'home' }}"> <i
                                    class="fa-thin fa-house-user"></i> Home</a></li>
                        <li class="nav-item "> <a class="nav-link " href="{{ 'home' }}"><i
                                    class="fa-thin fa-message"></i></a></li>
                        <li class="nav-item ">

                        </li>
                        <li class="nav-item ">
                            <form action="{{ 'logout' }}" style="display: inline;" method="POST">
                                @csrf
                                <a class="nav-link" href="#" onclick="this.closest('form').submit()"> <i
                                        class="fa-thin fa-arrow-right-from-bracket"></i> Sing out</a>
                            </form>
                        <li>
                        @else
                        <li class="nav-item "><a class="nav-link " href="{{ 'login' }}"><i
                                    class="fa-thin fa-user"></i>log In</a></li>
                        <li class="nav-item "><a class="nav-link " href="{{ 'register' }}"><i
                                    class="fa-thin fa-id-card"></i>Register</a></li>
                    @endauth

                    <li>
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                             en
                            </button>
                            <ul class="dropdown-menu mt-2" aria-labelledby="btnGroupDrop1">
                              <li><a class="dropdown-item" href="#">english  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/800px-Flag_of_the_United_States.svg.png" alt="en" width="20px" /></a>  </li>
                              <li><a class="dropdown-item" href="#">epanish  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg/800px-Bandera_de_Espa%C3%B1a_%28nuevo_dise%C3%B1o%29.svg.png?20150824220624" alt="en" width="20px" /></a> </a></li>
                            </ul>
                          </div>
                    </li>
                </ul>

            </div>

        </div>
    </nav>



    @if (session('status'))
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small class="text-muted">11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <hr class="text-muted">
    <div class="v-line">

    </div>
