<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TokoKite</title>

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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-8">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Alamat Pemesanan</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Nama Depan">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Nama Belakang">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Alamat">
							</div>
							<div class="row">
								<div class="form-group">
	              					<label for="">Provinsi</label>
	                				<select name="" class="form-control select2" onchange="gantiProvinsi(this.value)">
											<option value="">Pilih Provinsi</option>
		                				@foreach($list_provinsi as $provinsi)
		                					<option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
		                				@endforeach
	                				</select>
	              				</div>
	              				<div class="form-group">
	              					<label for="country">Kabupaten</label>
									<select name="" class="form-control select2" id="kabupaten" onchange="gantiKabupaten(this.value)">
										<option value="">Pilih Provinsi Terlebih Dahulu</option>
										<option value="">  </option>
									</select>
	              				</div>
	              				<div class="form-group">
	              					<label for="country">Kecamatan</label>
	                				<select name="" class="form-control select2" id="kecamatan" onchange="gantiKecamatan(this.value)">
										<option value="">Pilih Kabupaten Terlebih Dahulu</option>
										<option value="">  </option>
									</select>
	              				</div>
	              				<div class="form-group">
	              					<label for="country">Desa</label>
	              					<select name="" class="form-control select2" id="desa">
										<option value="">Pilih Kecamatan Terlebih Dahulu</option>
										<option value="">  </option>
									</select>
	              				</div>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="Kode Pos">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telepon">
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Catatan Lainnya?"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-4 order-details">
						<div class="section-title text-center">
							<h3 class="title">Pesananmu</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUK</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>{{$produk->nama}}</div>
									<div>{{$produk->harga}}</div>
								</div>
							</div>
							<div class="order-col">
								<div>Ongkir</div>
								<div><strong>GRATIS</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{$produk->harga}}</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Transfer langsung ke Bank
								</label>
								<div class="caption">
									<p>Proses pembayaran dilakukan pada Bank terkait</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Pembayaran Cek
								</label>
								<div class="caption">
									<p>Pembayaran dilakukan dengan menggunakan kertas Cek</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									COD
								</label>
								<div class="caption">
									<p>Pembayaran dlakukan dengan cara COD</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Pesan</a>
					</div>
					<!-- /Order Details -->
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


@push('script')
<script>
	function gantiProvinsi(id){
		// alert(id); /*untuk melihat id Provinsi*/
		$.get("api/provinsi/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.name}</option>`;
			}
			$("#kabupaten").html(option)
		});
	}
	function gantiKabupaten(id){
		// alert(id); untuk melihat id Provinsi
		$.get("api/kabupaten/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.name}</option>`;
			}
			$("#kecamatan").html(option)
		});
	}
	function gantiKecamatan(id){
		// alert(id); untuk melihat id Provinsi
		$.get("api/kecamatan/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.name}</option>`;
			}
			$("#desa").html(option)
		});
	}
</script>
@endpush