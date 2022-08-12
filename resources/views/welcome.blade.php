<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        @role('user')
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @endrole
                        @role('brgy')
                            <a href="{{ url('/brgy') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Brgy Dashboard</a>
                        @endrole
                        @role('municipal')
                            <a href="{{ url('/municipal') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Municipal Dashboard</a>
                        @endrole
                        @role('admin')
                            <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Provincial Dashboard</a>
                        @endrole
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>{{ Auth::user()->name }}</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                    class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
        
                                        <x-dropdown-link
                                            class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            :href="route('logout')" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/13/Seal_of_the_Province_of_Pangasinan.svg" alt="logo" width="150" height="150">
                    
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">BLOTTER MANAGEMENT</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    A system module that allows barangay officials to manage blotter records.
                                    Lists all the blotter record from the system,
                                    Search blotter records,
                                    Record Blotter Report,
                                    Print letter of brgy blotter, police blotter, and certificate to file action.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      E-blottering System
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #ff9f03 0%, #daae51 100%);
      }
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <!--Icon from: http://www.potlabicons.com/ -->
                <x-application-logo class="inline h-10 w-auto fill-current text-gray-600" />
                E-BLOTTERING
            </a>
            </div>
            <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                
                @if (Route::has('login'))
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        
                        <li class="mr-3">
                            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">HOME</a>
                        </li>
                        @auth
                            @role('user')
                            <li class="mr-3">
                                <a href="{{ url('/dashboard') }}" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Dashboard</a>
                            </li>
                            @endrole
                            @role('brgy')
                            <li class="mr-3">
                                <a href="{{ url('/brgy') }}" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Brgy Dashboard</a>
                            </li>
                            @endrole
                            @role('municipal')
                            <li class="mr-3">
                                <a href="{{ url('/municipal') }}" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Municipal Dashboard</a>
                            </li>
                            @endrole
                            @role('admin')
                            <li class="mr-3">
                                <a href="{{ url('/admin') }}" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Provincial Dashboard</a>
                            </li>
                            @endrole
                        @else
                            <li class="mr-3">
                                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('login') }}">Login</a>
                            </li>
                        @endauth
                    </ul>
                    @auth
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open"
                                    id="navAction"
                                    class="flex flex-row items-center w-full mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                    <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
            
                                            <x-dropdown-link
                                                class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                                :href="route('logout')" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @else
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                id="navAction"
                                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                            >
                                Sign Up
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose w-full">The E-blotter System</p>
            <h1 class="my-4 text-5xl font-bold leading-tight">
                is an automated process of managing a barangay blotter that is faster
            </h1>
            <p class="leading-normal text-2xl mb-8">
                and more secure compared to the usual process.
            </p>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="logo/hero.png" />
            </div>
        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
                ></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
                ></path>
            </g>
            </g>
        </svg>
    </div>
    <section class="bg-white py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            E-Blottering
            </h2>
            <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    A system module that allows
                </h3>
                <p class="text-gray-600 mb-8">
                    barangay officials to manage blotter records, It increases efficiency in profiling, Lists all the blotter record from the system.
                    <br />
                    <br />

                    Blotter now:

                    <a class="text-pink-500 underline" href="{{ url('/dashboard') }}">Click here</a>
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full sm:h-64 mx-auto" viewBox="0 0 1177 598.5" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M647.79187,389.5H126.24841c-11.15381,0-20.22852-9.07422-20.22852-20.22852v-62.77148H668.02038v62.77148c0,11.1543-9.07422,20.22852-20.22852,20.22852Z" fill="#e6e6e6"/>
                    <rect x="321.52002" y="378.99998" width="133" height="95" fill="#e6e6e6"/>
                    <rect x="313.52002" y="461.99998" width="149" height="12" fill="#e6e6e6"/>
                    <path d="M667.52038,333H106.01989V13.88184c0-7.6543,6.22754-13.88184,13.88184-13.88184H653.63855c7.6543,0,13.88184,6.22754,13.88184,13.88184V333Z" fill="#3f3d56"/>
                    <circle cx="388.02002" cy="7.49998" r="4" fill="#fff"/>
                    <rect x="119.02002" y="14.49998" width="535" height="301" fill="#fff"/>
                    <circle cx="591.40585" cy="196.29643" r="45.61417" fill="#6c63ff"/>
                    <path d="M774.04004,474.29687h0c0,.46393-.3761,.84003-.84003,.84003H0v-1.68005H773.20001c.46393,0,.84003,.3761,.84003,.84003Z" fill="#e6e6e6"/>
                    <g>
                        <polygon points="130.9527 189.66266 125.18911 209.83523 148.24347 211.27612 146.80257 187.50131 130.9527 189.66266" fill="#ffb6b6"/>
                        <g>
                            <g>
                                <path id="uuid-a6c07e27-609a-42c1-9803-308006772003-145" d="M226.72978,272.01051c5.47087,1.86773,10.86916,.55886,12.05723-2.92303s-2.28378-7.8175-7.75685-9.68517c-2.17603-.77604-4.50627-1.01969-6.79576-.71053l-23.28024-7.62093-3.34342,11.00096,23.30516,6.34493c1.62315,1.64505,3.61673,2.87736,5.81388,3.59376Z" fill="#ffb6b6"/>
                                <path d="M149.47886,205.36146s-14.43112,17.36131-6.08248,24.54447c8.34864,7.18316,45.63135,33.77469,45.63135,33.77469l14.53455,2.26328,3.71748-14.04969-32.81979-24.31925-24.98112-22.21349Z" fill="#6c63ff"/>
                            </g>
                            <polygon points="187.71593 390.18033 195.73597 419.90167 208.47369 417.54283 205.64309 386.87796 187.71593 390.18033" fill="#ffb6b6"/>
                            <path d="M197.62304,418.0146l-4.71767,.94353-3.77414,12.73772s6.13297,2.35884,6.13297,7.07651,2.35884,8.02004,11.79418,7.54828,10.37888,0,10.37888-3.77414-7.07651-23.58836-7.07651-23.58836c0,0,.47177-8.02004-5.18944-7.54828s-7.54828,6.60474-7.54828,6.60474Z" fill="#2f2e41"/>
                            <polygon points="144.58889 389.71795 145.13615 420.49748 158.065 421.30886 162.7808 390.87683 144.58889 389.71795" fill="#ffb6b6"/>
                            <path d="M147.42567,419.12628l-4.80547-.23272-6.76003,11.43658s5.37471,3.78021,4.22681,8.3561,.33652,8.35296,9.60309,10.19117c9.26657,1.83821,10.06696,2.52537,10.98528-1.13534,.91832-3.66071-1.12435-24.60129-1.12435-24.60129,0,0,2.40901-7.66422-3.19684-8.58411-5.60586-.91989-8.92848,4.56961-8.92848,4.56961Z" fill="#2f2e41"/>
                            <path d="M149.97455,205.71933l-25.47543-1.88707-5.66121,7.07651s-2.8306,47.64849-.94353,52.36617,.47177,31.60841,.47177,31.60841l64.22164-4.48179-14.21431-34.20313,.47177-19.81422-12.73772-24.06013-6.13297-6.60474Z" fill="#6c63ff"/>
                            <path d="M121.19675,284.97623s-10.37888,15.09655-6.60474,23.1166,29.37448,54.58715,29.37448,54.58715l-3.30237,43.40259,22.64483-1.88707,3.77414-46.70496-15.69323-38.0753,2.8306-4.24591,23.58836,28.7778,8.49181,50.00733,22.64483-2.8306-12.26595-73.12392-14.33513-28.18407-61.14764-4.83964Z" fill="#2f2e41"/>
                            <circle cx="118.97934" cy="168.08201" r="8.74638" fill="#2f2e41"/>
                            <circle cx="139.17799" cy="181.45947" r="19.04754" fill="#ffb6b6"/>
                            <path d="M133.13867,202.34164c-2.02444,1.07241-7.72084-2.86479-9.759-8.14048-1.31119-3.39395-4.49899-2.82931-6.53319-7.06192-1.18528-2.46628,2.35419-4.87891,1.7704-7.0113-1.05778-3.86367,.26837-7.32044,.43733-7.74392,1.45852-3.65559,3.60846-3.57055,5.34214-7.82548,1.04377-2.56168,.37417-2.86171,1.25152-4.17219,2.53206-3.78211,9.87878-3.926,15.06037-2.13741,1.79305,.61892,6.11212-2.69757,9.61815-.29498,4.13073,2.83069,6.87881,10.99015,6.24656,12.48531-.38412,.90838-2.52276-.01707-6.97052,.682-4.11789,.64722,1.31702,3.72384-3.31722,4.77263-5.48,1.24019-7.13084,.10843-8.64952,1.84211-1.60538,1.83266-1.9022,5.54206-.43733,7.74392,.72692,1.09266,1.66425,1.47823,1.54682,2.23867-.21438,1.38829-1.44751,.63363-1.85196,2.10648-.47043,1.71313,3.43297,3.95924,3.09363,4.47733-.06837,.1044-.36069,.21744-4.17219-1.25152-1.52192-.58655-2.10873-1.09297-2.27944-.90559-.27636,.30334-1.64483,3.34503-.08993,4.63887,2.41974,2.01346,.74264,2.81305,1.84572,4.38963,1.13801,1.62649-.86577,.48629-2.15234,1.16783Z" fill="#2f2e41"/>
                            <g>
                                <path id="uuid-cdcc4a7b-c7e9-4136-bdd1-e7c84b73eb6c-146" d="M137.59858,312.39553c3.03983,4.91715,8.04097,7.33443,11.16996,5.39935,3.12899-1.93508,3.20059-7.489,.15903-12.40749-1.18803-1.9814-2.83329-3.64948-4.79815-4.86467l-13.14297-20.67149-9.56906,6.37438,13.97257,19.70167c.20907,2.30154,.96641,4.51952,2.20863,6.46826Z" fill="#ffb6b6"/>
                                <path d="M120.25321,211.85231s-22.17306,4.24591-20.28599,15.09655,13.79849,55.06861,13.79849,55.06861l9.78987,10.9788,11.79418-8.49181-9.90711-39.62845-5.18944-33.02371Z" fill="#6c63ff"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <path d="M643.97525,220.91364c-.87195-1.47027-4.6441,.10397-5.3376-1.23036-.69104-1.32952,2.81372-3.35528,4.81606-7.98296,.36112-.83454,2.63659-6.09357,.95207-7.71632-3.19299-3.07591-17.80424,9.61759-22.91751,5.46367-1.1222-.9116-1.90615-2.73146-5.30243-5.68615-1.35114-1.17543-2.16812-1.70614-2.95882-1.50869-1.12194,.28016-1.21082,1.78172-2.41389,4.73412-1.80423,4.42771-2.87133,4.16035-3.92255,7.69294-.78036,2.62241-.6021,4.14705-1.52038,4.44406-1.29945,.42034-2.49552-2.3612-4.14235-2.11215-1.68049,.25419-2.69647,3.49282-3.01738,5.91764-.60223,4.55037,1.06887,7.553,1.99509,10.71029,1.00653,3.43117,1.6039,8.64923-.72054,16.03614l-23.0068,64.82181c5.0792-13.30124,19.78588-49.76349,25.96562-63.31312,1.78399-3.91149,3.75375-7.87895,7.79827-9.44478,3.89393-1.50759,9.24175-.60749,16.05958-2.24997,.79625-.19178,3.00585-.75398,3.28395-2.05362,.22995-1.07445-1.06975-1.67419-.87006-2.68049,.26783-1.34981,2.82368-1.36639,5.96448-2.92368,2.2147-1.09815,3.59446-2.40409,4.78095-3.52717,.35772-.33859,5.67509-5.43398,4.51432-7.39119h-.00006Z" fill="#e6e6e6"/>
                        <path d="M553.45965,255.03855c-.97322,.00372-1.28892,2.30935-2.14392,2.26472-.85194-.04444-.83495-2.34909-2.52849-4.66711-.3054-.41801-2.23002-3.05227-3.51255-2.69367-2.43094,.67963-.41672,11.5134-3.93084,12.82451-.77119,.28775-1.89061,.14744-4.32071,.96184-.96675,.324-1.46296,.57185-1.5942,1.0169-.1862,.63148,.52511,1.10839,1.62704,2.55068,1.65257,2.16305,1.21344,2.60968,2.64394,4.14487,1.06194,1.13966,1.86168,1.49208,1.74248,2.02847-.16862,.75906-1.87892,.54354-2.23185,1.42366-.36011,.89814,.93628,2.33122,2.0338,3.18836,2.05961,1.6085,4.01546,1.65468,5.83233,2.11108,1.97445,.49598,4.70789,1.70838,7.66274,4.98061l25.17678,29.99504c-5.06284-6.33074-18.7154-24.06939-23.58258-31.01197-1.40506-2.00417-2.78397-4.11569-2.3855-6.55259,.38359-2.34616,2.36838-4.71117,3.52941-8.53132,.13562-.44616,.49721-1.69284-.06039-2.20434-.461-.42286-1.13036,.04201-1.56665-.34637-.58521-.52095,.1441-1.78015,.28595-3.77099,.10004-1.40383-.14284-2.45783-.3517-3.36423-.06297-.27325-1.0296-4.35323-2.32511-4.34825v.00009Z" fill="#e6e6e6"/>
                        <path d="M572.87499,259.39686l-.58634-5.23417,.2679-.3968c1.23966-1.83486,1.87151-3.62676,1.87908-5.32768,.00126-.27042-.01138-.54086-.02402-.81632-.05055-1.09181-.11371-2.449,.59394-4.03113,.3968-.88204,1.51137-2.92415,3.18701-2.67142,.45114,.06319,.79234,.27042,1.05138,.51303,.03792-.06064,.07709-.12131,.11879-.18702,.52189-.79612,.93511-1.13729,1.33317-1.46586,.30581-.25274,.62174-.51303,1.11709-1.12973,.21734-.27042,.38668-.50799,.52949-.70765,.43345-.60402,.99956-1.32435,1.99787-1.31171,1.06654,.05055,1.62508,.93259,1.99535,1.51641,.66091,1.04126,.96039,1.7919,1.15879,2.28978,.07205,.18198,.15418,.38668,.19588,.44987,.34373,.50547,3.13774,.03284,4.19035-.13902,2.36435-.39428,4.41025-.73545,5.25314,.75568,.60406,1.06654,.15544,2.4768-1.37364,4.3041-.47641,.56866-.98314,1.00082-1.43302,1.33951,.37278,.22242,.70636,.56359,.84163,1.09941h0c.31845,1.26872-.77211,2.53999-3.24008,3.78347-.61288,.31085-1.43806,.72537-2.59433,.92503-.54465,.09351-1.03496,.11627-1.45448,.1289-.00886,.24262-.06571,.50547-.21356,.77589-.43345,.79612-1.33569,1.17521-2.69543,1.08422-1.49621-.07835-2.72827-.36393-3.81505-.61414-.94901-.21734-1.76663-.40184-2.40857-.35888-1.19037,.09603-2.10783,1.04886-3.18445,2.28474l-2.68784,3.1415h-.00003Z" fill="#e6e6e6"/>
                        <path d="M575.59494,228.23263l-4.91427,1.89481-.45177-.1585c-2.0893-.73372-3.98284-.89039-5.63005-.46626-.26191,.06738-.52028,.14819-.78355,.2303-1.04328,.32582-2.34008,.7312-4.04994,.44798-.95386-.16008-3.21187-.72023-3.39243-2.40516-.0533-.4524,.06061-.83501,.2296-1.14713-.0683-.02127-.13691-.04378-.21104-.06745-.90246-.30291-1.3373-.61606-1.7561-.91778-.32204-.23171-.65398-.47127-1.37613-.79401-.31671-.14164-.58946-.24517-.81881-.33266-.69423-.26604-1.53457-.63097-1.77555-1.59984-.22163-1.04448,.4899-1.80848,.9607-2.31474,.83958-.90341,1.48969-1.3835,1.92097-1.7017,.15774-.11583,.33493-.24722,.38549-.30357,.40175-.46068-.7641-3.04345-1.19733-4.01805-.98109-2.187-1.83007-4.07944-.60147-5.27299,.87844-.85481,2.35637-.7786,4.51176,.23698,.6709,.31659,1.21747,.69713,1.65918,1.0464,.12058-.417,.36598-.82625,.84998-1.09295h0c1.14646-.62984,2.65276,.10259,4.48157,2.17443,.45615,.51398,1.06641,1.20704,1.55281,2.27484,.22859,.50311,.37496,.97161,.49362,1.37424,.23695-.05298,.5056-.06464,.80469,.00977,.88002,.21734,1.4756,.99392,1.73246,2.33226,.30373,1.46715,.34001,2.73136,.37363,3.84606,.03048,.97312,.05938,1.81078,.2638,2.42083,.39485,1.12708,1.54919,1.77283,3.01776,2.50078l3.72053,1.80309-.00013,.00003Z" fill="#e6e6e6"/>
                        <path d="M572.87499,212.81262l-.58634-5.23417,.2679-.3968c1.23966-1.83486,1.87151-3.62676,1.87908-5.32768,.00126-.27042-.01138-.54086-.02402-.81632-.05055-1.09181-.11371-2.449,.59394-4.03113,.3968-.88204,1.51137-2.92415,3.18701-2.67142,.45114,.06319,.79234,.27042,1.05138,.51303,.03792-.06064,.07709-.12131,.11879-.18702,.52189-.79612,.93511-1.13729,1.33317-1.46586,.30581-.25274,.62174-.51303,1.11709-1.12973,.21734-.27042,.38668-.50799,.52949-.70765,.43345-.60402,.99956-1.32435,1.99787-1.31171,1.06654,.05055,1.62508,.93259,1.99535,1.51641,.66091,1.04126,.96039,1.7919,1.15879,2.28978,.07205,.18198,.15418,.38668,.19588,.44987,.34373,.50547,3.13774,.03284,4.19035-.13902,2.36435-.39428,4.41025-.73545,5.25314,.75568,.60406,1.06654,.15544,2.4768-1.37364,4.3041-.47641,.56866-.98314,1.00082-1.43302,1.33951,.37278,.22242,.70636,.56359,.84163,1.09941h0c.31845,1.26872-.77211,2.53999-3.24008,3.78347-.61288,.31085-1.43806,.72537-2.59433,.92503-.54465,.09351-1.03496,.11627-1.45448,.1289-.00886,.24262-.06571,.50547-.21356,.77589-.43345,.79612-1.33569,1.17521-2.69543,1.08422-1.49621-.07835-2.72827-.36393-3.81505-.61414-.94901-.21734-1.76663-.40184-2.40857-.35888-1.19037,.09603-2.10783,1.04886-3.18445,2.28474l-2.68784,3.1415h-.00003Z" fill="#e6e6e6"/>
                        <path d="M578.23046,314.41236l-1.09689-.68745-.26537-1.2662,.26537,1.2662-1.27884,.14659c-.02023-.11879-.08973-.39176-.19459-.81888-.57244-2.34033-2.31758-9.46243-3.77335-20.67882-1.01602-7.82975-1.59098-15.87937-1.70977-23.92902-.11879-8.06225,.26285-14.16585,.56866-19.07142,.23124-3.70004,.51181-7.22318,.78726-10.65535,.73293-9.16926,1.42416-17.8305,.90983-27.41928-.11371-2.14067-.35258-6.5964-2.95573-11.33773-1.51011-2.74977-3.59011-5.19118-6.18318-7.2535l1.61244-2.02693c2.86222,2.27966,5.16338,4.98395,6.84031,8.03701,2.88624,5.25689,3.14657,10.11197,3.27166,12.4447,.52315,9.75812-.17564,18.50279-.91617,27.76048-.27297,3.41951-.5535,6.92748-.78348,10.61236-.30329,4.86012-.68112,10.91058-.56359,18.86924,.11627,7.95358,.6849,15.90465,1.68701,23.63585,1.43806,11.07488,3.15795,18.09083,3.7228,20.39577,.30077,1.23084,.36393,1.48861,.0556,1.9764v-.00003Z" fill="#e6e6e6"/>
                        <path d="M558.55751,196.81953c-.10615,0-.21356-.00252-.32223-.01012-2.20386-.11879-4.24469-1.43806-6.06691-3.91994-.85424-1.16764-1.29147-2.49956-2.16343-5.15581-.13521-.40944-.79234-2.48692-1.19166-5.34536-.26159-1.86773-.22872-2.64866,.14154-3.33863,.4107-.76832,1.07539-1.30411,1.82348-1.66552-.03284-.24769-.00633-.50295,.10111-.76328,.44102-1.07918,1.61371-.93763,2.24808-.8694,.32097,.04044,.72155,.09351,1.15375,.07076,.67985-.03284,1.04507-.23505,1.59855-.53834,.52949-.29065,1.18785-.65206,2.16469-.85172,1.92585-.40184,3.53956,.14406,4.07156,.32349,2.79903,.93259,4.17897,3.10865,5.77626,5.62841,.31845,.50547,1.41152,2.34537,2.13308,4.86768,.52063,1.8197,.44735,2.62846,.29065,3.22996-.31845,1.23588-1.07032,1.94353-2.97975,3.50545-1.99408,1.6352-2.99491,2.45408-3.85422,2.95195-2.00039,1.15501-3.2565,1.88034-4.92454,1.88034v.00006Z" fill="#e6e6e6"/>
                    </g>
                    <g>
                        <path d="M444.38396,268.70265H241.31757c-8.1748,0-14.82526-6.65106-14.82526-14.82526V100.32524c0-8.1742,6.65045-14.82526,14.82526-14.82526h203.06638c8.1748,0,14.82526,6.65106,14.82526,14.82526V253.87739c0,8.1742-6.65045,14.82526-14.82526,14.82526Z" fill="#fff"/>
                        <path d="M444.38396,268.70265H241.31757c-8.1748,0-14.82526-6.65106-14.82526-14.82526V100.32524c0-8.1742,6.65045-14.82526,14.82526-14.82526h203.06638c8.1748,0,14.82526,6.65106,14.82526,14.82526V253.87739c0,8.1742-6.65045,14.82526-14.82526,14.82526ZM241.31757,87.97569c-6.80942,0-12.34955,5.54013-12.34955,12.34955V253.87739c0,6.80942,5.54013,12.34955,12.34955,12.34955h203.06638c6.80942,0,12.34955-5.54013,12.34955-12.34955V100.32524c0-6.80942-5.54013-12.34955-12.34955-12.34955H241.31757Z" fill="#3f3d56"/>
                        <circle cx="422.07354" cy="100.35425" r="3.71357" fill="#3f3d56"/>
                        <circle cx="431.97638" cy="100.35425" r="3.71357" fill="#3f3d56"/>
                        <circle cx="441.87923" cy="100.35425" r="3.71357" fill="#3f3d56"/>
                        <path d="M247.53587,160.39026c-1.02389,0-1.85678,.83289-1.85678,1.85678,0,.49925,.19281,.96103,.54277,1.30192,.35298,.36144,.81537,.55486,1.31401,.55486h191.86765c1.02389,0,1.85678-.83289,1.85678-1.85678,0-.49925-.19281-.96103-.54277-1.30192-.35298-.36144-.81537-.55486-1.31401-.55486H247.53587Z" fill="#e6e6e6"/>
                        <path d="M404.74356,159.77133v4.95142H247.53587c-.68081,0-1.29973-.27237-1.74534-.73037-.45808-.44561-.73037-1.06454-.73037-1.74534,0-1.36169,1.1141-2.47571,2.47571-2.47571h157.20769Z" fill="#6c63ff"/>
                        <path d="M436.30888,150.48741h-24.75712c-2.73017,0-4.95142-2.22065-4.95142-4.95142s2.22125-4.95142,4.95142-4.95142h24.75712c2.73017,0,4.95142,2.22065,4.95142,4.95142s-2.22125,4.95142-4.95142,4.95142Z" fill="#e6e6e6"/>
                        <path d="M274.14977,124.49244h-24.75712c-2.73017,0-4.95142-2.22065-4.95142-4.95142s2.22125-4.95142,4.95142-4.95142h24.75712c2.73017,0,4.95142,2.22065,4.95142,4.95142s-2.22125,4.95142-4.95142,4.95142Z" fill="#e6e6e6"/>
                        <path d="M247.53587,216.09377c-1.02389,0-1.85678,.83289-1.85678,1.85678,0,.49925,.19281,.96103,.54277,1.30192,.35298,.36144,.81537,.55486,1.31401,.55486h191.86765c1.02389,0,1.85678-.83289,1.85678-1.85678,0-.49925-.19281-.96103-.54277-1.30192-.35298-.36144-.81537-.55486-1.31401-.55486H247.53587Z" fill="#e6e6e6"/>
                        <path d="M309.42866,215.47485v4.95142h-61.89279c-.68081,0-1.29973-.27237-1.74534-.73037-.45808-.44561-.73037-1.06454-.73037-1.74534,0-1.36169,1.1141-2.47571,2.47571-2.47571h61.89279Z" fill="#6c63ff"/>
                        <path d="M436.30888,206.19093h-24.75712c-2.73017,0-4.95142-2.22065-4.95142-4.95142s2.22125-4.95142,4.95142-4.95142h24.75712c2.73017,0,4.95142,2.22065,4.95142,4.95142s-2.22125,4.95142-4.95142,4.95142Z" fill="#e6e6e6"/>
                    </g>
                </svg>
            </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <svg class="w-5/6 sm:h-64 mx-auto" viewBox="0 0 1176.60617 873.97852" xmlns="http://www.w3.org/2000/svg">
                    <title>Search</title>
                    <polygon points="782.01 634.12 524.27 634.12 524.27 632.02 782.39 632.02" fill="#3f3d56"/>
                    <circle cx="6.8126" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="6.814" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="41.736" r="6.8133" fill="#6c63ff"/>
                    <circle cx="144.77" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="41.736" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="76.658" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="111.58" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="146.5" r="6.8133" fill="#6c63ff"/>
                    <circle cx="75.791" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="146.5" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="181.42" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="216.35" r="6.8133" fill="#6c63ff"/>
                    <circle cx="110.28" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="216.35" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="251.27" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="286.19" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="6.8126" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="41.302" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="75.791" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="110.28" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="144.77" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="179.26" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="213.75" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="248.24" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="282.72" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <circle cx="317.21" cy="321.11" r="6.8133" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m609.21 193.83a8.614 8.614 0 0 1 8.614 8.614v344.56a8.614 8.614 0 0 1-8.614 8.614h-247.22a8.614 8.614 0 0 1-8.614-8.614v-344.56a8.614 8.614 0 0 1 8.614-8.614h247.22" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m362.99 546h245.22v-342.55h-245.22z" fill="#fff"/>
                    <path transform="translate(-208.8 -132.94)" d="m553.65 257.64a1.7228 1.7228 0 0 1 1.7228 1.7228v3.4456a1.7228 1.7228 0 0 1-1.7228 1.7228h-136.1a1.7228 1.7228 0 0 1-1.7228-1.7228v-3.4456a1.7228 1.7228 0 0 1 1.7228-1.7228h136.1" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m553.65 274.01a1.7228 1.7228 0 0 1 1.7228 1.7228v3.4456a1.7228 1.7228 0 0 1-1.7228 1.7228h-136.1a1.7228 1.7228 0 0 1-1.7228-1.7228v-3.4456a1.7228 1.7228 0 0 1 1.7228-1.7228h136.1" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m553.65 290.38a1.7228 1.7228 0 0 1 1.7228 1.7228v3.4456a1.7228 1.7228 0 0 1-1.7228 1.7228h-136.1a1.7228 1.7228 0 0 1-1.7228-1.7228v-3.4456a1.7228 1.7228 0 0 1 1.7228-1.7228h136.1" fill="#6c63ff"/>
                    <path transform="translate(-208.8 -132.94)" d="m553.65 307.1a1.7228 1.7228 0 0 1 1.7228 1.7228v3.4456a1.7228 1.7228 0 0 1-1.7228 1.7228h-136.1a1.7228 1.7228 0 0 1-1.7228-1.7228v-3.4456a1.7228 1.7228 0 0 1 1.7228-1.7228h136.1" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m553.65 323.47a1.7228 1.7228 0 0 1 1.7228 1.7228v3.4456a1.7228 1.7228 0 0 1-1.7228 1.7228h-136.1a1.7228 1.7228 0 0 1-1.7228-1.7228v-3.4456a1.7228 1.7228 0 0 1 1.7228-1.7228h136.1" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m553.65 339.83a1.7228 1.7228 0 0 1 1.7228 1.7228v3.4456a1.7228 1.7228 0 0 1-1.7228 1.7228h-136.1a1.7228 1.7228 0 0 1-1.7228-1.7228v-3.4456a1.7228 1.7228 0 0 1 1.7228-1.7228h136.1" fill="#e6e6e6"/>
                    <path transform="translate(-208.8 -132.94)" d="m418.42 394.89a2.002 2.002 0 0 0-2 2v92.916a2.0023 2.0023 0 0 0 2 2h134.13a2.0023 2.0023 0 0 0 2-2v-92.916a2.002 2.002 0 0 0-2-2z" fill="#6c63ff"/>
                    <polygon points="277.24 161.18 275.83 160.81 306.56 45.221 484.78 45.221 484.78 46.678 307.68 46.678" fill="#3f3d56"/>
                    <path transform="translate(-208.8 -132.94)" d="m708.15 194.18a15.291 15.291 0 1 1 15.291-15.291 15.308 15.308 0 0 1-15.291 15.291zm0-29.126a13.835 13.835 0 1 0 13.835 13.835 13.85 13.85 0 0 0-13.835-13.835z" fill="#3f3d56"/>
                    <circle cx="499.35" cy="45.95" r="5.8251" fill="#6c63ff"/>
                    <polygon points="272.48 356.94 273.88 357.32 242.94 472.84 64.712 472.5 64.715 471.05 241.82 471.39" fill="#3f3d56"/>
                    <path transform="translate(-208.8 -132.94)" d="m258.98 589.4a15.291 15.291 0 1 1-15.32 15.262 15.308 15.308 0 0 1 15.32-15.262zm-0.05582 29.125a13.835 13.835 0 1 0-13.808-13.861 13.85 13.85 0 0 0 13.808 13.861z" fill="#3f3d56"/>
                    <circle cx="50.15" cy="471.75" r="5.8251" fill="#6c63ff"/>
                    <polygon points="616.83 600.59 606.55 600.59 608.39 543.7 635.55 545.17" fill="#ffb8b8"/>
                    <path transform="translate(-208.8 -132.94)" d="m827.04 766.23c-3.1021 1.4158-5.7005-10.055-8.3171-7.4832-7.3191 7.1926-14.882 8.7589-24.651 5.6186l-0.22627-0.03823a4.5752 4.5752 0 0 1-2.8838-5.9622 4.5752 4.5752 0 0 1 3.1743-2.8322l7.7839-1.946 12.222-21.494 12.477-0.84288a29.808 29.808 0 0 1 5.5131 25.429c-1.1322 4.6212-2.8801 8.5415-5.0916 9.5508z" fill="#2f2e41"/>
                    <polygon points="714.47 593.07 704.91 596.85 685.69 543.28 711.49 534.65" fill="#ffb8b8"/>
                    <path transform="translate(-208.8 -132.94)" d="m936.6 755.9c-2.3639 2.4575-8.999-7.2532-10.486-3.8996-4.1606 9.3804-10.617 13.618-20.856 14.291l-0.22447 0.04767a4.5752 4.5752 0 0 1-4.8746-4.4836 4.5752 4.5752 0 0 1 1.9101-3.8011l6.5225-4.6725 3.4597-24.482 11.292-5.3728a29.808 29.808 0 0 1 14.479 21.619c0.64682 4.7137 0.46335 9.0021-1.2219 10.754z" fill="#2f2e41"/>
                    <path transform="translate(-208.8 -132.94)" d="m892.07 451.3-15.778 4.0573a8.2577 8.2577 0 0 1-10.308-7.6802 8.2577 8.2577 0 0 1 8.5179-8.5708l13.898 0.44833 26.781-9.7518-25.313-18.878 2.9364-26.427 49.331 39.604a8.1947 8.1947 0 0 1 3.0437 5.8064 8.1947 8.1947 0 0 1-6.0086 8.4873c-11.559 9.4331-28.399 12.322-47.101 12.904z" fill="#ffb8b8"/>
                    <circle cx="647.3" cy="193.57" r="25.693" fill="#ffb8b8"/>
                    <path transform="translate(-208.8 -132.94)" d="m887.67 361.74-34.502 13.948a46.631 46.631 0 0 0-8.075-30.832l28.629-6.6068c-0.37229 8.7438 4.3559 16.56 13.948 23.491z" fill="#ffb8b8"/>
                    <path transform="translate(-208.8 -132.94)" d="m893.91 421.57c-27.812 2.226-43.025-1.4673-66.435-15.049l8.809-20.554a17.001 17.001 0 0 1 7.0034-16.278l9.1465-6.4788 27.895-8.075 1.2513 0.06256a15.269 15.269 0 0 1 14.462 14.079c6.0602 18.111 6.0995 35.617-2.1325 52.293z" fill="#6c63ff"/>
                    <path transform="translate(-208.8 -132.94)" d="m888.4 464.51-59.461-6.6068-4.4045-19.086c-9.763-14.738-5.5017-28.237 5.8727-41.109 20.733 13.306 39.978 19.056 67.536 14.682-7.3286 17.823-14.097 35.34-9.5431 52.12z" fill="#2f2e41"/>
                    <path transform="translate(-208.8 -132.94)" d="m934.65 686.94-47.349-2.5693-15.416-122.59-12.479 121.86-56.158-2.5693c17.131-80.111 29.031-156.16 25.693-226.1l58.727 5.1386c19.903 20.986 29.786 54.485 35.603 94.33s10.506 86.036 11.378 132.5z" fill="#2f2e41"/>
                    <circle cx="675.58" cy="161.34" r="8.8313" fill="#2f2e41"/>
                    <path transform="translate(-208.8 -132.94)" d="m875.29 292.12a8.8244 8.8244 0 0 1 8.8271-8.2541c-0.18236-0.02313-0.36309-0.05126-0.549-0.06321a8.8313 8.8313 0 0 0-1.1332 17.626c0.18595 0.01195 0.36879 0.0072 0.55261 0.00761a8.8244 8.8244 0 0 1-7.6975-9.3165z" fill="#2f2e41"/>
                    <path transform="translate(-208.8 -132.94)" d="m875.24 295.89c-7.8761-6.5337-30.467 1.7704-31.925 6.1631-10.651 1.4515-18.715 7.6655-18.715 18.715v6e-5c6.3322 2.5941 13.534 2.2744 21.319 0 12.41 10.113 13.261 22.827 5.7135 37.429l9.285 0.18568 11.509-16.821 0.55038 17.062 21.283-0.42689v-24.451a51.121 51.121 0 0 0-5.4582-23.42c-3.3167-6.4435-8.4638-10.206-13.563-14.436z" fill="#2f2e41"/>
                    <ellipse cx="646.61" cy="200.24" rx="4.2232" ry="5.9124" fill="#ffb8b8"/>
                    <path transform="translate(-208.8 -132.94)" d="m823.11 559.93a1.483 1.483 0 0 1 1.483 1.483v59.319a1.483 1.483 0 0 1-1.483 1.483h-42.562a1.483 1.483 0 0 1-1.483-1.483v-59.319a1.483 1.483 0 0 1 1.483-1.483h42.562" fill="#6c63ff"/>
                    <path transform="translate(-208.8 -132.94)" d="m828.94 537.92 1.4373 24.913a10.819 10.819 0 0 1-12.375 11.327c-6.3295-0.93081-6.4734-7.121-4.9217-13.328l5.9117-23.647c14.502-51.998 18.417-103.04 17.684-152.81a12.498 12.498 0 0 1 12.834-12.714 12.491 12.491 0 0 1 12.121 12.927c-2.0529 58.45-10.578 111.53-32.691 153.33z" fill="#ffb8b8"/>
                </svg>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Search blotter records
                </h3>
                <p class="text-gray-600 mb-8">
                    Record Blotter Report, Print letter of brgy blotter, police blotter, and certificate to file action.
                    <br />
                    <br />

                    View your blotter:

                    <a class="text-pink-500 underline" href="{{ url('/dashboard/view-blotter') }}">View</a>
                </p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)">
            <g class="wave" fill="#ffffff" fill-rule="nonzero">
                <path
                d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
                ></path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#ffffff" fill-rule="nonzero">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"
                ></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                </g>
            </g>
            </g>
        </g>
    </svg>
    <section class="container mx-auto text-center py-6 mb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            Sign up
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
            or if you have an account just login.
        </h3>
        <a href="{{ route('register') }}" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Sign up!
        </a>
    </section>
    <!--Footer-->
    <footer class="bg-white">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6 text-black">
                    <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <x-application-logo class="inline h-10 w-auto fill-current text-gray-600" />
                    E-BLOTTERING
                    </a>
                </div>
                
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">WORKING HOURS</p>
                    <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <p class="no-underline hover:underline text-gray-800 hover:text-pink-500">Monday- Friday :8:00AM -5:00pm</p>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <p class="no-underline hover:underline text-gray-800 hover:text-pink-500">Saturday – 8:00am -3:30pm</p>
                    </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="https://web.facebook.com/pulispangasinan" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Address</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <p class="no-underline hover:underline text-gray-800 hover:text-pink-500">Pangasinan Police Provincial Office, Lingayen, Pangasinan</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery if you need it -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
