<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Londrina Solid', cursive;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .top-logo {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body class="text-center">
<main class="top-logo">
    <form>
        <h1 class="mb-3 fw-normal">TaskTune</h1>
        <img class="mb-4" src="{{ asset('img/logo@2x.png') }}" alt="" width="256" height="256">
        <div>
            <a href="{{ route('login') }}">Login</a>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; 2021 Supi.</p>
    </form>
</main>

</body>
</html>
