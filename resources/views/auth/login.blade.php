@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group"><!-- campo login -->
                                <label for="email" >Email Address</label>
                                <input class="au-input au-input--full {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                id="email" 
                                type="email"
                                name="email" 
                                placeholder="Email" 
                                required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}Erro!</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group"><!-- campo password -->
                                <label>Password</label>
                                <input class="au-input au-input--full {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                id="password"
                                type="password"
                                name="password" 
                                placeholder="Password">

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }} Erro!</strong>
                                </span>
                                @endif
                            </div>
                            <div class="login-checkbox"> <!-- checkbox -->
                                <label>
                                    <input type="checkbox" name="remember">Remember Me
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Logar!</button>
                            <a class="au-btn au-btn--block au-btn--blue m-b-20" href="{{ route('password.request') }}">
                                Esqueceu a senha?
                            </a>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
