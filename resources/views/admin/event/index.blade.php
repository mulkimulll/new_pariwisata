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
                Tambah Event
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('createE') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <div>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label>Tgl Mulai Event</label>
                    <div>
                        <div class="input-group">
                            <input type="text" name="tgl_mulai" class="form-control datepicker" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                            <div class="input-group-append"> <span class="input-group-text"><i class="mdi mdi-calendar"></i></span> </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tgl Selesai Event</label>
                    <div>
                        <div class="input-group">
                            <input type="text" name="tgl_selesai" class="form-control datepicker" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                            <div class="input-group-append"> <span class="input-group-text"><i class="mdi mdi-calendar"></i></span> </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">isi</label>
                    <div>
                        <textarea id="summernote" name="isi"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-danger mr-2">Batal</button>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar Event</h4>
            {{-- <p class="text-muted m-b-30 font-13"> Include pagination in your FooTable. </p> --}}
            <label class="form-inline mb-3"> Show
                <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                entries </label>
            <table id="example" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                <thead>
                    <tr>
                        <th> id </th>
                        <th> Nama Event </th>
                        <th>Isi</th>
                        <th> Tgl. event </th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->isi}}</td>
                        <td>{{$item->tgl_mulai}} <br> <small>Oleh: {{ $item->create_user }}</small> </td>
                        <td>
                            <a href="{{ url('event-del/'.$item->id) }}" class="btn btn-sm btn-danger"
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
    
<script>
    jQuery(document).ready(function($) {
        $('.datepicker').datepicker({
            dateFormat: "yy-mm-dd",
            autoclose: true,
        });        
        
    });
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $('#summernote').summernote({
      placeholder: 'Isi Keterangan',
      tabsize: 10,
      height: 100
    });
</script>
@endsection