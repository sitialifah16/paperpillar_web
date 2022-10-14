@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>NIM</td>
                            <td>Jurusan</td>
                            <td>Fakultas</td>
                        </tr>
                        @foreach($informasi as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->nim}}</td>
                            <td>{{$info->jurusan}}</td>
                            <td>{{$info->fakultas}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
