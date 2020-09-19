@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Tabel Akun</h6>
</div>
<div class="card-body">
  <a href="{{ route('akun.create') }}" type="button" class="btn btn-success">Tambah Data</a>
  <br>
  <br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
        <th>No</th>
         <th>Kode Akun</th>
          <th>Nama Akun</th>
          <th>Sub Akun</th>
          <th>Sub Akun 1</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Kode Akun</th>
          <th>Nama Akun</th>
          <th>Sub Akun</th>
          <th>Sub Akun 1</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
      <tbody>
      	@foreach($akun as $index => $a)
        <tr>
          <td>{{ $index +1 }}</td>
          <td>{{ $a->kode_akun }}</td>
          <td>{{ $a->nama_akun }}</td>
          <td>{{ $a->sub_akun }}</td>
          <td>{{ $a->sub_akun1 }}</td>
          <td><a href="{{ route('akun.edit', $a->id_akun)}}" type="button" class="btn btn-success">Edit</a> &nbsp <form action="{{ route('akun.destroy',$a->id_akun) }}" method="POST">@csrf @method('DELETE') <button class="btn btn-danger" type="submit">Delete</button></form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
</div>

@endsection('content')