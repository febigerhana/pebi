@extends('template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 mt-5" style="margin-top: 50px; margin-left: 100px;">
			<div class="card card-default">
				<div class="card-header" style="margin-bottom: 40px;">
					<h3>Ganti Password</h3>
				</div>
				<div class="card-body">
					<form action="{{url('admin/setting')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Password Sekarang </label>
							<input type="password" name="sekarang" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label"> Password Baru </label>
							<input type="password" name="baru" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Konfirmasi Password </label>
							<input type="password" name="konfirmasi" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-info"><i class="fa fa-save"></i> Simpan </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection