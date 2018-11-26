<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fa fa-home"></i>
            {{ config('app.name', 'Crud') }}
        </a>
        @if(!Auth::guest())
        <a href="{{ route('products') }}" class="navbar-brand"> 
            <i class="fas fa-apple-alt"></i>
        @lang('labels.Products') </a>
        <a href="{{ route('users') }}" class="navbar-brand">
            <i class="fa fa-users"></i>
        @lang('labels.Users') </a>
        @endif
        <button class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                
                <a class="nav-link" href="{{ route('login') }}">
                @lang('labels.Login')</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                
                <a class="nav-link" href="{{ route('register') }}">
                @lang('labels.Register')</a>
                @endif
            </li>
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" 
                class="nav-link dropdown-toggle" 
                href="#" role="button" 
                data-toggle="dropdown" 
                aria-haspopup="true" 
                aria-expanded="false" 
                v-pre>
                <i class="fas fa-user-tie"></i>
                {{ Auth::user()->name }} 
                <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" 
            aria-labelledby="navbarDropdown">
            <a class="dropdown-item" 
            href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out-alt mr-2"></i>
            @lang('labels.LogOut')
        </a>

        <form id="logout-form" 
        action="{{ route('logout') }}" 
        method="POST" 
        style="display: none;">
        @csrf
        <i class="fa fa-sign-out"></i>
    </form>
</div>
</li>
@endguest
</ul>
</div>
</div>
</nav>