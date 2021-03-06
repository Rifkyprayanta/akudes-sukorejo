@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Tambah Akun</h6>
</div>
<div class="card-body">

<form method="POST" action="{{ route('akun.store') }}">
@csrf
  <div class="form-group row">
    <label for="namaakun" class="col-sm-2 col-form-label">Nama Akun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="namaakun" name="nama_akun" placeholder="Masukkan Nama Akun">
    </div>
  </div>
  <div class="form-group row">
    <label for="kodeakun" class="col-sm-2 col-form-label">Kode Akun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kodeakun" name="kode_akun" placeholder="Masukkan Kode Akun">
    </div>
  </div>
  <div class="form-group row">
    <label for="subakun" class="col-sm-2 col-form-label">Sub Akun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="subakun" name="sub_akun" placeholder="Masukkan Sub Akun">
    </div>
  </div>
  <div class="form-group row">
    <label for="subakun1" class="col-sm-2 col-form-label">Sub Akun 1</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="subakun1" name="sub_akun1" placeholder="Masukkan Sub Akun Pertama">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <a type="button" class="btn btn-light" href="{{ route('akun.index')}}">Kembali</a>
      <button type="submit" class="btn btn-success">Tambah Data</button>
    </div>
  </div>
</form>
  
</div>
</div>

@endsection('content')