<!DOCTYPE html>
<html>
<head>
    <!-- Vite Styles -->
    @vite('resources/css/app.scss')
    <!-- Vite Scripts -->
    @vite('resources/js/app.js')

    @yield('navbar')
</head>
<body>
    AAAAA
    <div>
        @yield('content')
    </div>
</body>
</html>