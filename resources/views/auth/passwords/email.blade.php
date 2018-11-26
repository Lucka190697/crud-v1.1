    @extends('layouts.app')

    @section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="card-header">
                            {{ __('Reset Password') }}
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <label for="email" class="col-md-8 col-form-label text-md">
                                    {{ __('E-Mail Address') }}
                                </label>
                                <input id="email"
                                type="email"
                                class="au-input au-input--full {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif                                  
                                <div class="form-group mt-3">
                                    <button type="submit" class="au-btn au-btn--block au-btn--green m-b-10">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
@endsection
