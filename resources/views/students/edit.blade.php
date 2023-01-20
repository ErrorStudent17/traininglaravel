@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Edit Siswa</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/students/update')}}/{{$student->id}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input name="nis" id="nis" type="text" value="{{$student->nis}}" class="form-control">
                            @error('nis')
                            <div class="alert alert-danger">
                                <span class="text-danger">NIS harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" id="nama" type="text" value="{{$student->nama}}" class="form-control">
                            @error('nama')
                            <div class="alert alert-danger">
                                <span class="text-danger">Nama harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="col-2 mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="10" {{ $student->kelas === '10' ? 'selected' : '' }}>10</option>
                                <option value="11" {{ $student->kelas === '11' ? 'selected' : '' }}>11</option>
                                <option value="12" {{ $student->kelas === '12' ? 'selected' : '' }}>12</option>
                            </select>
                            @error('kelas')
                            <div class="alert alert-danger">
                                <span class="text-danger">Kelas harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control">{{$student->alamat}}</textarea>
                            @error('alamat')
                            <div class="alert alert-danger">
                                <span class="text-danger">Alamat harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Siswa</label>
                            <input name="foto" id="foto" type="file" value="{{$student->foto}}" class="form-control">
                            @error('foto')
                            <div class="alert alert-danger">
                                <span class="text-danger">Foto harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-md btn-warning text-white">Ubah Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection