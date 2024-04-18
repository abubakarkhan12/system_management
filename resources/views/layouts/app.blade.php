<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="    https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
        <div class="row p-3 ">
            <div class="d-flex flex-column flex-shrink-0 bg-light px-5 col-md-3" >
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link link-dark {{ Request::path() == 'home' ? 'active link-light' : '' }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark {{ Request::path() == 'companies' ? 'active link-light' : '' }}" href="{{ route('companies.index') }}">{{ __('Companies') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark {{ Request::path() == 'companies/create' ? 'active link-light' : '' }}" href="{{ route('companies.create') }}">{{ __('Add Company') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-dark {{ Request::path() == 'employees' ? 'active link-light' : '' }}" href="{{ route('employees.index') }}">{{ __('Employees') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-dark {{ Request::path() == 'employees/create' ? 'active link-light' : '' }}" href="{{ route('employees.create') }}">{{ __('Add Employ') }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link link-dark {{ Request::path() == 'logout' ? 'active link-light' : '' }}" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                    </li> --}}
                </ul>
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>
