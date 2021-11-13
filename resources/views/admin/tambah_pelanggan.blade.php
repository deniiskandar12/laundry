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
<!-- Form Tambah Pelanggan -->
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-4 text-center">
        <form>
            <div class="mb-4">
                <h2 class="my-5 h2">Tambah Data Pelanggan</h2>
                <img class="rounded-circle z-depth-2" alt="50x50" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                data-holder-rendered="true">
            </div>
            <a class="btn btn-outline-dark btn-sm mb-5" href="#" role="button">Upload</a>
            <input type="text" class="form-control mb-4"placeholder="Nama Lengkap...">
            <input type="text" class="form-control mb-4"placeholder="Telp...">
            <input type="password" class="form-control mb-4"placeholder="Password...">
            <textarea class="form-control mb-4" rows="4" placeholder="Alamat..."></textarea>
            <button type="submit" class="btn btn-primary mb-5" action="">Tambah Pelanggan</button>
            <button type="reset" class="btn btn-secondary mb-5">Batal</button>
        </form>
    </div>
</div>
@endsection