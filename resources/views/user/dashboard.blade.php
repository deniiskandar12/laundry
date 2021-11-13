@extends('layout/user')
@section('content')

<!-- fitur -->

<div class="container">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
      <div class="col">
        <a href="/user/pesan" class="text-decoration-none">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url( {{ asset('img/bg_pesan.png')}} )">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pesan Sekarang</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <p>Cuci bajumu dengan memesan layanan kami</p>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/user/checkout" class="text-decoration-none">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg " style="background-image: url( {{ asset('img/bg_checkout.png')}} )">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Checkout Pesananmu</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <p>Pilih cara bayar sesuka kamu, kapanpun dimanapun</p>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/user/review" class="text-decoration-none">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url( {{ asset('img/bg_review.png')}} );">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Review Jasa Kami</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <p>Review jasa kami untuk pelayanan yang lebih lagi</p>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </div>
    </div>
  

  <!-- ongoing pesanan -->
  <div class="row mt-5">
    <h2 class="display-6 lh-1 fw-bold">Pesananmu</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Cucian</th>
              <th scope="col">Alamat</th>
              <th scope="col">Status</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Vind</td>
              <td>Cuci Setrika</td>
              <td>Jalan Kenagna Barat no 3</td>
              <td>Belum Diambil</td>
              <td><a href="#"></a></td>
            </tr>
            <tr>
              <td>Vind</td>
              <td>Cuci Biasa</td>
              <td>Jalan Kenagna Barat no 3</td>
              <td>Belum Dibayar</td>
              <td><a href="/user/checkout">Checkout</a></td>
            </tr>
            <tr>
              <td>Vind</td>
              <td>Cuci Setrika</td>
              <td>Jalan Kenagna Barat no 3</td>
              <td>Sudah Dibayar</td>
              <td><a href="#"></a></td>
            </tr>
            <tr>
              <td>Vind</td>
              <td>Cuci Biasa</td>
              <td>Jalan Kenagna Barat no 3</td>
              <td>Sudah Diterima</td>
              <td><a href="#"></a></td>
            </tr>
            
          </tbody>
        </table>
      </div>
  </div>

</div>

@endsection