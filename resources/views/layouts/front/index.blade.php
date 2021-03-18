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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

      <meta name="csrf-token" content="{{ csrf_token() }}">
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
    @include('layouts.front.header')

    <main class="site-main">


        @yield('banner')

        <!-- ================ welcome section start ================= -->
        <section class="welcome">
            @yield('section')
        </section>
        <!-- ================ welcome section end ================= -->
    </main>


    
    @include('layouts.front.footer')



    
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    @yield('script')
</body>

</html>