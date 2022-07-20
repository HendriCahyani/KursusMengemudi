@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="background-color: yellow;">{{ __('edit peserta') }}</div>

                <div class="card-body">
                <form action="/peserta/{{$peserta->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" value="{{$peserta->nama}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no ktp :</label>
    <input type="text" class="form-control" name="no_ktp" aria-describedby="emailHelp" value="{{$peserta->no_ktp}}">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat :</label>
    <textarea class="form-control" placeholder="alamat" name="alamat">{{$peserta->alamat}}</textarea>
    </div>

    <input class="btn btn-success" type="submit" name="submit" value="update">
</form>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection