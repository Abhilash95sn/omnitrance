@extends('master')
@section("content")

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-sm-4">
            <form action="">
                 <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                             <input type="number" class="form-control" placeholder="password"></input>
                    </div>
                    <button class="btn btn-primary mt-3">submit</button>
            </form>

        </div>
    </div>

</div>

@endsection