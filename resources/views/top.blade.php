<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito';
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
        <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">サインインする</h1>
        <label for="inputEmail" class="visually-hidden">メールアドレス</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="メールアドレス" required autofocus>
        <label for="inputPassword" class="visually-hidden">パスワード</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> 記憶する
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">サインイン</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
    </form>
</main>

</body>
</html>
