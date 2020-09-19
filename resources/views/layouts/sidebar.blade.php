<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
     <img src="{{ asset('assets/lambang.png')}}" alt="Italian Trulli" width="80" height="30">
    <div class="sidebar-brand-text mx-3">Akudes</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('dasboard.index')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

   <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Master
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <i class="fas fa-fw fa-cog"></i>
      <span>Data Master</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Master Data :</h6>
        <a class="collapse-item" href="{{ route('akun.index')}}">Master Akun</a>
        <a class="collapse-item" href="{{ route('user.index')}}">Master User</a>
      </div>
    </div>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Anggaran Dana
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Dana Keuangan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Dana Keuangan :</h6>
        <a class="collapse-item" href="{{ route('danadesa')}}">Dana Desa</a>
        <a class="collapse-item" href="{{ route('add')}}">Anggaran Dana Desa</a>
        <a class="collapse-item" href="{{ route('silpa')}}">SiLPA</a>
        <a class="collapse-item" href="{{ route('pad')}}">PAD</a>
        <a class="collapse-item" href="{{ route('dll')}}">Dll</a>
        <a class="collapse-item" href="{{ route('caridata')}}">Cari Data</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kasumum.index')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kas Umum</span></a>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
   Laporan
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsThree" aria-expanded="true" aria-controls="collapsThree">
      <i class="fas fa-fw fa-cog"></i>
      <span>Laporan</span>
    </a>
    <div id="collapsThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Laporan Dana Keuangan :</h6>
        <a class="collapse-item" href="{{ route('laporan')}}">Laporan Kas Umum</a>
        <a class="collapse-item" href="{{ route('laporanakun')}}">Laporan Kas Akun</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
   Tutup Akun
  </div>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('tutupakun')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Tutup Akun</span></a>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>