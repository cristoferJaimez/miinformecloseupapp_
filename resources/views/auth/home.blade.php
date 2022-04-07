<div  class="border-start border-danger  bg-dark    col-md-7 col-sm-12 m-0  "  style="height: 750px">
    @include('auth.header')

    <div class="col-sm-12 col-md-12 p-5 mt-5 " >
       @if(auth()->user()->fk_rol === 1)
       @else
            @include('layout.main')
       @endif       
     </div>
 </div>