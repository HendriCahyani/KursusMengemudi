@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: magenta;">{{ __('mobil') }}</div>

                <div class="card-body">
                <a class="btn btn-info" href="/mobil/create">add mobil</a>
<table class="table table-hover">
    <tr>
        <th>no</th>
        <th>nama_mobil</th>
        <th>brand</th>
        <th>biaya</th>
        <th>no_kt</th>
        <th>aksi</th>
    </tr>
    @foreach($mobil as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama_mobil}}</td>
        <td>{{$m->brand}}</td>
        <td>{{$m->biaya}}</td>
        <td>{{$m->no_kt}}</td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-warning" href="/mobil/{{$m->id}}/edit">edit</a>
            <form action="/mobil/{{$m->id}}" method="POST">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="delete">
            </form>
        </div>
        </td>
    </tr>
    @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection