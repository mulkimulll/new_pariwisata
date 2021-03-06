@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-4">
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">                            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('message') }}</strong>
        </div>    
        @endif 
        @if(Session::has('messagehapus'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">                            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('messagehapus') }}</strong>
        </div>    
        @endif 
        <div class="card">
            <h4>
                Tambah Transportasi
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('createT') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="jenis_transportasi">Jenis transportasi</label>
                    <select class="form-control" id="jenis_transportasi" name="jenis_transportasi">
                            @foreach ($t as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama transportasi</label>
                    <div>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <div>
                        <input type="text" class="form-control" name="biaya" id="biaya" placeholder="Rp.">
                    </div>
                </div>
                <div class="form-group">
                    <label for="trayek">Trayek</label>
                    <div>
                        <input type="text" class="form-control" name="trayek" id="trayek" placeholder="Taman Pajajaran – Bantar Kemang – Terminal Merdeka">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jam berangkat</label>
                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                              <input type="text" name="jam_keberangkatan" class="form-control" placeholder="07:00">
                              <div class="input-group-append"> <span class="input-group-text"><i class="mdi mdi-clock"></i></span> </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jam tiba</label>
                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                              <input type="text" name="jam_tiba" class="form-control" placeholder="18:00">
                              <div class="input-group-append"> <span class="input-group-text"><i class="mdi mdi-clock"></i></span> </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <div>
                        <textarea id="summernote" name="keterangan"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div>
                        <input type="file" name="gambar" class="dropify" data-allowed-file-extensions="jpg png" />
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-danger mr-2">Batal</button>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar Transportasi</h4>
            {{-- <p class="text-muted m-b-30 font-13"> Include pagination in your FooTable. </p> --}}
            <label class="form-inline mb-3"> Show
                <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                entries </label>
            <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                <thead>
                    <tr>
                        <th> Nama Transportasi </th>
                        <th> Biaya </th>
                        <th> Trayek</th>
                        {{-- <th> Gambar </th> --}}
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr>
                        <td> <a href="{{ url('trans-dtl/'.$item->id) }}"><strong style="color: blue">{{$item->nama}}</strong></a></td>
                        <td>{{$item->biaya}}</td>
                        <td>{{$item->trayek}}</td>
                        {{-- <td><img src="{{asset('images/transportasi/'.$item->gambar)}}"></td> --}}
                        <td><a href="{{ url('trans-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                    class="fa fa-pen"></i> Ubah</a>
                            <a href="{{ url('trans-del/'.$item->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="active">
                        <td colspan="5">
                            <div class="text-right">
                                <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10">
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('vendors/dropify-master/dist/js/dropify.js')}}"></script>
<!-- form-pickers js -->
<script src="{{asset('admin/js/jquery.form-pickers.init.js')}}"></script>
<!-- plugin js -->
<script src="{{asset('admin/js/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-clockpicker.min.js')}}"></script>
<script src="{{asset('admin/js/daterangepicker.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-datepicker.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $('#summernote').summernote({
      placeholder: 'Isi Keterangan',
      tabsize: 10,
      height: 100
    });
   
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something wrong happended.'
        }
    });

</script>
@endsection
@section('css')
<link href="{{asset('vendors/dropify-master/dist/css/dropify.css')}}" rel="stylesheet">
@endsection