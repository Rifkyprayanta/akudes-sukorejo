@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Tambah Kas Umum</h6>
</div>
<div class="card-body">

<form method="POST" action="{{ route('kasumum.store') }}">
@csrf
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Kode Akun</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_akun" id="exampleFormControlSelect1">
      @foreach($akun as $a)
        <option value="{{ $a->id_akun }}">{{ $a->kode_akun }} - {{ $a->nama_akun }} - {{ $a->sub_akun }} - {{ $a->sub_akun1 }}</option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Password">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="debit" class="col-sm-2 col-form-label">Debit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="debit" name="debit" placeholder="Masukkan Debit">
    </div>
  </div>

  <div class="form-group row">
    <label for="kredit" class="col-sm-2 col-form-label">Kredit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kredit" name="kredit" placeholder="Masukkan Kredit">
    </div>
  </div>
   <!-- <div class="form-group row">
    <label for="saldo" class="col-sm-2 col-form-label">Saldo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="saldo" name="saldo" placeholder="Masukkan Saldo">
    </div>
  </div> -->
  <div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <a type="button" class="btn btn-light" href="{{ route('kasumum.index')}}">Kembali</a>
      <button type="submit" class="btn btn-success">Tambah Data</button>
    </div>
  </div>
</form>
  
</div>
</div>

@endsection('content')