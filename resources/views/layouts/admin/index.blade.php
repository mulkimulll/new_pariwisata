</html>
<!doctype html>
<html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Pariwisata</title>
<!-- Plugins CSS -->
<link href="{{asset('admin/css/plugins.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
{{-- summernote --}}
<link href="{{asset('/summernote/summernote.min.css')}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
@yield('css')
</head>

<body>
    <!-- Pre Loader -->
    <div id="dvLoading"></div>
    <div class="wrapper"> 
  <!-- header -->
  @include('layouts.admin.header')
  <!-- header_End --> 
  <!-- Content_right -->
  <div class="container_full">
    @include('layouts.admin.sidebar')
    <div class="content_wrapper bg_homebefore inner-wrapper forms-sec">
      <div class="container-fluid">
        <div class="sec-title">
          <div class="row d-flex align-items-center">
            <div class="col-md-12">
              <div class="heading_home">
                @yield('head-section')
              </div>
            </div>
          </div>
        </div>
        <div class="content-bar"> 
          @yield('content')
        </div>
        <!-- End Rightbar --> 
      </div>
    </div>
  </div>
</div>
    <!--jquery js -->
    <script src="{{asset('admin/js/jquery-min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <!--mCustomScrollbar js -->
    <script src="{{asset('admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!--Fontawesome js -->
    <script src="{{asset('admin/js/fontawesome.js')}}"></script>
    <!--Dcjqaccordion js -->
    <script src="{{asset('admin/js/jquery.dcjqaccordion.js')}}"></script>

    <!--Custom Dashboard js -->
    <script src="{{asset('admin/js/custom-dashboard.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap-datepicker.min.js')}}"></script>
    {{-- summernote --}}
    <script src="{{asset('/summernote/summernote.min.js')}}"></script>
    @yield('script')
</body>

</html>