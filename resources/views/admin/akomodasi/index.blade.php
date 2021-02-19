@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h4>
                Tambah Akomodasi
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('create-akomodasi') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <div>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telp">No. telp</label>
                    <div>
                        <input type="number" class="form-control" name="telp" id="telp" placeholder="telp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bintang_hotel">Bintang/Kelas Hotel</label>
                    <div>
                        <input type="number" class="form-control" name="bintang_hotel" id="bintang_hotel" placeholder="bintang_hotel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <div>
                        <input type="number" class="form-control" name="harga" id="harga" placeholder="harga">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <div>
                        <textarea id="summernote" name="ket"></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label>Gambar</label>
                  <div>
                      <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-danger mr-2">Batal</button>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar Akomodasi</h4>
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
                        <th> Nama/alamat/Telp </th>
                        <th> Bintang Hotel </th>
                        <th> Harga </th>
                        <th> Tgl.Buat </th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr>
                        <td> <a href="{{ url('akomodasi-dtl/'.$item->id) }}"><strong style="color: blue">{{$item->nama}}</strong> <br> <small>{{ $item->alamat }}</small> <br><small>{{ $item->telp }}</small></a></td>
                        <td></i>{{$item->bintang_hotel}}<i class="ti-star"></td>
                        {{-- <td><img src="{{ asset('/images/info/'.$item->gambar) }}" style="height: 50px; width: 50px;" alt=""></td> --}}
                        <td>Rp.{{ $item->harga }}</td>
                        <td>{{$item->created_at}} <br> <small>Oleh: {{ $item->create_user }}</small> </td>
                        <td><a href="{{ url('akomodasi-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                    class="fa fa-pen"></i> Ubah</a>
                            <a href="{{ url('akomodasi-del/'.$item->id) }}" class="btn btn-sm btn-danger"
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
    
    $('#summernote').summernote({
      placeholder: 'Isi Keterangan',
      tabsize: 10,
      height: 100
    });
</script>

@endsection