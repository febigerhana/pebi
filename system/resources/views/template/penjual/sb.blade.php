@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
    
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ url('penjual/beranda') }}"><h4><i class="fa fa-user fa-fw"></i>
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

                    <li class="{{checkRouteActive('penjual/beranda')}}">
                        <a href="{{ url('penjual/beranda') }}"><i class="fa fa-dashboard"></i> Beranda </a>
                    </li>

                     <li class="{{checkRouteActive('penjual/kategori')}}">
                        <a href="{{ url('penjual/kategori') }}"><i class="fa fa-edit"></i> Kategori </a>
                    </li>

                    <li class="{{checkRouteActive('penjual/produk')}}">
                        <a href="{{ url('penjual/produk') }}"><i class="fa fa-edit"></i> Produk </a>
                    </li>
                </ul>

            </div>
</nav>