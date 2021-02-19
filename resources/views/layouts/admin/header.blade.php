<div class="header-bg">
    <header class="main-header">
      <div class="container_header phone_view border_top_bott">
        <div class="row">
          <div class="col-md-12 d-flex justify-content-between align-items-center">
            <div class="menu-icon"> <a href="javascript:void(0)" class="menu-toggler sidebar-toggler"></a> </div>
            <div class="logo d-flex align-items-center justify-content-center"> <a href="javascript:void(0)"> <strong class="logo_icon"> <a href="{{url('/dashboard')}}" style="color: #4287f5">ADMIN PAGE</a> </strong> <span class="logo-default"> <img src="images/small-logo.png" alt=""> </span> </a> </div>
            <div class="right_detail">
              <div class="row d-flex align-items-center justify-content-end">
                <div class="col-xl-12 col-12 d-flex justify-content-end">
                  <div class="right_bar_top d-flex align-items-center">                     
                    
                    <!-- Dropdown_User -->
                    <div class="dropdown dropdown-user"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <img class="img-circle pro_pic" src="{{asset('default-user-icon-4.jpg')}}" alt=""> </a>
                      <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                          <div class="user-panel">
                            <div class="user_image"> <img src="{{asset('default-user-icon-4.jpg')}}" class="img-circle mCS_img_loaded" alt=""> </div>
                            <div class="info">
                              <p> {{ Auth::user()->name }} </p>
                              {{-- <a href="#"> info@sbtechnosoft.com</a> </div> --}}
                          </div>
                        </li>
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
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                       </a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                      </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>