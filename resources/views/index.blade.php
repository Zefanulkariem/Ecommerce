@extends('layouts.front')

@section('content')
    
<div class="intro-slider-container mb-5">
    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
        data-owl-options='{
            "dots": true,
            "nav": false, 
            "responsive": {
                "1200": {
                    "nav": true,
                    "dots": false
                }
            }
        }'>
        
        <div class="intro-slide" style="background-image: url(front/assets/images/demos/demo-4/slider/slide-3.png);">
            <div class="container intro-content">
                <div class="row justify-content-start">
                    <div class="col-auto ml-5 col-sm-7 col-md-6 col-lg-5">
                        <h3 class="intro-subtitle text-primary">Baru</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title" style="color: #ffff">Apple iPad Pro <br>12.9 Inch, 64GB </h1><!-- End .intro-title -->

                        <div class="intro-price">
                            <sup class="text-third">Mulai:</sup>
                            <span class="text-primary">
                                Rp.21.999.999<sup>.00</sup>
                            </span>
                        </div><!-- End .intro-price -->

                        {{-- <a href="category.html" class="btn btn-primary btn-round">
                            <span>Shop More</span>
                            <i class="icon-long-arrow-right"></i>
                        </a> --}}
                    </div><!-- End .col-md-6 offset-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .intro-content -->
        </div><!-- End .intro-slide -->

        <div class="intro-slide" style="background-image: url(front/assets/images/demos/demo-4/slider/slide-1.png);">
            <div class="container intro-content">
                <div class="row justify-content-end">
                    {{-- sider --}}
                    <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                        <h3 class="intro-subtitle text-third">Gatget Hemat Budget</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">Cashback mulai</h1>
                        <h1 class="intro-title"></Rp1></h1><!-- End .intro-title -->

                        <div class="intro-price">
                            <sup class="intro-old-price"></sup>
                            <span class="text-third">
                                Rp1.500.000<sup>.00 </sup>
                            </span>
                        </div><!-- End .intro-price -->

                        {{-- <a href="category.html" class="btn btn-primary btn-round">
                            <span>Shop More</span>
                            <i class="icon-long-arrow-right"></i>
                        </a> --}}
                    </div><!-- End .col-lg-11 offset-lg-1 -->
                </div><!-- End .row -->
            </div><!-- End .intro-content -->
        </div><!-- End .intro-slide -->

    </div><!-- End .intro-slider owl-carousel owl-simple -->

    <span class="slider-loader"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->

<div class="mb-5"></div><!-- End .mb-5 -->

{{-- rekomendasi --}}
<div class="container for-you">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Rekomendasi untukmu</h2><!-- End .title -->
        </div><!-- End .heading-left -->

       {{-- <div class="heading-right">
            <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
       </div><!-- End .heading-right --> --}}
    </div><!-- End .heading -->

    <div class="products">
        <div class="row justify-content-center">
            @foreach ($produk as $data)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            {{-- <span class="product-label label-circle label-sale">Sale</span> --}}
                            <a href="{{ route('detail_shop', ['id' => $data->id]) }}">
                                <img src="{{asset('/image/produk/' . $data->cover) }}" width="100" alt="Gambar Produk" class="product-image">
                            </a>

                            {{-- <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action --> --}}

                            @guest
                            @else
                            <form action="{{ route('cart.add', $data->id) }}" method="POST">
                                @csrf
                                <div class="product-action">
                                    <input type="hidden" name="qty" value="1" class="quantity-input">
                                    <button class="btn-product btn-cart"><span>Tambah ke keranjang</span></button>
                                    {{-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> --}}
                                </div><!-- End .product-action -->
                            </form>
                            @endguest
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="{{'error'}}">{{$data->kategori->kategori}}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{ route('detail_shop', ['id' => $data->id]) }}">{{$data->nama_produk}}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">@rupiah($data->harga)</span>
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
            @endforeach

        </div><!-- End .row -->
    </div><!-- End .products -->
</div><!-- End .container -->

<div class="mb-4"></div><!-- End .mb-4 -->

<div class="container">
    <hr class="mb-0">
</div><!-- End .container -->


@endsection