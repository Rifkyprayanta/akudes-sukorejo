@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
</div>
<div class="card-body">
  <a href="{{ route('user.create') }}" type="button" class="btn btn-success">Tambah User</a>
  <br>
  <br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
        <th>No</th>
         <th>Kode User</th>
          <th>Username</th>
          <th>Password</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($user as $index => $a)
        <tr>
          <td>{{ $index +1 }}</td>
          <td>{{ $a->id_user }}</td>
          <td>{{ $a->username }}</td>
          <td>{{ $a->password }}</td>
          <td>{{ $a->nama }}</td>
          <td>{{ $a->jabatan }}</td>
          <td><a href="{{ route('user.edit', $a->id_user)}}" type="button" class="btn btn-success">Edit</a> &nbsp @if($a->username == "aminati") @else <form action="{{ route('user.destroy',$a->id_user) }}" method="POST">@csrf @method('DELETE') <button class="btn btn-danger" type="submit">Delete</button></form> @endif </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
</div>

@endsection('content')