<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <title>Mama Laundry | {{ $title }} </title>
</head>

<body style="background: #E5E5E5;">
  <nav class="navbar navbar-light bg-light">

    <a class="navbar-brand fw-bold" href="/" style="font-size: 2vw;margin-left: 10%">Mama Laundry</a>
    <button class="navbar-toggler" style="margin-right: 10%" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link " href="/admin/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/data-pesanan">Data Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/data-konfirmasi">Data Konfirmasi Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/data-pelanggan">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/data-pengumuman">Data Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/laporan-penjualan">Laporan Penjualan</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">Log out</a>
          </li>
        </ul>
        <!-- Tombol untuk pengaturan user -->
      </div>
    </div>

  </nav>
  <!-- Container -->
  <div class="container">
    @yield('container')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
