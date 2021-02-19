<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <!-- Plugins CSS -->
    <link href="{{asset('/admin/css/plugins.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/admin/css/style.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <!-- Pre Loader -->
    <!-- Content_right -->
    <div class="container_full h-100vh mt-0">
        <div class="container h-100">
            <!-- State start-->
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-5 mx-auto">
                    <!-- Middle Box -->
                    <div class="middle-box my-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div>
                                    <h4 class="font-22 mt-0">Buat Akun Baru</h4>
                                    {{-- <p class="text-muted mb-4">Create a new account</p> --}}
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullname">Nama</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Konfirmasi Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    {{-- <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                          </div>
                        </div> --}}
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Daftar </button>
                                    </div>
                                    {{-- <p class="text-dark mb-0">Already have account ?<a href="page-login.html" class="text-primary ml-1">Sign in</a></p> --}}
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>


    <!--jquery js -->
    <script src="{{asset('js/jquery-min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!--mCustomScrollbar js -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!--Fontawesome js -->
    <script src="{{asset('js/fontawesome.js')}}"></script>
    <!--Dcjqaccordion js -->
    <script src="{{asset('js/jquery.dcjqaccordion.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counter-custom.js')}}"></script>
    <script src="{{asset('js/photoswipe.min.js')}}"></script>
    <script src="{{asset('js/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('js/photoswipe.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
