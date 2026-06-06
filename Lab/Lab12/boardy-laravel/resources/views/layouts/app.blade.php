<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Boardy')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Boardy</a>
            <div class="navbar-nav ms-auto">
                @auth
                    <span class="nav-item nav-link text-light">
                        {{ Auth::user()->name }}
                    </span>
                    <a class="nav-item nav-link" href="{{ route('posts.create') }}">Создать пост</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-light">Выход</button>
                    </form>
                @else
                    <a class="nav-item nav-link" href="{{ route('login') }}">Вход</a>
                    <a class="nav-item nav-link" href="{{ route('register') }}">Регистрация</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
