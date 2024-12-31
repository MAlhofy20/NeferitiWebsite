<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>

    @livewireStyles
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body dir="rtl" class="bg-white">
    @livewireScripts

    @yield('content')

    @include('dashboard.inc._alert')
</body>

</html>