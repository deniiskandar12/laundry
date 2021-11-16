@extends('layout/user')
@section('content')

<!-- fitur -->

<div class="container">
  <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4">
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
          <form action="{{route('add_order')}}" method="post">
            @csrf
            <div class="modal-body">
              <!-- pesan nama -->
              <!-- <div class="form-floating">
              <textarea class="form-control" placeholder="Nama" id="pesan_nama"></textarea>
              <label for="pesan_nama">Nama</label>
            </div> -->
              <!-- pesan alamat -->
              <hr>
              <div class="form-floating">
                <textarea name="alamat" class="form-control" placeholder="Alamat" id="pesan_alamat"></textarea>
                <label for="pesan_alamat">Alamat</label>
              </div>
              <!-- pesan no.hp -->
              <!-- <hr>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Nomor" id="pesan_nomor"></textarea>
              <label for="pesan_nomor">Nomor Telepon</label>
            </div>
            <hr> -->
              <!-- jenis cucian -->
              <p>Paket Cucian Kamu</p>
              <select class="form-select" aria-label="jenis_cucian_select" name="jenis">
                <option value="Cuci Setrika">Cuci Setrika</option>
                <option value="Cuci Biasa">Cuci Biasa</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-light">Pesan</button>
            </div>
          </form>
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
          <form action="{{route('add_confirmation')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <!-- total harga -->
              <table class="table table-bordered border-info">
                <thead>
                  <tr>
                    <th scope="col">Paket Cucian</th>
                    <th scope="col">Berat (kg)</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="bayar-paket">test</td>
                    <td id="bayar-berat">test</td>
                    <td id="bayar-harga">test</td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <!-- kirim pembayaran -->
              <input type="hidden" name="id" id="bayar-id">
              <p>No Rekening: 6666666 a/n Greg Nwokolo (BSI)</p>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="upload_bukti" name="file">
                <label class="input-group-text" for="upload_bukti">Unggah</label>
              </div>
              <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="review" style="height: 10em"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-light">Kirim</button>
            </div>
          </form>
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
          <form action="{{route('add_review')}}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="row">
                <p selected>Berapa Nilai Kami?</p>
                <div class="col-2">
                  <!-- 5 star range -->
                  <select class="form-select" aria-label="5 star select" name="nilai">
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
                <textarea name="tanggapan" class="form-control" placeholder="Review" id="review" style="height: 10em"></textarea>
                <label for="review">Tulis Review Kamu</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-light">Review</button>
            </div>
          </form>
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
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Paket Cucian</th>
            <th scope="col">Alamat</th>
            <th scope="col">Berat</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach($orders as $index => $order)
          <tr>
            <td id="id" class="d-none">{{$order->orderId}}</td>
            <td>{{$index + 1}}</td>
            <td>{{$order->nama}}</td>
            <td id="jenis">{{$order->jenis}}</td>
            <td>{{$order->alamat}}</td>
            <td id="qty">{{$order->qty}} Kg</td>
            <td id="harga">Rp. {{$order->harga}}</td>
            <td>{{$order->status}}</td>
            @if($order->status =='Menunggu Pembayaran')
            <td><button id="btn-bayar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bayarModal">Bayar</button></td>
            @else
            <td><a href="#"></a></td>
            @endif
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

</div>

<script>
  $(document).ready(function() {

    // on modal show edit
    $("#btn-bayar").click(function() {
      var index = $(this).val();
      var row = $(this).closest("tr")
      var id = row.find("#id").text();
      var qty = row.find("#qty").text();
      var jenis = row.find("#jenis").text();
      var harga = row.find("#harga").text();

      $('#bayar-paket').html(jenis);
      $('#bayar-berat').html(qty);
      $('#bayar-harga').html(harga);
      $('#bayar-id').val(id);
    });

  })
</script>

@endsection