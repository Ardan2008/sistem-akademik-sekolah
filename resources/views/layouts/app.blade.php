<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik Sekolah - @yield('title', 'Beranda')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
