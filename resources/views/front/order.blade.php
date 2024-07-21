@extends('layouts.front')

@section('content')
<div class="page-content">
    <div class="checkout">
        <div class="container">
            <div class="checkout-discount">
            </div><!-- End .checkout-discount -->
            <form action="#">
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="checkout-title">Pembayaran Detail</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Nama Lengkap *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Alamat Rumah *</label>
                            <input type="text" class="form-control" placeholder="Nomor Rumah dan Nama Jalan" required>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Kota *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Negara *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">

                                <div class="col-sm-12">
                                    <label>No. Handphone *</label>
                                    <input type="tel" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Orderan Kamu</h3><!-- End .summary-title -->
                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keranjangItem as $ki)
                                    <tr>
                                        <td><a href="{{route('detail_shop', ['id' => $ki->produk])}}">{{ $ki->produk ? $ki->produk->nama_produk : 'Produk Tidak Tersedia' }}</a></td>
                                        <td>@rupiah($ki->produk->harga * $ki->qty)</td>
                                    </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>Shipping:</td>
                                        <td>Free shipping</td>
                                    </tr> --}}
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>@rupiah($keranjangItem->sum(function($item) { return $item->produk->harga * $item->qty; }))</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->


                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text">Proses Checkout</span>
                                <span class="btn-hover-text">Proses Checkout</span>
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->
@endsection