@inject('timeservices', 'App\Services\TimeServices')

@extends ('template.base')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<div class="jam" style="float: right;">
						<b>Jam : {{$timeservices->showTimeNow()}}</b>
					</div>
					<h3>
					Data Kategori
					</h3>
					<hr>
					<a href="{{ url('admin/kategori/create') }}">
						<button class="btn btn-primary" style="float: right;"> Tambah Kategori
						</button></a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Nama </th>
							<th> Jumlah Barang </th>
						</thead>
						<tbody>
							@foreach($list_kategori as $kategori)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>	
									<div class="btn btn-group">

										<a href="{{ url('admin/kategori', $kategori->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

										<a href="{{ url('admin/kategori', $kategori->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include ('template.utils.delete', ['url' => url('admin/kategori', $kategori->id)])
									</div>	

								</td>
								<td>{{$kategori->nama}}</td>
								<td>{{$kategori->produk_count}}</td>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection