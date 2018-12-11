<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="gsPNmi0Batq3Rsq27SlLwLvxB5o8Ksla7tsIZojO">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center" >
                <a class="navbar-brand" href="/">Laravel</a>&nbsp;
                <a class="navbar-brand" href="/tasklist/lista">Tarefas</a>&nbsp;
                <a class="navbar-brand" target="_blank" href="https://www.zanchet.org">Mario Zanchet</a>&nbsp;
                @if (Route::has('login'))
                    @auth
                        <a class="navbar-brand" href="{{ route('logout') }}">Logout</a>&nbsp;
                    @else
                        <a class="navbar-brand" href="{{ route('login') }}">Login</a>&nbsp;
                        <a class="navbar-brand" href="{{ route('register') }}">Register</a>&nbsp;
                    @endauth
                @endif
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>

