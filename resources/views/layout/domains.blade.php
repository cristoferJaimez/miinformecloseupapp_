<div class="container" style="text-decoration: none">
    @foreach ($tenants as $key => $value)
    <div class="card col-3 mt-4 text-left">
        <div class="card-body" style="text-transform: capitalize">
          <ul class=" list-unstyled">
            <li> <i class="fa-thin fa-server"></i>  {{$value->name}} </li>
            <li><i class="fa-thin fa-server"></i> {{$value->domain}} </li>
            <li> <i class="fa-thin fa-database"></i>   {{$value->database}} </li>
          </ul>
        </div>
        <div class="card-footer text-muted text-center">
          <i class="fa-thin fa-database"></i>  <i class="fa-thin fa-calendar-clock"></i> {{$value->created_at}}
          </div>
    </div> 
    
  @endforeach     