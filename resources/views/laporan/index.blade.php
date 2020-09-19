@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
</div>
<div class="card-body">
	<p>Masukkan Tanggal Awal dan Tanggal Akhir Laporan</p>

<form method="GET" action="{{ route('cari') }}" target="_blank">
@csrf
  <div class="form-group row">
    <label for="tanggal_awal" class="col-sm-2 col-form-label">Tanggal Awal </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" placeholder="Masukkan Tanggal Awal">
    </div>
  </div>

  <div class="form-group row">
    <label for="tanggal_akhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" placeholder="Masukkan Tanggal Akhir">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Cari Data</button>
    </div>
  </div>
</form>
</div>
</div>

@endsection('content')