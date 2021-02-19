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
            @if(Session::has('messageerror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">                            
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('messageerror') }}</strong>
            </div>    
            @endif 
            <div class="card">
                <h4>
                    Tambah Destinasi Wisata
                </h4>
                <form class="forms-sample" method="POST" action="{{ route('createW') }}" enctype="multipart/form-data" >
                  @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <div>
                            <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" placeholder="Nama Wisata">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                            @foreach ($r as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subkategori">Subkategori</label>
                        <select class="form-control" id="subkategori" name="subkategori">
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
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <div>
                            {{-- <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"> --}}
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <div>
                            <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button type="reset" class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <h4> Destinasi Wisata</h4>
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
                            <td> <a href="{{ url('wisata-dtl/'.$item->id) }}"><strong style="color: blue">{{$item->nama_wisata}}</strong></a></td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td><a href="{{ url('wisata-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                        class="fa fa-pen"></i> Ubah</a>
                                <a href="{{ url('wisata-del/'.$item->id) }}" class="btn btn-sm btn-danger"
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
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
@endsection