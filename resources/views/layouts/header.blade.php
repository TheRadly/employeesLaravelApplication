<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Навигация') }}">
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
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            @endif
                        </li>
                    @else

                        <div class="nav-item dropdown">

                            <p id="navbarDropdown" v-pre>
                                Здравствуйте, {{Auth::user()->name }}
                            </p>

                            <a class="dropdown-item" href="{{ route('logout') }}"

                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}

                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>

                        <div style="position: absolute; margin-left: 350px; margin-top: 7px;">
                            <a style="color:#929292; font-size: 16px" href="{{ route('welcome') }}">Домой</a>
                        </div>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>