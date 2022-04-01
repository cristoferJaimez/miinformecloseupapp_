<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body class="container">
    @include('layout.nav')

    <div class="container mt-5  ">

        <div class="card col-4 mx-auto mt-5 border  border-light m-2 p-4">
            <form action="{{ route('register') }}" method="POST">
                <div class="form-group text-center">
                    @csrf
                    <label class="form-label">
                        <input type="text" class="form-control" required value="{{ old('name') }}" autofocus
                            name="name" placeholder="Names..." />
                        <div class="form-text text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="email" class="form-control" required value="{{ old('email') }}" name="email"
                            placeholder="Email..." />
                        <div class="form-text text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </label>
                    <br>
                    <label class="form-label">
                        <input type="password" class="form-control" required name="password"
                            placeholder="Password..." />
                        <div class="form-text text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </label>

                    <br>
                    <div class="mt-2 col-6 mx-auto">
                        <button class="btn  btn-primary" type="submit">Register</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

</body>

</html>
