@extends('app')

@section('content')


<div class="container">

<h1>Detalhes do cadastro</h1>

	<div class="jumbotron text-center">
		<h2>{{ $nerd->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $nerd->email }}<br>
			<strong>Level:</strong> {{ $nerd->nerd_level }}
		</p>
	</div>

</div>
@endsection
