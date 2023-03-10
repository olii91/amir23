<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                <!-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') -->
                @if(\Auth::user())
                <li class="nav-header">MENU</li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('pengaduan.create')}}">
                        <i class="far fa-fw fa-user"></i>
                        <p> Buat Pengaduan </P>
                    </a>
                    </li> 
                    <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="far fa-fw fa-user"></i>
                        <p> Halaman Tanggapan </P>
                    </a>
                </li>       

                @if(\Auth::user()->level=='admin' or \Auth::user()->level=='petugas')
                <li class="nav-header">MENU PETUGAS</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pengaduan.index')}}">
                        <i class="far fa-fw fa-user"></i>
                        <p> Pengaduan </P>
                    </a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="far fa-fw fa-user"></i>
                        <p> Halaman Tanggapan </P>
                    </a>
                </li>       

                @if(\Auth::user()->level=='admin')
                <li class="nav-header">MENU ADMIN</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">
                        <i class="far fa-fw fa-user"></i>
                        <p> User </P>
                </a>
                </li> 

                @endif
                @endif
                @endif

            </ul>
        </nav>
    </div>

</aside>
