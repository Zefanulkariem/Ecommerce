@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Produk</h4>
        <p class="card-description">
            <div class="btn-group">
                <a href="{{route('produk.create')}}" class="btn btn-primary">Tambahkan Data</a>
            </div>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>User</th>
                <th>Nama Produk</th>
                <th>Stok Produk</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Gambar Produk</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($produk as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nama_produk}}</td>
                    <td>{{$data->stok_produk}}</td>
                    <td>@rupiah($data->harga)</td>
                    <td>{{$data->kategori->kategori}}</td>
                    <td style="text-align: center;"> <img src="{{asset('/image/produk/' . $data->cover) }}" width="100"> </td>
                    <td>
                        <form action="{{route('produk.destroy', $data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('produk.edit', $data->id)}}" class="btn btn-sm btn-warning">
                              <i class="ti-pencil" style="text-align: center"></i>
                            </a>
                            <a href="{{route('produk.destroy', $data->id)}}" class="btn btn-sm btn-danger" data-confirm-delete="true">
                              <i class="ti-trash" style="text-align: center"></i>
                            </a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

