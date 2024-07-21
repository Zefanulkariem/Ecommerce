@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body mt-5">
                    <p>Pesanan Anda telah berhasil dibuat!</p>

                    <h5>Informasi Pengguna:</h5>
                    <table>
                        
                        <tr>
                            <td>Nama:</td>
                        </tr>
                        <tr>
                            <td><h5 style="color: gray">{{ Auth::user()->name }}</h5></td>
                        </tr>
                        <tr>
                            <td>Lokasi:</td>
                        </tr>
                        <tr>
                            <td><h6 style="color: gray">Bandung, Jawa Barat, Indonesia</h6></td>
                        </tr>
                        <tr>
                            <td>Nomor Telephone:</td>
                        </tr>
                        <tr>
                            <td><h6 style="color: gray">08123456789</h6></td>
                        </tr>
                        
                    </table>


                    <h5 class="mt-3">Rincian Pesanan:</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Total</th>  
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($order as $item) --}}
                            <tr>
                                <td>{{--{{ $item->produk->nama_produk }}--}} Fujifilm Instax Mini Evo</td>
                                <td>{{--{{ $item->quantity }}--}}1</td>
                                <td>{{--{{ $item->total }}--}}Rp.3.000.000</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                    <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection