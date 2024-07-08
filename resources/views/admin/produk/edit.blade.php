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
          <label for="exampleInputName1">Jenis Kategori</label>
          <input type="text" name="produk" class="form-control @error('produk') is-invalid @enderror" value="{{ old('produk', $produk->nama_produk)}}">
            @error('produk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <a href="{{route('produk.index')}}" class="btn btn-light">Cancel</a>
        <button class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
</div>
@endsection