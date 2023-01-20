@extends('layouts.app')

@section('title', 'Daftar Operator')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{url('/operators/create')}}" class="btn btn-md btn-primary my-2">Tambah Data Baru</a>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="row">
        <div class="col-6">
            <div class="alert alert-success alert-dismissible text-center">
                <span>{{ Session::get('success') }}</span>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="card p-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Operator
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operators as $operator)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$operator->nama}}</td>
                            <td>{{$operator->jabatan}}</td>
                            <td>{{$operator->jenis_kelamin}}</td>
                            <td>
                                <a href="{{url('/operators/edit')}}/{{$operator->id}}"
                                    class="btn btn-warning btn-md text-white">Edit</a>
                                <form action="{{url('/operators/delete')}}/{{$operator->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection