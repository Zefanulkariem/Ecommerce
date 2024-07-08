@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Kategori</h4>
        <p class="card-description">
            <div class="btn-group">
                <a href="{{route('kategori.create')}}" class="btn btn-primary">Tambahkan Data</a>
            </div>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>User</th>
                <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($kategori as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->kategori}}</td>
                    <td>
                        <form action="{{route('kategori.destroy', $data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-sm btn-warning">
                              <i class="ti-pencil" style="text-align: center"></i>
                            </a>
                            <button href="{{route('kategori.destroy', $data->id)}}" class="btn btn-sm btn-danger" data-confirm-delete="true">
                              <i class="ti-trash" style="text-align: center"></i>
                            </button>
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
@endsection