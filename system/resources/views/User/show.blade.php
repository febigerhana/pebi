@extends ('template.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail User
				<div class="card-body">
					<h2>{{$user -> nama}}</h2>
					<hr>
					<p>
						{{"@".$user-> username}} |
					
				
						Email : {{$user-> email}} |
					
				
						Nomor HP : {{$user->detail->no_hp}}  
					</p>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection