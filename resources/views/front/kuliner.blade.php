<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/seapalace/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 16:56:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayo Pariwisata Bogor</title>

    <link rel="icon" href="{{asset('front/assets/pariwisata/Logowisata.png')}}" type="image/png">
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
            width: 500px; 
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

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('front/assets/pariwisata/logo.png')}}" alt=""
                            style="width: 70%;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Beranda</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Wisata</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{url('/bogor-kuliner')}}">Kuliner</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/bogor-belanja')}}">Belanja</a></li>
                                    <li class="nav-item dropright"><a
                                            class="nav-link dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="#">Hiburan</a>

                                        <div class="dropdown-menu" style="background: #D04026;">
                                            <a class="dropdown-item" href="#"
                                                style="color: #fff2d0;">Bioskop</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"
                                                style="color: #fff2d0;">Arena Bermain</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"
                                                style="color: #fff2d0;">Zoo</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropright"><a
                                            class="nav-link dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="#">Jelajah</a>

                                        <div class="dropdown-menu" style="background: #D04026;">
                                            <a class="dropdown-item" href="{{ url('/bogor-pendakian') }}"
                                                style="color: #fff2d0;">Pendakian Gunung</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('/bogor-hutan') }}"
                                                style="color: #fff2d0;">Hutan</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"
                                                style="color: #fff2d0;">Pantai</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('/bogor-lembah') }}"
                                                style="color: #fff2d0;">Lembah</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Budaya</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">Kearifan Lokal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Jejak</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Transportasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">Pesawat</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Kereta</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Bus</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Kapal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Taxi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Informasi</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Akomodasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">Hotel</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Event Wisata</a></li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@getbootstrap"><i class="fa fa-sign-in-alt"></i></button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" style="bottom: auto;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="recipient-name"
                                                    placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-primary"><i class="ti-facebook"
                                                aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="ti-google"
                                                aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ================ header section end ================= -->

    <main class="site-main">


        <!-- ================ start banner area ================= -->
        <section class="home-banner-area" id="home">
            <div class="container h-100">
                <div class="home-banner">
                    <div class="text-center">
                        <h4>Kuliner</h4>
                        <a class="button home-banner-btn" href="#">Get Tickets <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ end banner area ================= -->

        <!-- ================ welcome section start ================= -->
        <section class="welcome">
            @foreach ($kuliner as $kuliners)
            <div class="container">
                <div class="card card-news mb-4">

                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <div class="row no-gutters welcome-images">

                                <div class="col-lg-12">
                                    <div class="card">
                                        <img class="" src="{{asset('images/wisata/'.$kuliners->gambar)}}" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="welcome-content">
                                <h4 class="mb-4"><span class="d-block">{{$kuliners->nama_wisata}}</span></h4>
                                <p class="title">{!! $kuliners->ket !!}
                                </p>
                                <a class="button button--active home-banner-btn mb-4" href="#">Lihat Detail </a>
                                {{-- <a class="button button--active home-banner-btn mb-4" href="{{url('bogor-kuliner/'.$kuliners->id)}}">Lihat Detail </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <!-- ================ welcome section end ================= -->
    </main>



    <!-- ================ start footer Area ================= -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
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
                    Copyright &copy;
                    
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

<!-- Mirrored from technext.github.io/seapalace/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 16:57:15 GMT -->

</html>