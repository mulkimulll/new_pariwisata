@extends('layouts.admin.index')
@section('head-section')
<div class="breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Detail Wisata</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{url('wisata-jelajah')}}">Wisata Jelajah </a></li>
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
