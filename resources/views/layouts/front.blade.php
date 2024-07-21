<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TechnoStore - Beli barang kesukaan kamu disini</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="front/assets/images/icons/site.html">
    <link rel="mask-icon" href="{{asset('front/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('front/assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('front/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('front/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/skins/skin-demo-4.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/demos/demo-4.css')}}">
</head>

<body>
    <!-- Desktop Menu cuy-->
    <div class="page-wrapper">
        @include('layouts.front.nav')

         <main class="main">
            @yield('content')
         </main><!-- End .main -->

         @include('layouts.front.footer')
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu cuy-->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="{{route('search')}}" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Mau cari apa?..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Tab</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="{{'/'}}">Beranda</a>
                            </li>
                            <li>
                                <a href="{{('shop')}}">Belanja</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Plugins JS File -->
    <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.countdown.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    <script src="{{asset('front/assets/js/demos/demo-4.js')}}"></script>
</body>


</html>