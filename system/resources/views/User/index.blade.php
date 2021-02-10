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
					<h2>
					Data User
					</h2>
					<hr>
					<a href="{{ url('admin/user/create') }}">
					<button class="btn btn-primary"> Tambah Data
					</button></a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Nama </th>
							<th> Username </th>
							<th> Produk </th>
							<th> Email </th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn btn-group">

										<a href="{{ url('admin/user', $user->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

										<a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include ('template.utils.delete', ['url' => url('admin/user', $user->id)])
									</div>	

								</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->produk_count}}</td>
								<td>{{$user->email}}</td>
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