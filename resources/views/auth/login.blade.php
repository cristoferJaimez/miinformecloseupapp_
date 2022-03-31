    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>

    <body class="container">

        @include('layout.nav')

        <div class="m-0 mt-5 row justify-content-center aling-items-center ">

            <div class="col-auto   text-center">
             
                <div class="card border mt-5" style="border:none">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group text-center">
                                <!--token-->
                                @csrf
                                <label class="form-label">
                                    <input type="email" class="form-control" required autofocus
                                        value="{{ old('email') }}" name="email" placeholder="Email..." />
                                </label>
                                <div class="form-text text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <label class="form-label">
                                    <input type="password" class="form-control" required name="password"
                                        placeholder="Password..." />
                                </label>
                                <div class="form-text text-danger"> @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <label>
                                    <input type="checkbox" name="remember" />
                                    <p class="card-link " style="display: inline">Remember me?</p>
                                </label>
                                <br>

                                <button class="btn mt-2  btn-primary" type="submit">Log In</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        </div>

    </body>

    </html>
