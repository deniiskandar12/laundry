@extends('layout.admin')
@section('container')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="card bg-dark text-white border-light body-rounded shadow-lg mt-5">
                <img src="{{ asset('img/user.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Data User</h3>
                    <p class="card-text">Halo Admin Markonah!, Selamat Datang di Halaman Dashboard</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection