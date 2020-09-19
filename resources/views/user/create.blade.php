@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
</div>
<div class="card-body">

<form method="POST" action="{{ route('user.store') }}">
@csrf
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <a type="button" class="btn btn-light" href="{{ route('user.index')}}">Kembali</a>
      <button type="submit" class="btn btn-success">Tambah Data</button>
    </div>
  </div>
</form>
  
</div>
</div>

@endsection('content')