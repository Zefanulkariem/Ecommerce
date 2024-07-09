@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Basic form elements</h4>
      <p class="card-description"> Basic form elements </p>
      @php $no = 1; @endphp
      <form action="{{route('produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
        @csrf
        @method('PUT')
        
        <div class="form-group">
          <label for="exampleInputName1">Nama Produk</label>
          <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ old('produk', $produk->nama_produk)}}">
            @error('nama_produk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Deskripsi</label>
          <textarea name="deskripsi" cols="117" class="form-control @error('deskripsi') is-invalid @enderror" rows="10"></textarea>
          @error('deskripsi')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Stok Produk</label>
          <input type="number" name="stok_produk" class="form-control @error('stok_produk') is-invalid @enderror" value="{{ old('produk', $produk->stok_produk)}}">
            @error('stok_produk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Harga</label>
          <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('produk', $produk->harga)}}">
            @error('harga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Kategori</label>
          <select class="form-control" name="id_kategori" value="{{ old('produk', $produk->id_kategori)}}">
            @foreach($kategori as $data)
            <option value="{{$data->id}}">{{$data->kategori}}</option> {{--dropdown--}}
            @endforeach
          </select>
          @error('harga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Gambar Produk</label><br>
          <img src="{{asset('/image/produk/' . $produk->cover) }}" width="100">
          <div class="input-group col-xs-12 d-flex align-items-center">
            <input type="file" name="cover" class="form-control file-upload-info" placeholder="Upload Gambar Produk" value="{{$produk->cover}}">
          </div>
        </div>
        <a href="{{route('produk.index')}}" class="btn btn-light">Cancel</a>
        <button class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
</div>
@endsection