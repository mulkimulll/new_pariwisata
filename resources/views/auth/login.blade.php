<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Plugins CSS -->
    <link href="{{ asset('admin/css/plugins.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- font icon CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<style>
.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: rgba(0,0,0,0.2);
    width: 248px;
}

.btn-google {
    color: #fff;
    background-color: #E74B37;
    border-color: rgba(0,0,0,0.2);
    width: 248px;
}

.btn-social {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.btn-social:hover {
    color: #eee;
}

.btn-social :first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 40px;
    padding: 7px;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0,0,0,0.2);
}
</style>

<body>
    <!-- Pre Loader -->
    <!-- Content_right -->
    <div class="container_full h-100vh mt-0">
        <div class="container h-100">
            <!-- State start-->
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-4 mx-auto mb-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">
                                <h4 class="font-22 text-center">Silahkan Masuk</h4>
                                <br>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="float-left" for="emailaddress">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group"> <a href="forget-password.html"
                                            class="text-muted float-right"></a>
                                        <label class="float-left" for="password">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Masuk! </button>
                                    </div>

                                    <div class="form-group text-center">
                <hr class="w-full"> 
                <span class="p-2 text-gray-400 mb-1 text-center">OR</span>
                <hr class="w-full">
            </div>

            <div class="form-group text-center">
            <div class="container">
    <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-social btn-facebook">
    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
    </a>
</div>
<br>
<div class="container">
    <a href="{{ url('auth/google') }}" class="btn btn-lg btn-social btn-google">
    <i class="fa fa-google fa-fw"></i> Login with Google
    </a>
</div>
</div>
          {{-- <p class="text-dark mb-0">Not a member?<a href="page-register.html"
                                            class="text-primary ml-1">Sign Up now</a></p> --}}
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
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
