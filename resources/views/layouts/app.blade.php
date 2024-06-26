<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <title>SEA Salon</title>
</head>
<body>
    @include('components.navbar.navbar')
    @yield('content')
    @include('components.footer.footer')
    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>
