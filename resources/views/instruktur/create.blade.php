@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: cyan;">{{ __('buat instruktur') }}</div>

                <div class="card-body">
                <form action="/instruktur/store" method="POST">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no ktp :</label>
    <input type="text" class="form-control" name="no_ktp" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no sim :</label>
    <input type="text" class="form-control" name="no_sim" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat :</label>
    <textarea class="form-control" placeholder="alamat" name="alamat"></textarea>
    </div>

    <input class="btn btn-success" type="submit" name="submit" value="save">
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection