<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>

<div class="container">
    <div class="row">

        <h1 class="text-center mt-4 mb-4"> List Users </h1>

        @foreach ($users as $item )
        <div class="card row mt-1">
            <div class="card-body">
                <div class="col-8">
                    {{$item->name}}
                </div>
                <div class="col-4 text-rigth" style="display: inline">
                    <a class="btn text-muted" data-bs-toggle="modal" href="#exampleModalToggle" role="button"># Post</a>

                    <a class="btn text-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">view</a>
                    <a class="btn text-danger" data-bs-toggle="modal" href="#exampleModalToggle" role="button">delete</a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>



<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <a href="" class="card-link">update</a>

            </div>
        </div>
    </div>
</div>
