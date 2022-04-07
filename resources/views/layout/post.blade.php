@include('auth.header')
<div class="card col-6 mx-auto mt-5">
    <div class="card text-center ">
        <div class="card-body text-center">
            <table class="table table-hover  table table-sm">
                <thead class="text-center">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Users</th>
                    <th scope="col">Email</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($users as $item )
                    <tr>
                    <th scope="row" class="text-center">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td class="text-center">
                      <a href="#" class="btn btn-sm text-primary" title="{{$item->id}}" id="{{$item->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">public</a>  
                    </td>
                    </tr>  
                    @endforeach
                    
                  
                   
                </tbody>
              </table>
        </div>
    </div>
</div>

@include('layout.modalPost')