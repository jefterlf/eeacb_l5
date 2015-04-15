@extends('app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

<div class="panel-heading">Cadastrar Nerd</div>

<!-- if there are creation errors, they will show here -->

	<div class="panel-body">
	@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Preencha os campo corretamente.</strong> <br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
<form class="form-horizontal" method="POST" action="{{ url('nerds')}}" accept-charset="UTF-8">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label class="col-md-4 control-label" for="name">Name</label>
		<div class="col-md-6">
		<input class="form-control" name="name" type="text" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="email">Email</label>
		<div class="col-md-6">
		<input class="form-control" name="email" type="email" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="nerd_level">Nerd Level</label>
		<div class="col-md-6">
		<select class="form-control" id="nerd_level" name="nerd_level"><option value="0">Select a Level</option><option value="1">Sees Sunlight</option><option value="2">Foosball Fanatic</option><option value="3">Basement Dweller</option></select>
		</div>
	</div>
		<div class="col-md-6 col-md-offset-4">
<input class="btn btn-primary" type="submit" value="Cadastrar" />
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection