@extends('layouts.front')

@section('content')
<main class="main">
    

    <div class="page-content mt-3">
        <div class="container">
            <div class="product-details-top mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery">
                            <figure class="product-main-image">
                                <img src="{{asset('/image/produk/' . $produk->cover) }}"alt="product image">
                            </figure><!-- End .product-main-image -->


                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                                <h1 class="product-title">{{$produk->nama_produk}}</h1><!-- End .product-title -->
                            

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                            </div><!-- End .rating-container -->

                            
                            <div class="product-price">
                                @rupiah($produk->harga)
                            </div><!-- End .product-price -->
                            
                            <div class="product-content">
                                <p>{{$produk->deskripsi}}</p>
                            </div><!-- End .product-content -->

                            <div class="details-filter-row details-row-size">
                                <label for="qty">Quantity:</label>
                                <div class="product-details-quantity">
                                    <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" produk-decimals="0" required>
                                </div><!-- End .product-details-quantity -->
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-action">
                                <a href="#" class="btn-product btn-cart"><span>Tambah ke Keranjang</span></a>
                            </div><!-- End .product-details-action -->

                            {{-- <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Kategori:</span>
                                    <a href="#">{{ $kategori->kategori ?? 'Kategori tidak ditemukan' }}</a>
                                </div><!-- End .product-cat -->
                            </div><!-- End .product-details-footer --> --}}


                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main>
@endsection