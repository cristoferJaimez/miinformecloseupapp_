    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body class=" m-0  row justify-content-center aling-items-center">
        
    @include('layout.nav')

    <div class="col-auto   text-center">
     
    <div class="">

        <div class=" col-12    mx-auto">
            <div class="card border border-light" style="border: none">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group text-center">
                            <!--token-->
                            @csrf
                            <label class="form-label">
                                <input type="email" class="form-control" required autofocus value="{{ old('email') }}" name="email" placeholder="Correo Electronico" />
                            </label>
                            <div class="form-text text-danger">@error('email'){{$message}}@enderror</div>
                            <label class="form-label">
                                <input type="password" class="form-control" required  name="password" placeholder="Contraseña" />
                            </label>
                            <div class="form-text text-danger">  @error('password'){{$message}}@enderror</div>
                            <label>
                                <input type="checkbox" name="remember" />
                                <p class="card-link" style="display: inline">Remember?</p>
                            </label>
                            <br>    
                           
                        <button class="btn  btn-primary" type="submit">Log In</button>                           
                        </div>        
                    </form>
                </div>
                
            </div>
        </div>

    </div>
    </div>
   
    </body>
    </html>
   
   
   