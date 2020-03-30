<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<aside class="mdc-drawer mdc-drawer--dismissible">
    <div class="mdc-drawer__content">
        <div class="mdc-list">
            <a class="mdc-list-item mdc-list-item--activated" href="{{ url('/') }}" aria-current="page">
                <i class="material-icons mdc-list-item__graphic" aria-hidden="true">description</i>
                <span class="mdc-list-item__text">{{ config('app.name', 'Laravel') }}</span>
            </a>

            @guest
            <a class="mdc-list-item" href="{{ route('login') }}">
                <i class="material-icons mdc-list-item__graphic" aria-hidden="true">portrait</i>
                <span class="mdc-list-item__text">{{ __('Login') }}</span>
            </a>
                @if (Route::has('register'))
                    <a class="mdc-list-item" href="{{ route('register') }}">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">how_to_reg</i>
                        <span class="mdc-list-item__text">{{ __('Register') }}</span>
                    </a>
                @endif

            @else
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">account_box</i>
                    <span class="mdc-list-item__text">{{ Auth::user()->name }}</span>
                </a>
                <a class="mdc-list-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">logout</i>
                    <span class="mdc-list-item__text">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest


        </div>
    </div>
</aside>

<div class="mdc-drawer-app-content">
    <header class="mdc-top-app-bar app-bar" id="app-bar">
        <div class="mdc-top-app-bar__row">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button">menu</button>
                <span class="mdc-top-app-bar__title">Telegram Questionnaire</span>
            </section>
        </div>
    </header>

    <main class="main-content" id="main-content">
        <div class="mdc-top-app-bar--fixed-adjust">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
