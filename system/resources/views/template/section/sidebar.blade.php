@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
    
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ url('admin/beranda') }}"><h4><i class="fa fa-user fa-fw"></i>
                            @if(Auth::check())
                            {{request()->user()->nama}}
                            <br> <h3>Penjual</h3>
                            @elseif(Auth::guard('pembeli')->check())
                            {{Auth::guard('pembeli')->user()->nama}}
                            <br> <h3>Pembeli</h3>
                            @elseif(Auth::guard('admin')->check())
                            {{Auth::guard('admin')->user()->nama}}
                            <br> <h3>Master Admin</h3>
                            @else
                            Silahkan Login
                            @endif
                        </h4></a>
                    </li>
                    <br>

                    <li class="{{checkRouteActive('admin/beranda')}}">
                        <a href="{{ url('admin/beranda') }}"><i class="fa fa-dashboard"></i> Beranda </a>
                    </li>

                     <li class="{{checkRouteActive('admin/kategori')}}">
                        <a href="{{ url('admin/kategori') }}"><i class="fa fa-edit"></i> Kategori </a>
                    </li>

                    <li class="{{checkRouteActive('admin/produk')}}">
                        <a href="{{ url('admin/produk') }}"><i class="fa fa-edit"></i> Produk </a>
                    </li>

                    <li class="{{checkRouteActive('admin/user')}}">
                        <a href="{{ url('admin/user') }}"><i class="fa fa-edit"></i> User </a>
                    </li>

                    <li class="{{checkRouteActive('#')}}">
                        <a href="#"><i class="fa fa-sitemap"></i> Master Data <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{checkRouteActive('#')}}">
                                <a href="#"> Pelanggan </a>
                            </li>
                            <li class="{{checkRouteActive('#')}}">
                                <a href="#"> Supplier </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
</nav>