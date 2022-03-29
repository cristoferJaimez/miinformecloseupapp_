
<div class="container-fluid fs-6 text">


    <div class="row">
        <div class="col-md-6 col-sm-12 mt-4">
            <div class="card">
                <div class="container">
                <div class="mt-2 card-title">Data User</div>

                    <table class=" table table-striped table-sm fs-6 text">
                        <thead>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>Name </td>
                                <td></td>
                            </tr>
                            <tr class="">
                                <td>Document </td>
                                <td></td>
                            </tr>
                            <tr class="">
                                <td>Direction </td>
                                <td></td>
                            </tr>
                            <tr class="">
                                <td>Email </td>
                                <td></td>
                            </tr>
                            <tr class="">
                                <td>Contry </td>
                                <td></td>
                            </tr>
    
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-sm-12 mt-4">
            <div class="card ">
               <div class="container">
                <div class="m-2 card-title">Create Domain</div>
                <form action="{{ route('register') }}" method="POST">
                    <div class="form-group text-center">
                        @csrf
                        <div class="input-group mt-3">
                            <input type="text" class="m-1 form-control" oninput="updatevalue()" id="name" required value="{{ old('name') }}" autofocus
                                name="namecontry" placeholder="Name country..." />
                            <div class="form-text text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2 input-group">
                            <input type="text" disabled aria-label="First name"  value="{{ old('name') }}" id="domain"  placeholder="Name Domain..."
                                class="form-control m-1 text-center ">
                        
                        </div>
                        <span class="text-muted">.miinformecloseupapp.com</span>

                        <br>
                        <div class=" mx-auto">
                            <button class="btn btn-sm  btn-primary mt-2" type="submit">Domain Register</button>
                        </div>
                    </div>
                </form>
               </div>
            </div>

        </div>


      <div class="container">
        <div class="card col-md-12  col-sm-12 mt-4">
            <div class="container">
                <div class="m-2 card-title">Status Domain</div>
                <table class="table table-striped table-sm">
                    <thead>
                        <th>Domain</th>
                    </thead>
                    <tbody>
                       
                        <tr class="stretched-link fs-6 text">
                            <td>Name: </td>
                            <td colspan=""></td>
                            <td colspan="" class="table-active ">
                                <a href="#"  disabled class="btn  btn btn-outline-success btn-sm text-success">ok</a>
                                <a href="#"  disabled class="btn  btn btn-outline-warning btn-sm text-warning">fail</a>
                                <a href="#"  disabled class="btn  btn btn-outline-danger  btn-sm text-danger">down</a>
                                <a href="#"  disabled class="btn  btn btn-outline-success btn-sm text-success">active</a>
                                <a href="#"  disabled class="btn  btn btn-outline-danger btn-sm text-danger">not active</a>
                            </td>
                        </tr>
                     
    
                </table>
            </div>
        </div>
      </div>


    </div>
</div>
