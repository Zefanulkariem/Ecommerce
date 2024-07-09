@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Basic form elements</h4>
      <p class="card-description"> Basic form elements </p>
      @php $no = 1; @endphp
      <form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Jenis Kategori</label>
          <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror">
            @error('kategori')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Gambar Produk</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12 d-flex align-items-center">
            <input type="file" name="cover" class="form-control file-upload-info" placeholder="Upload Gambar Prod">
          </div>
        </div>
        <a href="{{route('kategori.index')}}" class="btn btn-light">Cancel</a>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
</div>
@endsection