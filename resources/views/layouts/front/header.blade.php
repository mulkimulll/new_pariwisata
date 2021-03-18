<!-- ================ header section start ================= -->
<header class="header_area">

    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="{{url('/')}}"><img
                        src="{{asset('front/assets/pariwisata/logo.png')}}" alt="" style="width: 70%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                                <li class="nav-item"><a class="nav-link" href="{{url('/bogor-kuliner')}}">Kuliner</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/bogor-belanja')}}">Belanja</a>
                                </li>
                                <li class="nav-item dropright"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        href="#">Hiburan</a>

                                    <div class="dropdown-menu" style="background: #D04026;">
                                        <a class="dropdown-item" href="{{ url('/bogor-bioskop') }}"
                                            style="color: #fff2d0;">Bioskop</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('/bogor-bermain') }}"
                                            style="color: #fff2d0;">Arena Bermain</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('/bogor-zoo') }}"
                                            style="color: #fff2d0;">Zoo</a>
                                    </div>
                                </li>
                                <li class="nav-item dropright"><a class="nav-link dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        href="#">Jelajah</a>

                                    <div class="dropdown-menu" style="background: #D04026;">
                                        <a class="dropdown-item" href="{{ url('/bogor-pendakian') }}"
                                            style="color: #fff2d0;">Pendakian Gunung</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('/bogor-hutan') }}"
                                            style="color: #fff2d0;">Hutan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('/bogor-pantai') }}"
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
                        <li class="nav-item"><a class="nav-link" href="{{url('bogor-event')}}">Event Wisata</a></li>
                        @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                                {{-- <button type="button" class="nav-link" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@getbootstrap"><i class="fa fa-sign-in-alt"> Login</i></button> --}}
                            @endif                                                        
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"> {{ Auth::user()->name }}</i> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>                    
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
                                    <a href="#" class="btn btn-danger"><i class="ti-google" aria-hidden="true"></i></a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
