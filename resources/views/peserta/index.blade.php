@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: yellow;">{{ __('peserta') }}</div>

                <div class="card-body">
                <a class="btn btn-info" href="/peserta/create">add peserta</a>
<table class="table table-hover">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>no_ktp</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    @foreach($peserta as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->no_ktp}}</td>
        <td>{{$p->alamat}}</td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-warning" href="/peserta/{{$p->id}}/edit">edit</a>
            <form action="/peserta/{{$p->id}}" method="POST">
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