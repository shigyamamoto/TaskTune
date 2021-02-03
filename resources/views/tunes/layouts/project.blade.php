<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . ' | ' : '' }}|TaskTune</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-5.15.2-web/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-5.15.2-web/css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-5.15.2-web/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        header {
            font-family: 'Londrina Solid', cursive;
        }
    </style>
</head>
<body>
<header class="navbar navbar-expand-md navbar-dark bd-navbar">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <a class="navbar-brand p-0 me-2" href="/">
            <img id="header-logo" src="{{ asset('img/logo@2x.png') }}">
            <span>
                    TaskTune
                </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
                aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor"
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>

        </button>

        <div class="collapse navbar-collapse" id="bdNavbar">
            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="{{ route('tune.dashboard') }}">ダッシュボード</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="{{ route('tune.projects') }}">プロジェクト</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2">管理</a>
                </li>
            </ul>

            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="#" rel="noopener">
                        <i class="fas fa-dove"></i> shigeki.yamamoto
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="#" rel="noopener">
                        個人設定
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="javascript:logout.submit()" rel="noopener">
                        ログアウト
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <h1 id="project-name">
        <i class="fas fa-cubes"></i> {{ $project->name }}
    </h1>
    <hr>
    @yield('content')
</div>
</body>
</html>
