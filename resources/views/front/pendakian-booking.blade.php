<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

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
        html {
            scroll-behavior: smooth;
        }

        .datepicker-dropdown {
            padding: 10px !important;
        }

        .datepicker>div {
            display: inherit;
        }

        .datepicker td,
        .datepicker th {
            width: 30px;
            height: 30px;
        }

        .datepicker table tr td.active:hover,
        .datepicker table tr td.active:hover:hover,
        .datepicker table tr td.active.disabled:hover,
        .datepicker table tr td.active.disabled:hover:hover,
        .datepicker table tr td.active:active,
        .datepicker table tr td.active:hover:active,
        .datepicker table tr td.active.disabled:active,
        .datepicker table tr td.active.disabled:hover:active,
        .datepicker table tr td.active.active,
        .datepicker table tr td.active:hover.active,
        .datepicker table tr td.active.disabled.active,
        .datepicker table tr td.active.disabled:hover.active,
        .datepicker table tr td.active.disabled,
        .datepicker table tr td.active:hover.disabled,
        .datepicker table tr td.active.disabled.disabled,
        .datepicker table tr td.active.disabled:hover.disabled,
        .datepicker table tr td.active[disabled],
        .datepicker table tr td.active:hover[disabled],
        .datepicker table tr td.active.disabled[disabled],
        .datepicker table tr td.active.disabled:hover[disabled],
        .datepicker table tr td.selected,
        .datepicker table tr td.selected:hover,
        .datepicker table tr td.selected.disabled,
        .datepicker table tr td.selected.disabled:hover {
            background-color: #0442ba !important;
            color: #ffffff !important;
            background-image: none !important;
            text-shadow: none !important;
        }

        .datepicker table tr td.today,
        .datepicker table tr td.today:hover,
        .datepicker table tr td.today.disabled,
        .datepicker table tr td.today.disabled:hover {
            background-color: #0442ba !important;
            color: #ffffff !important;
            background-image: none !important;
        }

        .datepicker-inline {
            border: 2px solid #d3dee6;
            width: 240px;
        }

        .datepicker .datepicker-switch:hover,
        .datepicker .next:hover,
        .datepicker .prev:hover,
        .datepicker tfoot tr th:hover,
        .datepicker table tr td.day.focused,
        .datepicker table tr td.day:hover {
            background: #e3eaef;
        }

    </style>
</head>

<body>
    <!-- ================ header section start ================= -->
    <header class="header_area">

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="{{url('/')}}"><img
                            src="{{asset('front/assets/pariwisata/logo.png')}}" alt="" style="width: 70%;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{url('/bogor-kuliner')}}">Kuliner</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Belanja</a></li>
                                    <li class="nav-item dropright"><a
                                            class="nav-link dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="#">Hiburan</a>

                                        <div class="dropdown-menu" style="background: #D04026;">
                                            <a class="dropdown-item" href="#" style="color: #fff2d0;">Bioskop</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" style="color: #fff2d0;">Arena Bermain</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" style="color: #fff2d0;">Zoo</a>
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
                                            <a class="dropdown-item" href="#" style="color: #fff2d0;">Hutan</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" style="color: #fff2d0;">Pantai</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" style="color: #fff2d0;">Lembah</a>
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
        <section class="jelajah-banner-area" id="home">
            <div class="container h-100">
                <div class="jelajah-banner">
                    <div class="text-center">
                        <h4>Wisata jelajah</h4>
                        <h1>{{ $r->nama_wisata}}</h1> <br>
                        <p>
                          @if(Session::has('message'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">                            
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>{{ session('message') }}</strong>
                          </div>    
                          @endif </p>
                        {{-- <a class="button home-banner-btn" href="#fasilitas">Fasilitas</a> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ end banner area ================= -->
        <!-- ================ start banner form ================= -->
        <form method="post" action="{{ route('boking-jelajah') }}" class="form-search form-search-position">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 gutters-19" hidden>
                        <div class="form-group">
                            <select class="form-control" name="id_partner">
                                <option value="{{ $r->id_partner }}">{{ $r->id_partner }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 gutters-19" hidden>
                        <div class="form-group">
                            <select class="form-control" name="id_wisata">
                                <option value="{{ $r->id }}">{{ $r->id }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 gutters-19">
                        <div class="form-group">
                            <select class="form-control" name="nama_wisata">
                                <option value="{{ $r->nama_wisata }}">{{ $r->nama_wisata }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 gutters-19">
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="tgl_booking" class="form-control datepicker"
                                            placeholder="Tgl. pendakian" id="datepicker-autoclose">
                                        <div class="input-group-append"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm gutters-19">
                                <div class="form-group">
                                    <input type="number" name="kuota" class="form-control" placeholder="kuota">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-right gutters-19">
                        <div class="form-group">
                            <button class="button button-form" type="submit">Daftar booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- ================ end banner form ================= -->

        <!-- ================ special section start ================= -->
        <section class="section-padding bg-porcelain">
            <div class="container">
                <div class="section-intro text-center pb-80px">
                    <div class="section-intro__style">
                        <img src="img/home/bed-icon.png" alt="">
                    </div>
                    <h2>Special Facilities</h2>
                </div>
                <div class="special-img mb-30px">
                    <img class="img-fluid" src="img/home/special.png" alt="">
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-special">
                            <div class="media align-items-center mb-1">
                                <span class="card-special__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h4 class="card-special__title">Conference Room</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it
                                    answer remain</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-special">
                            <div class="media align-items-center mb-1">
                                <span class="card-special__icon"><i class="ti-bell"></i></span>
                                <div class="media-body">
                                    <h4 class="card-special__title">Swimming Pool</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it
                                    answer remain</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-special">
                            <div class="media align-items-center mb-1">
                                <span class="card-special__icon"><i class="ti-car"></i></span>
                                <div class="media-body">
                                    <h4 class="card-special__title">Sports Culb</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it
                                    answer remain</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ special section end ================= -->

        <!-- ================ carousel section start ================= -->
        <section class="section-margin">
            <div class="container">
                <div class="section-intro text-center pb-20px">
                    <div class="section-intro__style">
                        <img src="img/home/bed-icon.png" alt="">
                    </div>
                    <h2>Our Guest Love Us</h2>
                </div>
                <div class="owl-carousel owl-theme testi-carousel">
                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>Robert Mack</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial2.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>David Alone</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial3.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>Adam Pallin</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>Robert Mack</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial2.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>David Alone</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial3.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>Adam Pallin</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>Robert Mack</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img src="img/home/testimonial2.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum
                                    libero illo repell endus!</p>
                                <div class="testi-carousel__intro">
                                    <h3>David Alone</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ carousel section end ================= -->


        <!-- ================ news section start ================= -->
        <section class="section-margin">
            <div class="container">
                <div class="section-intro text-center pb-80px">
                    <div class="section-intro__style">
                        <img src="img/home/bed-icon.png" alt="">
                    </div>
                    <h2>News & Events</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card card-news">
                            <div class="card-news__img">
                                <img class="card-img" src="img/home/explore1.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-news__title"><a href="#">Hotel companies tipped the scales</a></h4>
                                <ul class="card-news__info">
                                    <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov,
                                            2018</a></li>
                                    <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03
                                            Comments</a></li>
                                </ul>
                                <p>Not thoughts all exercise blessing Indulgence way everything joy alteration
                                    boisterous the attachment party we years to order</p>
                                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card card-news">
                            <div class="card-news__img">
                                <img class="card-img" src="img/home/explore2.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-news__title"><a href="#">Try your hand inaugural industry crossword</a>
                                </h4>
                                <ul class="card-news__info">
                                    <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov,
                                            2018</a></li>
                                    <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03
                                            Comments</a></li>
                                </ul>
                                <p>Not thoughts all exercise blessing Indulgence way everything joy alteration
                                    boisterous the attachment party we years to order</p>
                                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card card-news">
                            <div class="card-news__img">
                                <img class="card-img" src="img/home/explore3.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-news__title"><a href="#">Hoteliers resolve to invest in guests</a></h4>
                                <ul class="card-news__info">
                                    <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov,
                                            2018</a></li>
                                    <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03
                                            Comments</a></li>
                                </ul>
                                <p>Not thoughts all exercise blessing Indulgence way everything joy alteration
                                    boisterous the attachment party we years to order</p>
                                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ news section end ================= -->

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
    <script src="{{asset('admin/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.datepicker').datepicker({
                dateFormat: "yy-mm-dd",
                autoclose: true,
            });

        });
    </script>
</body>

<!-- Mirrored from technext.github.io/seapalace/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 16:57:15 GMT -->

</html>
