@extends('layouts.front.index')
@section('banner')
<section class="home-banner-area" id="home">
    <div class="container h-100">
        <div class="home-banner">
            <div class="text-center">
                <h4>Detail event</h4>
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
       
        <div class="col-lg-12">
          <div class="welcome-content">
            <h2 class="mb-4"><span class="d-block">{{$r->nama}}</span></h2>
            <p>{!! $r->isi !!}</p>
          </div>
        </div>
      </div>
    </div>
   
  </section>
  <!-- ================ welcome section end ================= -->
  @endsection