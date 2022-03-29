    @auth
    <title>{{ auth()->user()->name }}</title>
    @endauth
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />


        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="{{'/'}}"  class="navbar-brand" >
                <img src="https://www.close-upinternational.com/img/logo.svg" width="150px" alt="Close up logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="  collapse navbar-collapse" id="navbarSupportedContent">    
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              

                @auth
                <li class="nav-item">
                    <form class="d-flex" action="#">
                        @csrf
                        <input class="form-control me-2" value="{{ old('search') }}" name="search" type="search" placeholder="Search" aria-label="Search">
                      </form>
                </li>   
    
                @endauth    
                

                <li class="nav-item ">  <a class="nav-link" href="{{'/'}}"> <i class="fa-thin fa-door-open"></i> Welcome</a></li>
                    @auth
                <li class="nav-item ">  <a class="nav-link " href="{{'home'}}"> <i class="fa-thin fa-house-user"></i> Home</a></li>
                <li class="nav-item ">  <a class="nav-link " href="{{'home'}}"><i class="fa-thin fa-message"></i></a></li>
                <li class="nav-item ">
                    
                </li>    
                <li class="nav-item ">
                    <form  action="{{'logout'}}" style="display: inline;" method="POST">
                        @csrf
                        <a class="nav-link" href="#" onclick="this.closest('form').submit()"> <i class="fa-thin fa-arrow-right-from-bracket"></i> Log out</a>
                    </form>
                    <li>
                    @else
                    <li class="nav-item "><a class="nav-link " href="{{ 'login' }}"><i class="fa-thin fa-user"></i>log In</a></li>
                    <li class="nav-item "><a class="nav-link " href="{{ 'register' }}"><i class="fa-thin fa-id-card"></i>Register</a></li>
                    @endauth
                  
    
                </ul>
               
        </div>
        
        </div>
        </nav>   
        
        


    @if(session('status'))

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <small class="text-muted">11 mins ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{session('status')}}
         </div>
      </div>    
    @endif

