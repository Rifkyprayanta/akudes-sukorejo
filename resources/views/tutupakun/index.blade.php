@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Peringatan Tutup Akun</h6>
</div>
<div class="card-body">
 <p>Ini adalah halaman untuk menutup akun</p>
 <a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount">Tutup Akun</a>
</div>
</div>
 <!-- Logout Modal-->
  <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Menutup Akun?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"><h3>Menutup Akun Berarti Menghapus Seluruh Data Pada Kas Umum dan Juga Akan Menghapus Data Pada Kas Akun</h3></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-danger" href="{{ route('prosestutupakun')}}">Hapus</a>
        </div>
      </div>
    </div>
  </div>

@endsection('content')