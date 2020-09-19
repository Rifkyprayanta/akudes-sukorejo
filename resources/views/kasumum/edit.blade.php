@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Edit Kas Umum</h6>
</div>
<div class="card-body">

<form method="POST" action="{{ route('kasumum.update',$kasumum->id_kasumum) }}">
 @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Kode Akun</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_akun" id="exampleFormControlSelect1">
      @foreach($akun as $a)
            <option value="{{ $a->id_akun }}"  {{ $selectedRole == $a->id_akun ? 'selected="selected"' : '' }}>{{ $a->nama_akun }}</option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" value="{{ $kasumum->tanggal }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="kredit" class="col-sm-2 col-form-label">Kredit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kredit" name="kredit" placeholder="Masukkan Kredit" value="{{ $kasumum->kredit }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="debit" class="col-sm-2 col-form-label">Debit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="debit" name="debit" placeholder="Masukkan Debit" value="{{ $kasumum->debit }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan" value="{{ $kasumum->keterangan }}">
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