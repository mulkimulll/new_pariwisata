@extends('layouts.admin.index')
@section('head-section')
    
@endsection
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
                    Tambah wisata hiburan
                </h4>
                <form class="forms-sample" method="POST" action="{{ route('create_hiburan') }}" enctype="multipart/form-data" >
                  @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <div>
                            <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" placeholder="Nama Wisata">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subkategori">Subkategori</label>
                        <select class="form-control" id="subkategori" name="subkategori">
                                {{-- <option value="0">Pilih Subkategori</option> --}}                                
                                @foreach ($sk as $item)
                                    <option value="{{ $item->idsub }}">{{ $item->nama }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <div>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jam buka</label>
                                <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                  <input type="text" name="jam_buka" class="form-control">
                                  <div class="input-group-append"> <span class="input-group-text"><i class="mdi mdi-clock"></i></span> </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jam Tutup</label>
                                <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                  <input type="text" name="jam_tutup" class="form-control">
                                  <div class="input-group-append"> <span class="input-group-text"><i class="mdi mdi-clock"></i></span> </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <div>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="harga">
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
                    <button type="reset" class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <h4> Daftar wisata hiburan</h4>
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
                            {{-- <th data-toggle="true"> id </th> --}}
                            <th> Nama </th>
                            <th> Kategori </th>
                            <th> Alamat </th>
                            <th> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($w as $item)
                        <tr>
                            <td> <a href="{{ url('wisata-hiburan-dtl/'.$item->id) }}"><strong style="color: blue">{{$item->nama_wisata}}</strong></a></td>
                            <td>{{$item->kategori}} <br> <small>Sub: {{ $item->subkategori }}</small></td>
                            <td>{{$item->alamat}}</td>
                            <td><a href="{{ url('wisata-hiburan-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                        class="fa fa-pen"></i> Ubah</a>
                                <a href="{{ url('wisata-hiburan-del/'.$item->id) }}" class="btn btn-sm btn-danger"
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
<script type="text/javascript">
    $(document).ready(function () {
       $('#kategori').change(function () {
         var id = $(this).val();

         $('#subkategori').find('option').not(':first').remove();

         $.ajax({
            url:'/kategori-dropdown/'+id,
            type:'get',
            dataType:'json',
            success:function (response) {
                var len = 0;
                if (response.data != null) {
                    len = response.data.length;
                }

                if (len>0) {
                    for (var i = 0; i<len; i++) {
                         var idsub = response.data[i].idsub;
                         var namasub = response.data[i].namasub;

                         var option = "<option value='"+idsub+"'>"+namasub+"</option>"; 

                         $("#subkategori").append(option);
                    }
                }
            }
         })
       });
    });
</script>
@endsection
@section('css')
<link href="{{asset('vendors/dropify-master/dist/css/dropify.css')}}" rel="stylesheet">
@endsection