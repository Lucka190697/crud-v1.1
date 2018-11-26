@extends('layouts.app')

@section('content')

<div class="container mt-5 col-md-6">
	<div class="card">
		<div class="card-header text-center">
			Cadastrar Produto
		</div>
		<div class="card-body">
			<form class="form-horizontal"
			method="POST"
			enctype="multipart/form-data"
			action="{{ route('products.update', $products->id) }}">

			@method('PUT')
			@include('products.partials._form')
			<button class="btn btn-success btn-lg btn-block" type="submit">Editar</button>
		</form>
	</div>
</div>
</div>

@endsection
