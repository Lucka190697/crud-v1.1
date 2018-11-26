@extends('layouts.app')

@section('content')

<div class="container mt-5 col-md-6">
	<div class="card">
		<div class="card-header text-center">
			Cadastrar Usuario
			<a href="{{ route('users') }}" class="btn-outline-success"></a>
		</div>
		<div class="card-body">
			<form class="form-horizontal"
			method="POST"
			enctype="multipart/form-data"
			action="{{ route('users.update', $users->id) }}">

			@method('PUT')
			@include('users.partials._form')
			<button class="btn btn-success btn-lg btn-block" type="submit">Editar</button>
		</form>

	</div>
</div>
</div>

@endsection
