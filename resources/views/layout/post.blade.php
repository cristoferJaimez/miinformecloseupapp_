<div>
    <h1>Post URL</h1>
    <form action="" method="POST">
        <div class="form-group text-center">
            <!--token-->
            @csrf
            <label class="form-label">
                <input type="email" class="form-control" required autofocus value="{{ old('email') }}" name="email" placeholder="Email..." />
            </label>
            <div class="form-text text-danger">@error('email'){{$message}}@enderror</div>
            <label class="form-label">
                <input type="password" class="form-control" required  name="password" placeholder="Password..." />
            </label>
            <div class="form-text text-danger">  @error('password'){{$message}}@enderror</div>
            <label>
                <input type="checkbox" name="remember" />
                <p class="card-link " style="display: inline">Remember?</p>
            </label>
            <br>    
           
        <button class="btn mt-2  btn-primary" type="submit">Log In</button>                           
        </div>        
    </form>
</div>