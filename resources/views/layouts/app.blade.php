<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Learn Korean</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" href="/image/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <header>
            {{-- Меню --}}
              <nav class="navbar navbar-expand-lg" id="mainNav">
                <div class="container">
                    <a href="/">
                      <img src="/image/logo.svg" alt="" width="247" height="123">
                    </a>
                    <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="18" height="28" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 4.75V9.5H38V4.75H0ZM0 18.8575V23.6075H38V18.8575H0ZM0 33.1075V37.8575H38V33.1075H0Z" fill="#020945"/>
                    </svg>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul  class="navbar-nav ms-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0  px-lg-3 rounded" href="{{route('home')}}">Главная</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" style="width: 100px" href="{{Route('about')}}">О школе</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Курсы
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  {{-- <li><a class="dropdown-item" href="{{Route('course')}}">Курсы</a></li> --}}
                                  <li><a class="dropdown-item" href="{{Route('group')}}">Групповые</a></li>
                                  <li><a class="dropdown-item" href="{{Route('individual')}}">Индивидуальные</a></li>
                                  <li><a class="dropdown-item" href="{{Route('exam')}}">Подготовка к TOPIK</a></li>
                                </ul>
                              </li> 
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('new')}}">Новости</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('review')}}">Отзывы</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('contact')}}">Конктакты</a></li>
                          
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link login" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                    </li>
                                @endif
        
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link register" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="padding-top: 16.5px">
                                        {{ Auth::user()->name }}
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @if (Auth::user()->is_admin)
                                        <a class="dropdown-item" href="{{ url('/adminpanel') }}">
                                            {{ __('Админ-панель') }}
                                        </a>
                                        @endif

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Выйти') }}
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
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
          <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container text-center">
                <a href="/">
                  <img src="/image/logo.svg" alt="" width="247" height="123">
                </a>
                <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="18" height="28" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 4.75V9.5H38V4.75H0ZM0 18.8575V23.6075H38V18.8575H0ZM0 33.1075V37.8575H38V33.1075H0Z" fill="#020945"/>
                </svg>
                </button>
                
                <div class="container collapse navbar-collapse" id="navbarResponsive">
                    <div class="row">
                        <div class="col">
                            <ul class="nav flex-column">
                              <li class="nav-item mx-0 mx-lg-1">
                                  <a class="nav-link py-3 px-0  px-lg-3 rounded text-start" href="{{route('home')}}">Главная</a>
                              </li>
                              <li class="nav-item mx-0 mx-lg-1">
                                  <a class="nav-link py-3 px-0 px-lg-3 rounded text-start" href="{{Route('about')}}">О школе</a>
                              </li>
                              <li class="nav-item dropup">
                                <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 text-start" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Курсы
                                </a>
                                <ul class="dropdown-menu">
                                    {{-- <li><a class="dropdown-item" href="{{Route('course')}}">Курсы</a></li> --}}
                                    <li><a class="dropdown-item" href="{{Route('group')}}">Групповые</a></li>                                
                                    <li><a class="dropdown-item" href="{{Route('individual')}}">Индивидуальные</a></li>
                                    <li><a class="dropdown-item" href="{{Route('exam')}}">Подготовка к TOPIK</a></li>
                                </ul>
                              </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column">
                                <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded text-start" href="{{Route('new')}}">Новости</a>
                                </li>
                                <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded text-start" href="{{Route('review')}}">Отзывы</a>
                                </li>
                                <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded text-start" href="{{route('contact')}}">Конктакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <div class="container-fluid">
                                <p class="text-start fs-6">г.Челябинск ул.Гагарина, 43</p>
                                <p class="text-start fs-6">пн-пт 9:00 - 21:00,</p>
                                <p class="text-start fs-6">сб 9:00 - 18:00</p>
                                <p class="text-start fs-6">
                                    <a href="tel:+">+7 (351) 265 55 54</a>
                                </p>
                                <p class="text-start fs-6">
                                    <a href="tel:+">+7 (351) 261 14 04</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-2">
                            <ul class="nav flex-column">
                                @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link enter" href="{{ route('login') }}">{{ __('Записаться') }}</a>
                                    </li>
                                @endif
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        </footer>
</body>
</html>
