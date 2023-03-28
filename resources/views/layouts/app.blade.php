<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aloe Vera</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-green-800 md:py-6">

            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline hover:bg-green-500 sm:py-4 md:py-6 px-6 py-6 rounded-b-3xl">
                        Home
                    </a>

                    <!-- Link untuk header -->
                    <a class="hidden text-gray-100 text-lg no-underline hover:bg-green-500 py-5 px-4 rounded-b-3xl md:inline" href="/aloe">MyPlant</a>
                    <a class="hidden text-gray-100 text-lg no-underline hover:bg-green-500 py-5 px-4 rounded-b-3xl md:inline" href="/about">About</a>
                </div>

                <nav class=" text-gray-300 text-sm sm:text-base">
                    
                    @guest
                        <a class="hidden text-lg no-underline hover:bg-green-500 py-5 px-4 rounded-b-3xl md:inline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="hidden text-lg no-underline hover:bg-green-500 py-5 px-4 rounded-b-3xl md:inline" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                        @endif
                    @else
                        <span class="font-extrabold hidden text-lg no-underline hover:bg-green-500 py-5 px-4 rounded-b-3xl md:inline">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="hidden text-lg no-underline hover:bg-green-500 py-5 px-4 rounded-b-3xl md:inline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest

                    <button class="mobile-menu-button inline p-4 focus:outline-none focus:bg-green-500 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </nav>
            </div>
        </header>

        <div class="relative min-h-screen md:flex">
            <!-- sidebar -->
            <div class="sidebar bg-teal-800 text-blue-100 w-64 space-y-6 pt-5 absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out md:-translate-x-full">

                <nav class="text-center">
                    @guest
                        <a class="border-t-2 border-white font-extrabold block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="border-b-2 border-white font-extrabold block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                        @endif
                        <a href="/" class="mt-3 block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg">
                            Home
                        </a>
                        <a href="/about" class="border-b-2 border-white block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg">
                            About
                        </a>
                    @else
                        <span class="font-extrabold uppercase block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg">{{ Auth::user()->name }}</span>

                        <a href="/" class="border-t-2 border-white mt-3 block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg">
                            Home
                        </a>
                        <a href="/aloe" class="block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg">
                            List
                        </a>
                        
                        <a href="/about" class="block py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg">
                            About
                        </a>

                        <a href="{{ route('logout') }}"
                           class="border-b-2 border-t-2 border-white block mt-3 py-3 px-4 transition duration-200 hover:bg-blue-300 rounded-r-lg"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>  

            <!-- konten -->
            <div class="w-full">
                @yield('content')
            </div>         
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>

<script>
        const btn = document.querySelector('.mobile-menu-button');
        const sidebar = document.querySelector('.sidebar');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
</script>