<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tasks for Today' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="{{ route('welcome') }}">Tasks for Today</a>
            <nav aria-label="Main navigation">
                <a href="{{ route('welcome') }}">Today</a>
                <a href="{{ route('tasks.index') }}">All Tasks</a>
                <a href="{{ route('profile') }}">Profile</a>
                <a href="{{ route('about') }}">About</a>
            </nav>
        </div>
    </header>
    <main class="container page-content">
        @yield('content')
    </main>
    <footer class="site-footer">IT0049 Technical Summative Assessment 3</footer>
</body>
</html>
