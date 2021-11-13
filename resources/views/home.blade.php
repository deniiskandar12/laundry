@extends('layout/main')
@section('content')
    
    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="/login">
                <button type="button" class="btn btn-info text-light start-50" style="width: 10em">Masuk</button>
            </a>
        </div>
        <div class="col-auto">
            <a href="/register">
                <button type="button" class="btn btn-info text-light" style="width: 10em">Daftar</button>
            </a>
        </div>
    </div>
    <div class="row" style="margin-top: 3em">
        <div class="col-8">
            <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-dark" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/sample1.png') }}" class="d-block w-100 h-100" alt="sample">
                            <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                                <p>Ukuran 4x3 Landscape</p>
                            </div>
                    </div>
                    <div class="carousel-item bg-dark">
                        <img src="{{ asset('img/sample2.png') }}" class="d-block w-100 h-100" alt="sample">
                            <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                                <p>Ukuran 4x3 Landscape</p>
                            </div>
                    </div>
                    <div class="carousel-item bg-dark">
                        <img src="{{ asset('img/sample3.png')  }}" class="d-block w-100 h-100" alt="sample">
                            <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                                <p>Ukuran 4x3 Landscape</p>
                            </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-4">
            <div class="row row-cols-1 g-4">
                <div class="col">
                    <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/Offer1.png') }}" class="d-block w-100 h-100" alt="sample">
                                    <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                                        <p>Ukuran 4x3 Landscape</p>
                                    </div>
                            </div>
                            <div class="carousel-item bg-dark">
                                <img src="{{ asset('img/Offer2.png') }}" class="d-block w-100 h-100" alt="sample">
                                    <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                                        <p>Ukuran 4x3 Landscape</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-lg">
                        <div class="card-header bg-info">
                            <p class="card-title">Lokasi : Jalan Veteran no.8, Malang</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-lg">
                        <div class="card-header bg-info">
                            <p >Temukan kami di</p>
                        </div>
                        <div class="card-body bg-white">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Facebook Mama_Laundry</li>
                                <li class="list-group-item">Whatsapp +62xx-xxxx-xxxx</li>
                                <li class="list-group-item">Instagram @mama_laundry</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>



@endsection