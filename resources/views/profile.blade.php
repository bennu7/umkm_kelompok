@extends('layouts.main')

@section('container')

<div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-12">
          {{-- <div class="card">
            <div class="card-body">
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <span class="avatar avatar-lg" style="background-image: url(https://waskita.test/profile.png)"></span>
                </div>
                <div class="col">
                  <h4 class="card-title m-0">
                    <a href="#"></a> <span class="badge bg-green"></span>
                  </h4>
                  <div class="small mt-1">

                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- @dd($id) --}}

          @if (Session::has('success'))    
            <p class="alert alert-success">{{ Session::get('success') }}</p><br>
          @endif
          @if (Session::has('failed'))    
            <p class="alert alert-danger">{{ Session::get('failed') }}</p><br>
          @endif

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pengaturan Akun</h3>
            </div>
            <div class="card-body">
              <form action="/profile" method="POST">
                  @csrf
                <div class="form-group mb-3 ">
                  <label class="form-label">Nama Lengkap</label>
                  <div>
                    <input type="text" name="name" class="form-control" aria-describedby="" placeholder="" value="{{ $user->name }}">
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label" for="email">Email anda</label>
                  <div>
                    <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="" value="{{ $user->email }}" autocomplete="off" readonly>
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="form-group mb-3 ">
                    <label class="form-label">Kata Sandi sebelumnya</label>
                    <div>
                      <input type="password" class="form-control" name="password" id="password" aria-describedby="" readonly value="{{ $user->password }}" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group mb-3 ">
                    <label class="form-label">Kata Sandi Baru</label>
                    <div>
                      <input type="password" class="form-control" name="npassword" id="npassword" aria-describedby="" placeholder="" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group mb-3 ">
                    <label class="form-label">Konfirmasi Kata Sandi Baru</label>
                    <div>
                      <input type="password" class="form-control" name="cnpassword" id="cnpassword" aria-describedby="" placeholder="" autocomplete="off">
                    </div>
                  </div>
                <div class="form-group mb-3 text-muted">
                  <label class="form-label" for="alamat">Alamat rumah anda</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $user->alamat }}">
                  <!-- <textarea class="form-control" data-bs-toggle="autosize" placeholder="Type something…">jl. bersama dia tapi tidak pernah bersatu rt 01 rw 10 kec bersama kelurahan tidak pasti kabupaten mengsedih</textarea> -->
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100" name="updateEmailAlamat">Update data</button>
                </div>
             </form>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="row row-cards mt-4">
        <div class="col-md-12">
          <form action="/profile" method="POST">
            @csrf
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengaturan Kata Sandi</h3>
              </div>
              <div class="card-body">
                <div class="form-group mb-3 ">
                  <label class="form-label">Kata Sandi sebelumnya</label>
                  <div>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="" readonly value="{{ $user->password }}" autocomplete="off">
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Kata Sandi Baru</label>
                  <div>
                    <input type="password" class="form-control" name="npassword" id="npassword" aria-describedby="" placeholder="" autocomplete="off">
                  </div>
                </div>
                <div class="form-group mb-3 ">
                  <label class="form-label">Konfirmasi Kata Sandi Baru</label>
                  <div>
                    <input type="password" class="form-control" name="cnpassword" id="cnpassword" aria-describedby="" placeholder="" autocomplete="off">
                  </div>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary w-100" name="updatePassword">Ubah Kata
                    Sandi</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div> --}}
    </div>

@endsection