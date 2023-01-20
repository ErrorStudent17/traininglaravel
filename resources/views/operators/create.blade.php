@extends('layouts.app')

@section('title', 'Input Operator')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input Operator</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/operators/save')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" id="nama" type="text" class="form-control">
                        </div>
                        @error('nama')
                        <div class="alert alert-danger">
                            <span class="text-danger">Nama harus diisi</span>
                        </div>
                        @enderror

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="alert alert-danger">
                                <span class="text-danger">Jenis Kelamin harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-control">
                                <option value="Petugas Perpustakaan">Petugas Perpustakaan</option>
                                <option value="Sekretariat Perpustakaan">Sekretariat Perpustakaan</option>
                            </select>
                            @error('jabatan')
                            <div class="alert alert-danger">
                                <span class="text-danger">Jabatan harus diisi</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection