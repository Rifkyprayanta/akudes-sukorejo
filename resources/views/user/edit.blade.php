@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
</div>
<div class="card-body">

<form method="POST" action="{{ route('user.update',$user->id_user) }}">
 @csrf
  @method('PUT')
 <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="{{ $user->username }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="{{ $user->password }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $user->nama }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="{{ $user->jabatan }}">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <a type="button" class="btn btn-light" href="{{ route('user.index')}}">Kembali</a>
      <button type="submit" class="btn btn-success">Edit Data</button>
    </div>
  </div>
</form>
  
</div>
</div>

@endsection('content')