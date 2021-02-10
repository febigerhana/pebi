@extends ('template.penjual.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Produk
				<div class="card-body">
					<h2>{{$kategori -> nama}}</h2>
					<br>
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th> Nama </th>
							<th> Harga </th>
							<th> Stok </th>
						</thead>
						<tbody>
							@foreach($kategori->produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection