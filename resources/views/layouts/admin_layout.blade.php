<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель - @yield('title')</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/Admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/Admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/Admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/Admin/plugins/summernote/summernote-bs4.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="">
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
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link px-0 login" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="">
        @yield('content')
    </div>

    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
            <a href="/adminpanel">
              <h1>Админ-панель</h1>
            </a>

            <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="18" height="28" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 4.75V9.5H38V4.75H0ZM0 18.8575V23.6075H38V18.8575H0ZM0 33.1075V37.8575H38V33.1075H0Z" fill="#020945"/>
                </svg>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul  class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('news.index')}}">Новости</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('teacher.index')}}">Учителя</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('review.index')}}">Отзывы</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('users.index')}}">Пользователи</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('recording.index')}}">Заявки</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('groups.index')}}">Группы</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{Route('courses.index')}}">Курсы</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- jQuery -->
    <script src="/Admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/Admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/Admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/Admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/Admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/Admin/plugins/moment/moment.min.js"></script>
    <script src="/Admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/Admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/Admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/Admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/Admin/dist/js/pages/dashboard.js"></script>
</body>

</html>
