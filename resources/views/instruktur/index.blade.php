@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: cyan;">{{ __('instruktur') }}</div>

                <div class="card-body">
                <a class="btn btn-info" href="/instruktur/create">add instruktur</a>
<table class="table table-hover">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>no_ktp</th>
        <th>no_sim</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    @foreach($instruktur as $i)
    <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nama}}</td>
        <td>{{$i->no_ktp}}</td>
        <td>{{$i->no_sim}}</td>
        <td>{{$i->alamat}}</td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-warning" href="/instruktur/{{$i->id}}/edit">edit</a>
            <form action="/instruktur/{{$i->id}}" method="POST">
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