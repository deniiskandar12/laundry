@extends('layout/main')
@section('content')
    <!-- login -->
    <div class="row justify-content-center gap-5">
        <div class="col-auto">
            <a href="/login">
                <button type="button" class="btn btn-info text-light start-50" style="width: 10em">Masuk</button>
            </a>
        </div>
        <!-- register -->
        <div class="col-auto">
            <a href="/register">
                <button type="button" class="btn btn-info text-light" style="width: 10em">Daftar</button>
            </a>
        </div>
    </div>
    <!-- Dokumentasi -->
    <div class="row row-cols-md-3 row-cols-sm-1" style="margin-top: 3em">
        <div class="col-md-8 col-sm-auto">
            <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/sample1.png') }}" class="d-block w-100 h-100" alt="sample">
                    </div>
                    <div class="carousel-item bg-dark">
                        <img src="{{ asset('img/sample2.png') }}" class="d-block w-100 h-100" alt="sample">
                    </div>
                    <div class="carousel-item bg-dark">
                        <img src="{{ asset('img/sample3.png') }}" class="d-block w-100 h-100" alt="sample">
                    </div>
                </div>
            </div>
        </div> 
<!-- info -->
        <div class="col-md-4 col-sm-auto">
            <img src="{{ asset('img/info_dashboard.png') }}" class="d-block w-100 h-100" alt="info">
        </div>
        
    </div>



@endsection
