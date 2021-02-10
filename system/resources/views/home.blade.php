<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Toko Pebi</title>

		<!-- Google font -->
		@include('template.bagan.css')
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		@include('template.bagan.header')
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		@include('template.bagan.navigation')
		<!-- /NAVIGATION -->


		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Produk</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="container">
						<div class="row" style="margin-bottom: 40px;">
							@foreach($list_produk as $produk)
							<div class="col-md-3">
										<div class="product">
											<div class="product-img">
												<img style="width: 100%;" src="{{url("public/$produk->foto")}}" class="img-fluid">
											</div>
											<div class="product-body">
												<p class="product-category"><a href="{{url('pembeli/product', $produk->id)}}">{{ $produk->kategori->nama }}</a></p>
												<h3 class="product-name"><a href="{{url('pembeli/product', $produk->id)}}">{{ $produk->nama }}</a></h3>
												<h4 class="product-price"> {{$produk->harga}}</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Keinginan</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Bandingkan</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Keranjang</button>
											</div>
										</div>
										<!-- /product -->
							</div>
										@endforeach
						</div>
						<nav aria-label="Page navigation example">
							<div class="container">
								<div class="col-md-12" style="text-align: center;">
  									<ul class="pagination justify-content-center">
    									{!! $list_produk->links() !!}
  									</ul>
								</div>
							</div>
						</nav>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
		@include('template.bagan.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		@include('template.bagan.js')

	</body>
</html>
