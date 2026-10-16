
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'BrightServe | Digital Solutions')</title>

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>

<body>

    <header>
        <div class="logo">BrightServe</div>

        <nav>
            <a href="/">Home</a>
            <a href="/#services">Services</a>
            <a href="/#about">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BrightServe. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
