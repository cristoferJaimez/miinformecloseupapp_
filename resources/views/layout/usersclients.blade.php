<div class="container">
    @include('layout.nav')
    <div class="row">
        <h3 class="mt-4">List Users</h3>
        <ul>
            <div class="card-group">
            @foreach ($users as $item)
                <div class="card mt-2 mb-2 col-md-4 col-sm-12">
                    <div class="card-body">
                       <ul>
                           <li> {{$item->email}}</li>
                           <li> {{$item->name}}</li>
                           <li> {{}}</li>
                       </ul>
                       <div class="text-end" >
                         <ul >
                             <li class="mr-2" style="display: inline">#post</li>
                             <li class="mr-2" style="display: inline"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button">public</a></li>
                             <li class="mr-2" style="display: inline">stated</li>
                         </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </ul>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
              @csrf
          </form>
        </div>
        
      </div>
    </div>
  </div>