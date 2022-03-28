<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body class="container">
    @include('layout.nav')
    
    <div class="container col-6">

        <div class="card border  border-light m-2 p-3">
            <form action="{{route('register')}}" method="POST">
                <div class="form-group text-center">
                @csrf
                    <label class="form-label">
                        <input type="text" class="form-control" autofocus required name="name" placeholder="Names..." />
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="number" class="form-control" required name="document" placeholder="Document..." />
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="text" class="form-control" required name="addres" placeholder="Addres..." />
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="email" class="form-control" required name="email" placeholder="Email..." />
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="email" class="form-control" required name="email_" placeholder="Confirm_Email..." />
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="password" class="form-control" required name="password" placeholder="Password..." />
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="password" class="form-control" required name="password_" placeholder="Repeat Password..." />
                    </label>
                    <br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                          <button class="btn  btn-primary" type="submit">Register</button>
                    </div>
                </div>   
                </form>
          
        </div>

    </div>

</body>
</html>