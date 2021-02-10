@extends ('template.penjual.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Edit Data Produk
				</div>
				<div class="card-body">
					<form action="{{ url('penjual/kategori', $kategori->id) }}" method="post">
						@csrf
						@method("PUT")

					<div class="form-group">
						<label for="" class="control-label"> Nama </label>
						<input type="text" class="form-control" value="{{$kategori->nama}}" name="nama">
					</div>
				<button class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection