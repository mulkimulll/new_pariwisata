@extends('layouts.admin.index')
@section('head-section')
<div class="breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Detail Kuliner</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{url('wisata-kuliner')}}">Wisata Kuliner </a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{asset($r->gambar)}}" /></div>
                            @foreach ($g as $item)
                              <div class="tab-pane" id="pic-{{$item->id}}"><img src="{{$item->path}}" /></div>                                
                            @endforeach
                            
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                        src="{{asset($r->gambar)}}" /></a></li>
                            @foreach ($g as $item)
                            <li><a data-target="#pic-{{$item->id}}" data-toggle="tab"><img
                                        src="{{$item->path}}" /></a></li>
                                
                            @endforeach
 
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{ $r->nama_wisata }}</h3>
                        <div class="rating">
                            <span class="review-no">Alamat: {{ $r->alamat }} <br> Tgl.Buat
                                {{ date('d-m-Y', strtotime($r->created_at)) }} </span>
                        </div>
                        <p class="product-description">{!! $r->ket !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="profile-img-style">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="media"><img class="img-thumbnail rounded-circle mr-3" src="{{asset('admin/images/user3.png')}}" style="width: 50px; height: 50px;" alt="Generic placeholder image">
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 user-name">{{ $r->nama_wisata }} <br> <small>{{ $r->alamat }}</small></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 align-self-center">
                    <div class="float-sm-right"><small>Tgl.Buat {{ date('d-m-Y', strtotime($r->created_at)) }}</small></div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-12 col-xl-4">
                    <div class="my-js" id="aniimated-thumbnials-3" itemscope="">
                      <img class="img-fluid rounded" src="{{$r->gambar}}" itemprop="thumbnail" alt="">
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <p>Informasi / Keterangan :<br><br> {!! $r->ket  !!}</p>
                    <a href="{{ url('/wisata-kuliner') }}"><button type="button" class="btn btn-secondary"><i class="ti-back-left mr-2"></i> Kembali</button></a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
    </div>
@endsection --}}