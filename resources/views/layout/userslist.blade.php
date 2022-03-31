<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
     <div class="row">
         <div class=" card col mt-2">
            <div class="card-body">
                <div class="card-title text-center">
                    List of domain users
                </div>
                <table class="table table-striped table-sm" style="font-size: 0.7em">
                    <tbody class="text-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Domain</th>
                        <th>Data Base</th>
                        <th>User</th>
                        <th>Rol</th>
                        <th>Options</th>
                        <th>condition</th>
                    </tbody>
                    @foreach ($tenants as $key => $value)
                    <tr class="text-center">
                      
                        <td>{{$key + 1  }}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->domain}}</td>
                        <td>{{$value->database}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->description}}</td>
                        <td class="text-center">
                           <a href="#" title="{{$value->id}}"  disabled class="card-link text-primary">view</a>
                                              
                        </td>
                        <td> <a href="#"  disabled class=" card-link text-success">Active</a> </td>
                    </tr>
                    @endforeach    

                </table>
            </div>
         </div>
     </div>
 </div>
