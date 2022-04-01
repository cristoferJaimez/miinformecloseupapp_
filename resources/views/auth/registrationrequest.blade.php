
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<div class="container">
    @include('layout.nav')

    <div class="row mt-5">

        <div class="card mx-auto col-md-4 col-sm-10 mt-5">
            <div class="card-body">
                <div class="card-title text-center"><h5>Request domain!</h5></div>
                <form action="">
                    @csrf
                    <label class="form-label">  </label>
                        <input type="text" class="form-control" required value="{{ old('name') }}" autofocus  name="name" placeholder="Full names..." />
                        <div class="form-text text-danger">@error('name'){{$message}}@enderror</div>
                  
                    <label class="form-label"></label>
                        <input type="email" class="form-control" required value="{{ old('email') }}"    name="email" placeholder="Email..." />
                        <div class="form-text text-danger">@error('email'){{$message}}@enderror</div>

                    <label class="form-label"></label>
                        <input type="number" class="form-control" required value="{{ old('phone') }}"    name="phone" placeholder="Contact phone..." />
                        <div class="form-text text-danger">@error('phone'){{$message}}@enderror</div>
                    <button class="btn btn-primary btn-sm mt-2">Request domain</button>
                    <hr class="text-muted">
                    <a href="" class="link-card"></a>
                </form>
            </div>
        </div>    
    </div>    
</div>