@extends('layouts.app')

@section('content')

<div class="container mt-5 col-md-12">
  <div class="row justify-content-center">
    <div class="col-md-12 ticky-top">
      <div class="card">
        <div class="card-header">
          <h3>Usuários</h3>
          <a href="{{ route('users.create') }}"
          class="btn btn-primary float-right">
          <i class="fa fa-plus mr-2"></i> Criar Usuario
          </a>
        </div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <div class="panel-body left">
            <table class="table table-hover">
              <thead>
                <tr>
                  @include('users.partials._head')
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $key => $item) : ?>
                  <tr>
                    @include('users.partials._body')
                    @include('users.partials._actionButtons')
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
