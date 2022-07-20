@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: cyan;">{{ __('edit instruktur') }}</div>

                <div class="card-body">
                <form action="/instruktur/{{$instruktur->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" value="{{$instruktur->nama}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no ktp :</label>
    <input type="text" class="form-control" name="no_ktp" aria-describedby="emailHelp" value="{{$instruktur->no_ktp}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no sim :</label>
    <input type="text" class="form-control" name="no_sim" aria-describedby="emailHelp" value="{{$instruktur->no_sim}}">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat :</label>
    <textarea class="form-control" placeholder="alamat" name="alamat">{{$instruktur->alamat}}</textarea>
    </div>

    <input class="btn btn-success" type="submit" name="submit" value="update">
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection