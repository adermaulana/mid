<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Laravel Mid</title>

</head>
<body>

    @include('partials.header')
    @include('partials.sidebar')

    <div class="container mt-5">
        @yield('container')
    </div>

    @include('partials.footer')

    <script src="/js/bootstrap.bundle.js"></script>
</body>
</html>