<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayo Pariwisata</title>

    <link rel="icon" href="{{asset('front/img/logo-admin.jpg')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('front/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/magnefic-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendors/nice-select/nice-select.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <style>
        .title {
            width: 200px; 
            white-space: nowrap; 
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <!-- ================ header section start ================= -->
    <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="{{asset('front/img/icon.png')}}" alt="logo-admin" title="" style="height: 60px; width: 60px;" /></a>
                    </div>
                    @if (Route::has('login'))
                    <div class="ml-auto d-none d-md-block d-md-flex">
                        <div class="media header-top-info">
                            <span class="header-top-info__icon"></span>
                            <div class="media-body">
                                @auth
                                {{-- <a class="button home-banner-btn" href="{{ url('/') }}">Book Now</a> --}}
                                @else
                                <a class="button home-banner-btn" href="#"><i class="fas fa-user"></i> Login</a>
                            </div>
                        </div>
                        <div class="media header-top-info">
                            <span class="header-top-info__icon"></span>
                            <div class="media-body">
                                @if (Route::has('register'))
                                <a class="button home-banner-btn" href="{{ route('register') }}">Daftar</a>
                                @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>


        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset " id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav">
                            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Wisata</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/bogor-jelajah') }}">Jelajah</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Kuliner</a>
                                    <li class="nav-item"><a class="nav-link" href="#">Hiburan</a>
                                    <li class="nav-item"><a class="nav-link" href="#">Belanja</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Budaya</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Transportasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Informasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Akomodasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Aktifitas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ================ header section end ================= -->

    <main class="site-main">


        <!-- ================ start banner area ================= -->
        <section class="contact-banner-area" id="contact">
            <div class="container h-100">
                <div class="contact-banner">
                    <div class="text-center">
                        <h1>Wisata Jelajah di Bogor</h1>
                        <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Jelajah</li>
                </ol>
              </nav>
                    </div>
                </div>
        </div>
        </section>
        <!-- ================ end banner area ================= -->

        <!-- ================ Explore section start ================= -->
  <section class="section-margin section-margin--small">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="{{ asset('front/img/wisataa-removebg-preview.png') }}" alt="">
        </div>
        <h2>Pendakian Gunung</h2>
      </div>

      @foreach ($pg as $item)
          
      @endforeach
      <div class="row pb-4">
        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="{{asset('images/wisata/'.$item->gambar)}}" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">{{($r->harga)}}<sub>/ Per Malam</sub></h3>
              <h4 class="card-explore__title"><a href="#">{{($r->nama_wisata)}}</a></h4>
              <p>{{()}} </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
	<!-- ================ Explore section end ================= -->	
    </main>



    <!-- ================ start footer Area ================= -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="#"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    Copyright &copy; 2020<script>
                    

                    </script>
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->



    <script src="{{asset('front/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('front/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/vendors/magnefic-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/vendors/easing.min.js')}}"></script>
    <script src="{{asset('front/vendors/superfish.min.js')}}"></script>
    <script src="{{asset('front/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front/vendors/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('front/vendors/mail-script.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
</body>

</html>