@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Basic form elements</h4>
      <p class="card-description"> Basic form elements </p>
      <form action="{{route('kategori.update', $kategori->id)}}" method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputName1">Jenis Kategori</label>
          <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" value="{{ old('kategori', $kategori->kategori)}}">
            @error('kategori')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
                <div class="form-group">
                  <label for="exampleInputName1">Gambar kategori</label><br>
                  <img src="{{asset('/image/kategori/' . $kategori->cover) }}" width="100" alt="Gambar Kategori">
                  <div class="input-group col-xs-12 d-flex align-items-center">
                    <input type="file" name="cover" class="form-control" placeholder="Upload Gambar kategori" value="{{$kategori->cover}}">
                  </div>
                </div>
        <a href="{{route('kategori.index')}}" class="btn btn-light">Cancel</a>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
</div>
@endsection