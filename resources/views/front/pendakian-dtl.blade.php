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
  <!-- ================ welcome section start ================= -->
  <section class="welcome pt-0 section-margin">

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="row no-gutters welcome-images">
            <div class="col-lg-12">
              <div class="card">
                <img class="" src="{{asset($r->gambar)}}" alt="Card image cap">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="welcome-content">
            <h2 class="mb-4"><span class="d-block">{{$r->nama_wisata}}</span></h2>
            <p>{!! $r->ket !!}</p>
          </div>
        </div>
      </div>
    </div>
   
  </section>
  <!-- ================ welcome section end ================= -->
  @endsection