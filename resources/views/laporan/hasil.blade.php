<html>
<head>
  <title>Laporan Kas Umum Desa Sukorejo Per {{ date('d F Y', strtotime($tanggal_awal)) }} - {{ date('d F Y', strtotime($tanggal_akhir)) }}</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <style type="text/css">
    table tr td,
    table tr th{
      font-size: 8pt;
    }

    table.center {
      margin-left: auto; 
      margin-right: auto;
    }
  </style>

  <table class="center">
  <tbody>
  <tr>
  <td rowspan="3"> <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg" width="90" height="80"></td>
  <td><center><h3>PEMERINTAH KABUPATEN MALANG</h3></center></td>
  </tr>
  <tr>
  <td><center><h4>KECAMATAN GONDANGLEGI</h4></center></td>
  </tr>
  <tr>
  <td><center><h5>DESA SUKOREJO</h5></center></td>
  </tr>
  <tr>
  <td colspan="2"><center>Email : pemdessukorejo05@gmail.com Website : http://desa-sukorejo-gondanglegi.malangkab.go.id</center></td>
  </tr>
  <tr>
  <td colspan="2"><center>Jl. Pahlawan No. 05 Sukorejo Gondanglegi Telp 085330548866 Kode Pos 65174</center></td>
  </tr>
  </tbody>
  </table>
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
          <!-- <th>Saldo</th> -->
          <th>Keterangan</th>
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
          <!-- <td>@currency($a->saldo)</td> -->
          <td>{{ $a->keterangan }}</td>
        </tr>
        @endforeach
        <tr>
          <td colspan="6">
            Total
          </td>
          <td colspan="2">
            @foreach($saldo as $dbt) @currency($dbt->total_saldo) @endforeach
          </td>
          <td>
          </td>
        </tr>
      </tbody>
    </table>
</body>
</html>