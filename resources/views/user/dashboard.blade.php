@extends('layout/user')
@section('content')

<!-- fitur -->

<div class="container">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
      <div class="col">
        <!-- pesan -->
        <div data-bs-toggle="modal" data-bs-target="#pesanModal">
          <div class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg bg-transparent" style="background-image: url( {{ asset('img/bg_pesan.png')}} )">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pesan Sekarang</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <p>Cuci bajumu dengan memesan layanan kami</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- modal pesan -->
      <div class="modal fade" id="pesanModal" tabindex="-1" aria-labelledby="pesanModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- pesan nama -->
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Nama" id="pesan_nama"></textarea>
                    <label for="pesan_nama">Nama</label>
                  </div>
                  <!-- pesan alamat -->
                  <hr>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Alamat" id="pesan_alamat"></textarea>
                    <label for="pesan_alamat">Alamat</label>
                  </div>
                  <!-- pesan no.hp -->
                  <hr>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Nomor" id="pesan_nomor"></textarea>
                    <label for="pesan_nomor">Nomor Telepon</label>
                  </div>
                  <hr>
                  <!-- jenis cucian -->
                  <p>Paket Cucian Kamu</p>
                      <select class="form-select" aria-label="jenis_cucian_select">
                        <option value="1">Cuci Setrika</option>
                        <option value="2">Cuci Biasa</option>
                      </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-light" onclick="alertSuccessPesan()">Pesan</button>
            </div>
          </div>
        </div>
      </div>
      

      <div class="col">
        <div data-bs-toggle="modal" data-bs-target="#bayarModal">
          <div class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg bg-transparent" style="background-image: url( {{ asset('img/bg_checkout.png')}} )">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Bayar Pesananmu</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <p>Pilih cara bayar sesuka kamu, kapanpun dimanapun</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- modal bayar -->
      <div class="modal fade" id="bayarModal" tabindex="-1" aria-labelledby="bayarModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Pembayaran</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- total harga -->
              <table class="table table-bordered border-info">
                <thead>
                  <tr>
                    <th scope="col">Paket Cucian</th>
                    <th scope="col">Berat (kg)</th>
                    <th scope="col">Jumlah @</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Cuci Setrika</td>
                    <td>2</td>
                    <td>2 @ Rp. 5,000</td>
                    <td>Rp. 10,000</td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <!-- kirim pembayaran -->
              <p>Bayar Pakai Gopay ke 0xxxxxx</p>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="upload_bukti">
                <label class="input-group-text" for="upload_bukti" onclick="alertSuccessUpload()">Unggah</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-light" onclick="alertSuccessBayar()">Kirim</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div data-bs-toggle="modal" data-bs-target="#reviewModal">
          <div class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg bg-transparent" style="background-image: url( {{ asset('img/bg_review.png')}} );">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Review Jasa Kami</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <p>Review jasa kami untuk pelayanan yang lebih lagi</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- modal review -->
      <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Form Review</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                  <p selected>Berapa Nilai Kami?</p>
                    <div class="col-2">
                      <!-- 5 star range -->
                      <select class="form-select" aria-label="5 star select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="col-1 ps-0"><span class="fa fa-star checked pt-2"></span></div>
                  </div>
                  <!-- pemisah -->
                  <hr>
                  <!-- review -->
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Review" id="review" style="height: 10em"></textarea>
                    <label for="review">Tulis Review Kamu</label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>                  
                  <button type="submit" class="btn btn-light" onclick="alertSuccessReview()">Review</button>
                </div>
              </div>
            </div>
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
              <th scope="col">Paket Cucian</th>
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
              <td>
              <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#reviewModal">Bayar</a></button>
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
