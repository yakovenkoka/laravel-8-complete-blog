<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FilmWords') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-link {
            font-weight: bold;
        }
        .nav-link:hover {
            transform: scale(1.1);
            color: #ff8800;
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-custom-bg h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-light-black py-6">
            <div class="container mx-auto flex justify-between items-center px-2">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-white no-underline">
                        FilmWords
                    </a>
                </div>
                <nav class="space-x-12 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline text-lg nav-link" href="/">Home</a>
                    <a class="no-underline text-lg nav-link" href="/blog">Blog</a>
                    @guest
                        <a class="no-underline text-lg nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline text-lg nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline text-lg nav-link"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>