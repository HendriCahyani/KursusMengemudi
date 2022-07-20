@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="background-color: magenta;">{{ __('edit mobil') }}</div>

                <div class="card-body">
                <form action="/mobil/{{$mobil->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama mobil :</label>
    <input type="text" class="form-control" name="nama_mobil" aria-describedby="emailHelp" value="{{$mobil->nama_mobil}}">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">brand :</label>
    <select class="form-select" name="brand">
        <option selected>brand mobil</option>
        <option value="Toyota">Toyota</option>
        <option value="Honda">Honda</option>
        <option value="Daihatsu">Daihatsu</option>
        <option value="Suzuki">Suzuki</option>
        <option value="Mitsubishi">Mitsubishi</option>
        <option value="Kia">Kia</option>
        <option value="Nissan">Nissan</option>
        <option value="Datsun">Datsun</option>
        <option value="Mazda">Mazda</option>
        <option value="Isuzu">Isuzu</option>
    </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">biaya :</label>
    <select class="form-select" name="biaya">
        <option selected>biaya dan bulan</option>
        <option value="1 bulan = 500rb">1 bulan = 500rb</option>
        <option value="2 bulan = 700rb">2 bulan = 700rb</option>
        <option value="3 bulan = 900rb">3 bulan = 900rb</option>
        <option value="4 bulan = 1,1 juta">4 bulan = 1,1 juta</option>
        <option value="5 bulan = 1,3 juta">5 bulan = 1,3 juta</option>
    </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no kt :</label>
    <input type="text" class="form-control" name="no_kt" aria-describedby="emailHelp" value="{{$mobil->no_kt}}">
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