<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SEA Salon - @yield('title')</title>
</head>
<body>
    <div class="flex h-screen overflow-y-hidden">
        @include('components.sidebar.sidebar')
        <div class="w-full h-full">
            @include('components.navbar.navbar-dashboard')
            <div class="p-4">
                @if (session()->has('success'))
                    <div class="text-green-700 bg-green-100 border border-green-500 p-3">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
