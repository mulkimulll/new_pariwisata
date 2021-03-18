@extends('layouts.front.index')
@section('banner')
<section class="home-banner-area" id="home">
    <div class="container h-100">
        <div class="home-banner">
            <div class="text-center">
                <h4>Wisata Pendakian Gunung</h4>
                <a class="button home-banner-btn" href="#">Get Tickets <i class="ti-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('section')
<section class="welcome">
    <section class="welcome">
        @foreach ($pendakian as $item)
        <div class="container">
            <div class="card card-news mb-4">

                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="row no-gutters welcome-images">

                            <div class="col-lg-12">
                                <div class="card">
                                    <img class="" src="{{$item->gambar}}" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="welcome-content">
                            <h4 class="mb-4"><span class="d-block">{{$item->nama_wisata}}</span></h4>
                            <p class="">{!! $item->ket !!}
                            </p>
                            <a class="button button--active home-banner-btn mb-4 card-explore__link" href="{{url('/bogor-pendakian/'.$item->id)}}">Lihat detail</a>
                            <a class="button home-banner-btn mb-4 card-explore__link" href="{{url('/boking-pendakian/'.$item->id)}}">Booking <i class="ti-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</section>
@endsection