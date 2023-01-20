@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Registrasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/proses-register')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" id="inputFirstName" type="text"
                                            placeholder="Masukkan Nama Anda..." />
                                        <label for="inputFirstName">Nama</label>
                                        @error('name')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">Nama harus diisi</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="inputEmail" type="email"
                                    placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                                @error('email')
                                <div class="alert alert-danger">
                                    <span class="text-danger">Email harus diisi dan harus valid</span>
                                </div>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="password" id="inputPassword" type="password"
                                            placeholder="Buat Password Baru" />
                                        <label for="inputPassword">Password</label>
                                        @error('password')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">Password harus diisi</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="no_telepon" id="inputTelepon" type="text"
                                            placeholder="Masukkan Nomor Telepon Anda..." />
                                        <label for="inputTelepon">No. Telepon</label>
                                        @error('no-telepon')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">Nomor Telepon harus diisi</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea name="alamat" id="inputAlamat" cols="30" rows="10"
                                            class="form-control" placeholder="Masukkan Alamat Anda..."></textarea>
                                        <label for="inputAlamat">Alamat</label>
                                        @error('alamat')
                                        <div class="alert alert-danger">
                                            <span class="text-danger">Alamat harus diisi</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="uploadFoto">Upload Foto</label>
                                    <input name="foto_profil" id="uploadFoto" type="file" class="form-control">
                                    @error('foto_profil')
                                    <div class="alert alert-danger">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit"
                                        class="btn btn-primary btn-block">Register</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="/login">Sudah punya akun, login disini !!!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection