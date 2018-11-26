@extends('layouts.app')

@section('content')

<div class="container col-md-12 mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12 ticky-top">
      <div class="card">
        <div class="card-header">
          <h3>Detalhes</h3>
          <a href="{{ route('products.create') }}"
            class="btn btn-primary float-right">
            Cadastrar outro
            <i class="fa fa-redo ml-3"></i>
          </a>
          <a href="{{ route('users') }}"
            class="btn btn-outline-primary float-right mr-2">
            <i class="fa fa-chevron-left mr-2"></i>
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
                <a class="lightbox" href="<?php echo asset('profiles/'. $user->profile) ?>">
                  <img src="<?php echo asset('profiles/'. $user->profile) ?>"
                  alt="image"
                  width="600"
                  height="auto">
                </a>
                <div class="form-group">
                </div>
              </div>
              <div class="col-sm">
                <ul class="list-group">
                  <li class="list-group-item active">
                    <?php echo $user->name ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.email'): 
                    <?php echo $user->email ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.City'):
                    <?php echo $user->city ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.Postal Code'):
                    <?php echo $user->cep ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.District'):
                    <?php echo $user->district ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.Number'):
                    <?php echo $user->number ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.Complement'):
                    <?php echo $user->complement ?>
                  </li>                
                  <li class="list-group-item">
                    @lang('labels.State'):
                    <?php echo $user->state ?>
                  </li>
                  <li class="list-group-item">
                    @lang('labels.Created-at'):
                    <?php echo $user->created_at ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
