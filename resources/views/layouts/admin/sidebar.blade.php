<div class="side_bar scroll_auto">
    <div class="user-panel">
        <div class="user_image"> <img src="{{asset('logo-contoh-sidebar.jpg')}}" class="img-circle mCS_img_loaded"
                alt=""> </div>
        <div class="info">
            <p> Pariwisata </p>
            {{-- <a href="#"> <i class="fa fa-circle text-success"></i> Online</a> --}}
        </div>
    </div>
    <ul id="dc_accordion" class="sidebar-menu tree">
        <li> <a href="{{ url('/dashboard') }}" class=""> <i class="ti-home"></i> <span>Dashboard</span></a> </li>
        <li class="menu_sub"> <a href="#"> <i class="ti-view-grid"></i> <span>Kelola Kategori </span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
            <ul class="down_menu">
                <li> <a href="{{ url('/kategori') }}" class=""><span>Kategori Wisata</span></a> </li>
                <li> <a href="{{ url('/subkategori') }}">Sub Kategori Wisata</a> </li>
            </ul>
        </li>
        <li> <a href="{{ url('/wisata') }}" class=""> <i class="ti-location-pin"></i> <span>Destinasi Wisata</span></a>
        </li>
        <li> <a href="{{ url('/transportasi') }}" class=""> <i class="ti-car"></i> <span>Kelola Transportasi</span></a>
        </li>
        <li> <a href="{{ url('/info') }}" class=""> <i class="ti-info"></i> <span>Kelola Informasi</span></a> </li>
        <li> <a href="{{ url('/akomodasi') }}" class=""> <i class="ti-bag"></i> <span>Akomodasi</span></a> </li>
        {{-- <li> <a href="{{ url('/event') }}" class=""> <i class="ti-calendar"></i> <span>Event</span></a> </li> --}}
    </ul>
</div>
