@inject('timeservices', 'App\Services\TimeServices')

@extends ('template.penjual.base')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<div class="jam" style="float: right;">
						<b>Jam : {{$timeservices->showTimeNow()}}</b>
					</div>
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('penjual/produk/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Kategori </label>
							<select name="id_kategori" class="form-control">
							@foreach($list_kategori as $kategori)
								<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
							@endforeach
							</select>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label"> Harga Min </label>
									<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label"> Harga Max </label>
									<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
						<button class="btn btn-primary" style="float: right;"><i class="fa fa-search"></i>Filter</button>
					</form>
				</div>
			</div>
			<hr>
			<div class="card">
				<div class="card-header">
					<h3>
					Data Produk
					</h3>
					<hr>
					<a href="{{ url('penjual/produk/create') }}">
					<button class="btn btn-primary" style="float: right; padding: auto;"> Tambah Data
					</button></a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Kategori </th>
							<th> Nama </th>
							<th> Harga </th>
							<th> Stok </th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn btn-group">

										<a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>
										
									</div>	

								</td>
								<td>{{($produk->kategori->nama)}}</td>
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