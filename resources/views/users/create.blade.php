@extends('layouts.app')
@section('content')

<div class="container mt-5 col-md-7">
	<div class="card">
		<div class="card-header text-center">
			Cadastrar usuário
		</div>
		<div class="card-body">
			<form class="form-horizontal"
			method="POST"
			enctype="multipart/form-data"
			action="{{route('users.store')}}">		

			@include('users.partials._form')

			<button class="btn btn-success btn-lg btn-block" type="submit">Criar</button>
		</form>
	</div>
</div>


@endsection
