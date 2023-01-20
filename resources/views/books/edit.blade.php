@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Edit Buku</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/books/update', $book->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul <span class="text-danger">* Wajib
                                    diisi</span></label>
                            <input name="title" id="title" type="text" value="{{$book->title}}" class="form-control">
                            @if ($errors->has('title'))
                            <div class="alert alert-danger">
                                <span class="text-danger">Judul harus diisi</span>
                            </div>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi <span class="text-danger">* Wajib
                                    diisi</span></label>
                            <textarea name="description" id="description" cols="10" rows="10"
                                class="form-control">{{$book->description}}</textarea>
                            @if ($errors->has('description'))
                            <div class="alert alert-danger">
                                <span class="text-danger">Deskripsi harus diisi</span>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                            <input name="author" id="author" type="text" value="{{$book->author}}" class="form-control">
                            @if ($errors->has('author'))
                            <div class="alert alert-danger">
                                <span class="text-danger">Author harus diisi</span>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <img src="{{asset('storage/'.$book->cover)}}" alt="{{$book->cover}}" width="100" />
                            <label for="cover" class="form-label">Foto Sampul Buku</label>
                            <input name="cover" id="cover" type="file" value="{{$book->cover}}" class="form-control">
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