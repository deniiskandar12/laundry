@extends('layout.admin')
@section('container')
<div class="row mb-5">
    <div class="col-sm-10 offset-1 ">
        <div class="card bg-dark text-white border-light shadow-lg" style="margin-top:50px">
            <img src="{{ asset('img/pesanan.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title">Data Pesanan</h3>
            </div>
        </div>
    </div>
</div>
<!-- Pencarian Tanggal -->
<div class="row">
    <div class="col-sm-6 offset-6 mb-3">
        <p>Mulai :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Akhir :</p>
        <form action="" class="d-flex gap-5">
            <div class="md-form md-outline input-with-post-icon datepicker">
                <input placeholder="Select date" type="date" id="startdate" class="form-control">
            </div>
            <div class="md-form md-outline input-with-post-icon datepicker">
                <input placeholder="Select date" type="date" id="startdate" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Filter</button>
        </form>
        <!-- <form class="d-flex">
        <input class="form-control me-2" id="startdate" type="search" placeholder="dd-mm-yyyy" aria-label="Search"> 
        <input class="form-control me-2" id="enddate" type="search" placeholder="dd-mm-yyyy" aria-label="Search">
        <button class="btn btn-primary" type="submit">Filter</button>
      </form> -->
    </div>
</div>
<!-- Tabel -->
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>User</td>
                    <td>Jenis</td>
                    <td>Qty</td>
                    <td>Harga</td>
                    <td>Masuk</td>
                    <td>Alamat</td>
                    <td>Status</td>
                    <td>Detail</td>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $index => $order)
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>Deni</td>
                    <td>{{$order->jenis}}</td>
                    <td>{{$order->qty}}Kg</td>
                    <td>Rp. {{$order->harga}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>Jalan Kenanga Barat no 3</td>
                    <td>Proses</td>
                    <td><a href="/admin/detail-pesanan">Lihat</a></td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection