@extends('layouts.admin.index')
@section('head-section')
    <h4>Halaman Dashboard</h4>
@endsection
@section('content')
<div class="user-profile">
  <div class="row">
    <div class="col-3 mb-4">
      <div class="card card-shadow">
        <div class="card-body "> <i class="fa fa-map-marker text-primary f30"></i>
          <h6 class="mb-0 mt-3 text-primary"><a href="#">Destinasi Wisata</a> </h6>
          <p class="f12 mb-0">{{ $r->wisata }} Destinasi Baru</p>
        </div>
      </div>
    </div>
    <div class="col-3 mb-4">
      <div class="card card-shadow">
        <div class="card-body "> <i class="fa fa-list-alt text-success f30"></i>
          <h6 class="mb-0 mt-3 text-success"><a href="#">Kategori</a></h6>
          <p class="f12 mb-0">{{ $r->kategori }} Kategori Baru</p>
        </div>
      </div>
    </div>
    <div class="col-3 mb-4">
      <div class="card card-shadow">
        <div class="card-body "> <i class="fa fa-bus text-warning f30"></i>
          <h6 class="mb-0 mt-3 text-warning"><a href="#">Transportasi</a></h6>
          <p class="f12 mb-0">{{ $r->transportasi }} Transportasi Baru</p>
        </div>
      </div>
    </div>
    <div class="col-3 mb-4">
      <div class="card card-shadow">
        <div class="card-body "> <i class="icon-calendar text-secondary f30"></i>
          <h6 class="mb-0 mt-3 text-secondary"><a href="#">Event</a></h6>
          <p class="f12 mb-0">{{ $r->event }} Event Baru</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card hovercard text-center profile-img-style">
        <div class="my-js">
            <img class="img-fluid rounded" src="{{asset('img/background.jpg')}}" itemprop="thumbnail" alt="">
          </div>
        <div class="user-image">
          <div class="avatar"><img alt="" src="{{asset('admin/images/user3.png')}}"></div>
          {{-- <div class="icon-wrapper"><i class="ti ti-pencil "></i></div> --}}
        </div>
        <div class="info">
          <hr>
          <hr>          
          <div class="follow">
            <div class="row">
              <div class="col-12 text-md-center border-center">
                <div class="follow-num counter">{{ Auth::user()->name }}</div>
                <span><i class="fa fa-circle text-success"></i> Sedang online</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection