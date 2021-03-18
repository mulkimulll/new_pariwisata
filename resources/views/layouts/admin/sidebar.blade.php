<div class="side_bar scroll_auto">
    <div class="user-panel">
        <div class="user_image"> <img src="{{asset('/img/logo-admin.jpg')}}" class="img-circle mCS_img_loaded"
                alt=""> </div>
        <div class="info">
            <p> Pariwisata </p>
            {{-- <a href="#"> <i class="fa fa-circle text-success"></i> Online</a> --}}
        </div>
    </div>
    <ul id="dc_accordion" class="sidebar-menu tree">
        @role('admin')
        <li> <a href="{{ url('/dashboard') }}" class=""> <i class="ti-home"></i> <span>Dashboard</span></a> </li>
        <li class="menu_sub"> <a href="#"> <i class="ti-view-grid"></i> <span>Master kategori </span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
            <ul class="down_menu">
                <li> <a href="{{ url('/kategori') }}" class=""><span>Kategori</span></a> </li>
                <li> <a href="{{ url('/subkategori') }}">Sub kategori</a> </li>
            </ul>
        </li>
        <li class="menu_sub"> <a href="#"> <i class="ti-location-pin"></i> <span>Master wisata </span> 
            <span class="ti ti-angle-down styleicon"></span> </a>
            <ul class="down_menu">
                <li> <a href="{{ url('/wisata-jelajah') }}"><span>Wisata jelajah</span></a> </li>
                <li> <a href="{{ url('/wisata-kuliner') }}">Wisata kuliner</a> </li>
                <li> <a href="{{ url('/wisata-hiburan') }}">Wisata hiburan</a> </li>
                <li> <a href="{{ url('/wisata-belanja') }}">Wisata belanja</a> </li>
            </ul>
        </li>
        <li> <a href="{{ url('/budaya') }}" class=""> <i class="ti-home"></i> <span>Budaya</span></a> </li>
        <li class="menu_sub1"> <a href="#"> <i class="ti-car"></i> <span>Kelola Transportasi </span> <span
            class="ti ti-angle-down styleicon"></span> </a>
            <ul class="down_menu">
                <li> <a href="{{ url('/transportasi') }}" class=""><span>Daftar Transportasi</span></a> </li>
                <li> <a href="{{ url('/kat-transportasi') }}">Kategori Transportasi</a> </li>
            </ul>
        </li>
        <li> <a href="{{ url('/info') }}" class=""> <i class="ti-info"></i> <span>Kelola Informasi</span></a> </li>
        <li> <a href="{{ url('/akomodasi') }}" class=""> <i class="ti-bag"></i> <span>Akomodasi</span></a> </li>
        <li> <a href="{{ url('/event') }}" class=""> <i class="ti-calendar"></i> <span>Event</span></a> </li>
        <li> <a href="{{ url('/admin-boking') }}" class=""> <i class="ti-calendar"></i> <span>Booking</span></a> </li>
        {{-- <li> <a href="{{ url('/akun') }}" class=""> <i class="ti-user"></i> <span>Kelola Akun</span></a> </li> --}}
        @endrole
        @role('partner1')
        <li> <a href="{{ url('/wisata-jelajah') }}" class=""> <i class="ti-home"></i> <span>Wisata jelajah</span></a> </li>
        <li> <a href="{{ url('/admin-boking') }}" class=""> <i class="ti-calendar"></i> <span>Booking</span></a> </li>
        @endrole
        @role('partner2')
        <li> <a href="{{ url('/wisata-kuliner') }}">Wisata kuliner</a> </li>
        @endrole
        @role('partner3')
        <li> <a href="{{ url('/wisata-hiburan') }}">Wisata hiburan</a> </li>
        @endrole
        @role('partner4')
        <li> <a href="{{ url('/wisata-belanja') }}">Wisata belanja</a> </li>
        @endrole

        
    </ul>
</div>
