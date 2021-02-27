@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h4>
                Tambah Budaya
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="nama">Nama budaya</label>
                    <div>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="idsub">Subkategori</label>
                    <select class="form-control" id="subkategori" name="idsub">
                            {{-- <option value="0">Pilih Subkategori</option> --}}                                
                            @foreach ($sk as $item)
                                <option value="{{ $item->idsub }}">{{ $item->nama }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <div>
                        <textarea id="summernote" name="deskripsi"></textarea>
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
            <h4 class="m-t-0 header-title">Daftar Budaya</h4>
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
                        <th> id </th>
                        <th> Nama Budaya </th>
                        {{-- <th> Gambar </th> --}}
                        <th> Tgl.Buat </th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>                        
                        <td>{{$item->created_at}}</td>
                        <td><a href="{{ url('budaya-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                    class="fa fa-pen"></i> Ubah</a>
                            <a href="{{ url('budaya-del/'.$item->id) }}" class="btn btn-sm btn-danger"
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
<script>
    jQuery(document).ready(function ($) {
        $('#demo-foo-pagination').DataTable();
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
<script>
    $('#summernote').summernote({
      placeholder: 'Isi Keterangan',
      tabsize: 10,
      height: 100
    });
  </script>
@endsection
@section('css')
<link href="{{asset('vendors/dropify-master/dist/css/dropify.css')}}" rel="stylesheet">
@endsection