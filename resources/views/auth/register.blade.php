<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <!-- Plugins CSS -->
    <link href="{{ asset('admin/css/plugins.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
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
                <div class="col-md-6 col-lg-4 mx-auto mb-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">
                                <h4 class="font-22 text-center">Daftar Akun</h4>
                                <br>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
            
                                        <div>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
            
                                        <div>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
            
                                        <div>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
            
                                        <div>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Masuk! </button>
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
    <!-- Plugins JS start-->
    <script src="{{asset('admin/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin/js/counter-custom.js')}}"></script>
    <script src="{{asset('admin/js/photoswipe.min.js')}}"></script>
    <script src="{{asset('admin/js/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('admin/js/photoswipe.js')}}"></script>
    <!--jquery js -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
</body>

</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
