@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
          <div class="profile-img-style">
            <div class="row">
              <div class="col-sm-8">
                <div class="media"><img class="img-thumbnail rounded-circle mr-3" src="{{asset('admin/images/user3.png')}}" style="width: 50px; height: 50px;" alt="Generic placeholder image">
                  <div class="media-body align-self-center">
                    <h5 class="mt-0 user-name">Transportasi {{ $r->nama }}</h5>
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
                {{-- <div class="like-comment mt-4 like-comment-sm-mb">
                  <ul class="list-inline">
                    <li class="list-inline-item border-right pr-3">
                      <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a> Like</label>
                      <span class="ml-2 counter">2659</span> </li>
                    <li class="list-inline-item ml-2">
                      <label class="m-0"><a href="#"><i class="fa fa-comment"></i></a> Comment</label>
                      <span class="ml-2 counter">569</span> </li>
                  </ul>
                </div> --}}
              </div>
              <div class="col-xl-6">
                <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                  <thead>
                      <tr>
                          <th> Tarif/Biaya </th>
                          <th> Trayek</th>
                          <th> Keberangkatan </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{{$r->biaya}}</td>
                          <td>{{$r->trayek}}</td>
                          <td>{{$r->jam_keberangkatan}}</td>                                                    
                      </tr>
                  </tbody>
              </table>
                {{-- <p>
                  Tarif : {{ $r->biaya }} <br>
                  Trayek : {{ $r->trayek }} <br>
                  jam keberangkatan : {{ $r->jam_keberangkatan }}
                  Informasi / Keterangan :<br><br> {{ $r->keterangan }}                
                </p> --}}
                <a href="{{ url('/transportasi') }}"><button type="button" class="btn btn-secondary"><i class="ti-back-left mr-2"></i> Kembali</button></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
</div>
@endsection