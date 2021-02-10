@extends ('template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Kategori
				<div class="card-body">
					<form action="{{ url('admin/kategori') }}" method="post">
						@csrf

					<div class="form-group">
						<label for="" class="control-label"> Nama </label>
						<input type="text" class="form-control" name="nama">
					</div>
				<button class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection