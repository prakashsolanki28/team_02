<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    MBM UNIVERSITY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('about') }}">About</a>
                        </li>
                          <li class="nav-item">
                          <a class="nav-link" href="{{ url('news') }}">New & Events</a>
                        </li>
                       <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Acadmics
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}">Syallbus</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Cources</a>
                             </div>
                         </li>
                         <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Gallery</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Contact</a>
                      </li>
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
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
        </div>
    </div>
</nav>
<main class="pb-4">
    @yield('content')
</main>
<footer class="bg-secondary py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h3 class="text-light">About College</h3>
                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-light">Quick Link</h3>
                <ul style="list-style: none;" class="p-0">
                    <li class="py-2"><i class="bi bi-chevron-right text-light me-2"></i><a class="text-light text-decoration-none" href="#">Home</a></li>
                    <li class="py-2"><i class="bi bi-chevron-right text-light me-2"></i><a class="text-light text-decoration-none" href="#">About</a></li>
                    <li class="py-2"><i class="bi bi-chevron-right text-light me-2"></i><a class="text-light text-decoration-none" href="#">Contact</a></li>
                    <li class="py-2"><i class="bi bi-chevron-right text-light me-2"></i><a class="text-light text-decoration-none" href="#">Syllbus</a></li>
                    <li class="py-2"><i class="bi bi-chevron-right text-light me-2"></i><a class="text-light text-decoration-none" href="#">Notice</a></li>
                    <li class="py-2"><i class="bi bi-chevron-right text-light me-2"></i><a class="text-light text-decoration-none" href="#">Cources</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-light">News & Events</h3>
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-light">News 1</h5>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<a href="#">Read more.</a></p>
                    </div>
                    <div class="col-12">
                        <h5 class="text-light">News 2</h5>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<a href="#">Read more.</a></p>
                    </div>
                    <div class="col-12">
                        <h5 class="text-light">News 3</h5>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<a href="#">Read more.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-light">Location</h3>
                <ul class="p-0 ps-3">
                    <li class="text-light py-2"><i class="bi bi-map"></i> Mbm College</li>
                    <li class="text-light py-2"><i class="bi bi-phone"></i> +91 987456123</li>
                    <li class="text-light py-2"><i class="bi bi-email"></i>info@mbm.org</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
