@extends('layout/admin')

@section('container')
<!-- Main Card -->
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="card bg-dark text-white border-light body-rounded shadow-lg mt-5">
                <img src="{{ asset('img/main.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Dashboard</h3>
                    <p class="card-text">Halo Admin Markonah!, Selamat Datang di Halaman Dashboard</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card Pengumuman -->
<div class="container">
    <div class="row">
        <div class="col-sm-5 offset-1 mt-5">
            <div class="card shadow-lg">
                <img src="{{ asset('img/pesananmain.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Pesanan Hari Ini</b></h5>
                    <p class="card-text">Klik untuk melihat detail pesanan hari ini</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Sutija - Jln Mawae</li>
                    <li class="list-group-item">Joko - Jln Melat</li>
                    <li class="list-group-item">Ani - Ambil di Retail</li>
                </ul>
                <div class="card-body">
                    <a href="/datapesan" class="card-link">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-5 mt-5">
        <div class="card shadow-lg">
                <img src="{{ asset('img/pengumumanmain.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Pengumuman</b></h5>
                    <p class="card-text">Status pengumuman</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">-</li>
                    <li class="list-group-item">Item Pengumuman</li>
                    <li class="list-group-item">Item Pengumuman</li>
                </ul>
                <div class="card-body">
                    <a href="/pengumuman" class="card-link">Selengkapnya</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection