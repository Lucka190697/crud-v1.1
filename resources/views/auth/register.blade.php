@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-form">
                        <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/register') }}">
                            {!! csrf_field() !!}

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">Name</label>

                                <div class="col-lg-6">
                                    <input
                                    type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required>
                                    @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

                                <div class="col-lg-6">
                                    <input
                                    type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    >

                                    @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">Password</label>

                                <div class="col-lg-6">
                                    <input
                                    type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password"
                                    required
                                    >
                                    @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">Confirm Password</label>

                                <div class="col-lg-6">
                                    <input
                                    type="password"
                                    class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
                                    name="confirm_password"
                                    required
                                    >
                                    @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 offset-lg-4">
                                    <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
