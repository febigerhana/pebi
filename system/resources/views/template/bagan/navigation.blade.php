@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp
<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="{{checkRouteActive('pembeli/home')}}"><a href="{{ url('pembeli/home') }}">Home</a></li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Kategori
						  </a>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							  	@foreach($list_kategori as $kategori)
								  	<li class="{{checkRouteActive('pembeli/kategori', $kategori->id)}}">
                                		<a href="{{url('pembeli/kategori', $kategori->id)}}"> {{$kategori->nama}} </a>
                            		</li>
                            	@endforeach
							  </ul>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Keranjang
						  </a>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Pembayaran
						  </a>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Ekspedisi
						  </a>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Promo
						  </a>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Kupon
						  </a>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Cari
						  </a>
						</li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
</nav>