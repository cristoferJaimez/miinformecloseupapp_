<div>
    <h1>Post URL</h1>
    <form action="{{'post'}}" method="POST">
        <div class="form-group text-center">
            <!--token-->
            @csrf
            <label class="form-label">
                <input type="url" class="form-control" required autofocus value="{{ old('url') }}" name="url" placeholder="Url post..." />
            </label>
            <div class="form-text text-danger">@error('email'){{$message}}@enderror</div>
             
           
           <button class="btn mt-2  btn-primary" type="submit">send post</button>                           
        </div>        
    </form>
</div>