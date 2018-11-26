@extends('layouts.app')

@section('content')

<div class="container mt-5 col-md-12">
  <div class="row justify-content-center">
    <div class="col-md-12 ticky-top">
      <div class="card">

        <div class="card-header">
          <h3>Detalhes</h3>
          <a href="{{ route('products.create') }}"
          class="btn btn-primary float-right">
          Cadastrar outro
        </a>
        <a href="{{ route('products') }}"
        class="btn btn-outline-primary float-right mr-2">
        Voltar
      </a>
    </div>

    <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      <div class="panel-body">
        <div class="card-header">
          <div class="row">
            <div class="col-sm">

              <a class="lightbox" href="<?php echo asset('thumbnails/'. $products->thumbnail) ?>">
              <img src="<?php echo asset('thumbnails/'. $products->thumbnail) ?>"
              alt="image"
              width="600"
              height="auto"
              class="img-thumbnail">
              </a>
            </div>
            <div class="col-sm">
              <ul class="list-group">
                <li class="list-group-item active">@lang('labels.title'): <?php echo $products->title ?></li>
                <li class="list-group-item">@lang('labels.description'):  <?php echo $products->description ?></li>
                <li class="list-group-item">@lang('Price'): <?php echo $products->price ?></li>
                <li class="list-group-item">@lang('labels.Created at'):<?php echo $products->created_at ?></li>
                <li class="list-group-item">@lang('labels.Updated'):<?php echo $products->updated ?></li>
                <li class="list-group-item">ID [  <?php echo $products->id ?>  ]</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
