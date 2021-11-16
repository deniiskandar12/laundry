@extends('layout/main')
@section('content')

<!-- review -->
<div class="card text-white bg-light">
    <h5 class="card-header bg-info">Review</h5>

    @foreach($reviews as $review)
    {{$nilai = $review->nilai}}
    <div class="card-body text-dark my-2 mx-5 rounded" style="background: #E5E5E5">
        <h5 class="card-title">{{$review->nama}}</h5>
        @for ($i = 0; $i < $nilai; $i++) <span class="fa fa-star checked"></span>@endfor
            @for ($i = 0; $i < 5 - $nilai; $i++) <span class="fa fa-star"></span>@endfor
                <p class="card-text">{{$review->tanggapan}}</p>
                <p class="card-text text-success">{{$review->tanggal}}</p>
    </div>
    @endforeach
</div>

@endsection