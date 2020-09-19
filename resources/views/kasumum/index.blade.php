@extends('layouts.app')

@section('content')

<div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Total Keseluruhan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    <div class="row">

             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Debit</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@foreach($debit as $dbt) @currency($dbt->total_debit) @endforeach</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kredit</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@foreach($kredit as $dbt) @currency($dbt->total_kredit) @endforeach</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Saldo</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@foreach($saldo as $dbt) @currency($dbt->total_saldo) @endforeach</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
             </div>
            </div>
          </div>
      </div>
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Tabel Kas Umum</h6>
</div>
<div class="card-body">
	<a href="{{ route('kasumum.create') }}" type="button" class="btn btn-success">Tambah Data</a>
  <br>
  <br>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
        <th>No</th>
         <th>Kode Akun</th>
          <th>Tanggal</th>
          <th>Nama Akun</th>
          <th>Sub Akun</th>
          <th>Sub Akun 1</th>
          <th>Debit</th>
          <th>Kredit</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($kasumum as $index => $a)
        <tr>
          <td>{{ $index +1 }}</td>
          <td>{{ $a->akun->kode_akun }}</td>
          <td>{{ date('d F Y', strtotime($a->tanggal)) }}</td>
          <td>{{ $a->akun->nama_akun }}</td>
          <td>{{ $a->akun->sub_akun }}</td>
          <td>{{ $a->akun->sub_akun1 }} </td>
          <td>@currency($a->debit)</td>
          <td>@currency($a->kredit)</td>
          <td>{{ $a->keterangan }}</td>
          <td><a href="{{ route('kasumum.edit', $a->id_kasumum )}}" type="button" class="btn btn-success">Edit</a> &nbsp <form action="{{ route('kasumum.destroy',$a->id_kasumum) }}" method="POST">@csrf @method('DELETE') <button class="btn btn-danger" type="submit">Delete</button></form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
</div>

@endsection('content')