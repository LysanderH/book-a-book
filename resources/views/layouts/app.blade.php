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

<body class="min-h-screen">
    <header class="flex items-center justify-between flex-wrap bg-black text-white">
        <h1 role="heading" aria-level="1" class="">
            <a class="navbar-brand" href="{{ url('/') }}">
                Book a book
            </a>
        </h1>

        <!-- @todo: If user is logged in -->

        <nav class="flex items-center justify-between flex-wrap">
            <h2 role="heading" aria-level="2" class="sr-only">Navigation principale</h2>

            <!-- If user is admin -->
            <ul class="navbar-nav mr-auto">
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Dashboard') }}</a>
                </li>
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Livres commandés') }}</a>
                </li>
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Liste des livres') }}</a>
                </li>
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Modifier les messages') }}</a>
                </li>
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Les commandes') }}</a>
                </li>
            </ul>

            <!-- If user is student -->
            <ul class="navbar-nav mr-auto">
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Dashboard') }}</a>
                </li>
                <li class="pr-5">
                    <a class="nav-link" href="">{{ __('Mes commandes') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="pr-5">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="pr-5">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="pr-5">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>

        <!-- End if user is logged in -->

    </header>

    <main class="py-4 col-sm">
        @yield('content')
    </main>
    </div>
</body>

</html>
