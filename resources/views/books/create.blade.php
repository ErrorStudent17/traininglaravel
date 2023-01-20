@extends('layouts.app')

@section('title', 'Input Buku')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input Buku</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/books/save')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                            <input name="title" id="title" type="text" class="form-control">
                            @if ($errors->has('title'))
                            <div class="alert alert-danger">
                            <span class="text-danger">Judul harus diisi</span>
                            </div>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" cols="10" rows="10"
                                class="form-control"></textarea>
                            @if ($errors->has('description'))
                            <div class="alert alert-danger">
                            <span class="text-danger">Deskripsi harus diisi</span>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                            <input name="author" id="author" type="text" class="form-control">
                            @if ($errors->has('author'))
                            <div class="alert alert-danger">
                            <span class="text-danger">Author harus diisi</span>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Foto Sampul Buku</label>
                            <input name="cover" id="cover" type="file" class="form-control">
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