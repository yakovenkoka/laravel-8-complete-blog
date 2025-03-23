<!-- filepath: /Users/karinayakovenko/VSCode/Server side/CA2/laravel-8-complete-blog/resources/views/layouts/app.blade.php -->
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
</head>
<body class="bg-custom-bg h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-light-black py-6">
            <div class="container mx-auto flex justify-between items-center px-2">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-white no-underline mr-30">
                        FilmWords
                    </a>
                </div>
                <nav class="space-x-16 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('/') ? 'text-orange-400' : '' }}" href="{{ url('/') }}">Home</a>
                    <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('blog') ? 'text-orange-400' : '' }}" href="{{ url('/blog') }}">Blog</a>
                    <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('movies') ? 'text-orange-400' : '' }}" href="{{ url('/movies') }}">My Movie List</a>
                    <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('about') ? 'text-orange-400' : '' }}" href="{{ url('/about') }}">About Us</a>
                    <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('contact') ? 'text-orange-400' : '' }}" href="{{ url('/contact') }}">Contact Us</a>
                    @guest
                        @if (Route::has('login'))
                            <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('login') ? 'text-orange-400' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                        @if (Route::has('register'))
                            <a class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300 {{ request()->is('register') ? 'text-orange-400' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="no-underline text-lg font-semibold cursor-default ">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline text-lg font-semibold hover:text-orange-400 hover:scale-105 transition-transform duration-300"
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
            @include('layouts.footer', ['latestPosts' => $latestPosts ?? collect()])
        </div>
    </div>
</body>
</html>